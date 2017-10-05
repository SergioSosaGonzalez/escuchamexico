<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdUser;
use Modules\Models\Comentarios;
use Modules\Models\Psicologo;
use Modules\Models\Users;
use Phalcon\Http\Request;

class CommentaryController extends ControllerBase
{
    public function indexAction(){
        $consulta= Comentarios::find("status='ESPERA'");
        $this->view->setVar("consulta",$consulta);
    }
    public function cambiostatusAction(){
        $request=new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);

           $cid=$request->getPost('cgid');
           $consulta = Comentarios::findFirst("cid='$cid'");
           $consulta->setStatus($request->getPost('status'));
           $consulta->save();

        $this->response(array("message"=>"correcto","cid"=>$request->getPost('cgid')),200);
    }

    public function deleteAction(){
        $request=new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);

        $comentarios = Comentarios::findFirst("cid=".$request->getPost('id'));
        if(!($comentarios && $comentarios->delete())) $this->response(array("message"=>"No se ha podido borrar","code"=>300),200);

        $this->response(array("message"=>"correcto","id"=>$request->getPost('id')),200);
    }

    public function activosAction(){
        $consulta= Comentarios::find("status='ACTIVO'");
        $this->view->setVar("consulta",$consulta);
    }


}
