<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdUser;
use Modules\Models\Users;
use Phalcon\Http\Request;

class LoginController extends \Phalcon\Mvc\Controller
{
    public function initialize(){
        $this->assets->collection("functions")->addCss("dash/css/general.min.css");
        $this->assets->collection('JsIndexLogin')
            ->setTargetPath("dash/js/login.min.js")
            ->setTargetUri("dash/js/login.min.js")
            ->addJs("dash/js/jquery.min.js")
            ->addJs("dash/js/formValidation.min.js")
            ->addJs("dash/js/bootstrapV.min.js")
            ->addJs("dash/js/es_ES.js")
            ->join(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin());
        $this->view->setLayout('login');
        $this->_registerToken();
    }
    public function indexAction(){
        $session = $this->getSession();
        $this->view->setVar("key",$session["token"]);
    }
    public function ajaxAction()
    {
        $request = new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("menssage"=>"Error"),404);

        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $consulta = Users::findFirst("username='$username'");
        if($consulta and $consulta->getPassword()== $password)
        {
            $this->_registerSession($consulta);
            $this->session->remove("session");
            $this->response(array("message"=>"SUCCESS","code"=>200),200);
        }else{
            $this->response(array("Message"=>"usurio o contraseña incorrecta",
                "code"=> 200,
                "usuario"=>$request->getPost("username"),
                "password"=>$request->getPost("password")),200);
        }
    }
    public function sessionAction(){
        $session = $this->getSession();
        $key = $this->request->getPost("key");
        if($this->validate() && $session && hash_equals($key,$session["token"])){
            $request = $this->request;
            $user = new CdUser();
            $username      = $request->getPost("username");
            $password   = $request->getPost("password");
            $session = $user->findFirst("username='$username'");
            if(!$session){
                $this->response(array("message"=>"ERROR","code"=>400,"notification"=>"username incorrect"),200);
            }
            else if($session->getStatus()=="ACTIVE"){
                if($this->security->checkHash($password,$session->getPassword())){
                    $this->_registerSession($session);
                    $this->session->remove("session");
                    $this->response(array("message"=>"SUCCESS","code"=>200,"url"=>$this->url->getBaseUri()."inscription"),200);
                }
                else{
                    $this->response(array("message"=>"ERROR","code"=>300,"notification"=>"Password incorrect"),200);
                }
            }
        }
        else{
            $this->response(array("message"=>"ERROR","code"=>404,"notification"=>"Values Not found !!!"),404);
        }
    }
    public function _registerSession($user){
        $this->session->set("auth",array(
                "uid" => $user->getUid(),
                "username"=>$user->getUsername(),
                "rol"=>$user->getRol(),
                //"name"=>$user->getName(),
                //"photo"=>$user->getPhoto(),
                //"username"=>$user->getusername()
            )
        );
    }
    public function logoutAction(){
        $this->session->remove("auth");
        $this->session->remove("session");
        $this->response->redirect("login");
        $this->flash->success('Goodbye!');
    }
    public function response($dataArray,$status)
    {
        $this->view->disable();
        if($status==200){
            $this->response->setStatusCode($status, "OK");
        }else{
            $this->response->setStatusCode($status, "ERROR");
        }
        $this->response->setJsonContent($dataArray);
        $this->response->send();
    }
    public function validate(){
        if($this->request->isPost() && $this->request->isAjax()){
            return true;
        }else{
            return false;
        }
    }
    protected function getSession(){
        return $this->session->get("session");
    }
    private function generateToken(){
        return bin2hex(openssl_random_pseudo_bytes(32));
    }
    public function _registerToken(){
        $session = $this->getSession();
        if(empty($session)) {
            $this->session->set("session",array(
                    "token" => $this->generateToken(),
                )
            );
        }
    }
}
