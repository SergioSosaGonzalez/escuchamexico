<?php
namespace Modules\Frontend\Controllers;
use Phalcon\Mvc\Controller;
class ControllerBase extends Controller
{
    public function initialize()
    {}
    public function suma($a,$b)
    {
    	return $a+$b;
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
        exit();
    }
}
