<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdUser;
use Modules\Models\Psicologo;
use Modules\Models\Users;
use Phalcon\Http\Request;

class PsicologosController extends ControllerBase
{
    public function indexAction(){
        $consulta= Psicologo::find("status='ESPERA'");
        $this->view->setVar("consulta",$consulta);
    }
    public function cambiostatusAction(){
       $request=new Request();
       if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);

       $cedula=$request->getPost('cedula');
       $consulta = Psicologo::findFirst("id_psicologo='$cedula'");
       $consulta->setStatus($request->getPost('status'));
       $consulta->save();
       $this->response(array("message"=>"correcto","cedula"=>$cedula),200);
    }

    public function activosAction(){
        $consulta= Psicologo::find("status='ACTIVO'");
        $this->view->setVar("consulta",$consulta);

    }
    public function inactivosAction(){
        $consulta= Psicologo::find("status='RECHAZADO'");
        $this->view->setVar("consulta",$consulta);

    }


}
