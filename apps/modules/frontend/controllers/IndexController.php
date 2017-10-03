<?php
namespace Modules\Frontend\Controllers;

use Modules\Models\Psicologo;
use Phalcon\Http\Request;

class IndexController extends ControllerBase {
    public function indexAction(){
    	echo $this->suma(1,1);
    }

    public function informacionAction()
    {

    }

    public function formularioPsicologoAction()
    {
    }

    public function guardarpsicologosAction(){
        $request=new Request();
        if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);
        $psicologos=new Psicologo();
        $psicologos->save([
            "id_psicologo"=>$request->getPost('cedula'),
            "nombre"=>$request->getPost('nombre'),
            "apellidoP"=>$request->getPost('apePaterno'),
            "apellidoM"=>$request->getPost('apeMaterno'),
            "especialidad"=>$request->getPost('especialidad'),
            "num_celular"=>$request->getPost('phone'),
            "image_cedula"=>$request->getPost('image-2'),
            "status"=>'ESPERA'
        ]);
        $this->response(array("message"=>"correcto"),200);
    }
    public function uploadimageAction()
    {
        $request = $this->request;

        if($request->isPost() && $request->isAjax()){
            if($request->hasFiles()==true){
                foreach($request->getUploadedFiles() as $file){
                    $image_replace = preg_replace('/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\_\.!¡¿?]/', '',$file->getName());
                    $new_image = $image_replace;

                    if($file->moveTo(dirname(dirname(dirname(dirname(__DIR__))))."/public/dropzone_images/".$new_image)){
                          $this->response(array("name"=>$new_image,"message"=>"SUCCESS","code"=>"200"),200);
                    }
                    else{
                        $this->response(array("name"=>$new_image,"message"=>"error try again","code"=>"404"),200);
                    }
                }
            }
        }else{
            exit();
        }
    }
    public function deleteAction(){
        $request = $this->request;
           if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
            $image = $request->getPost("image");
            if($image){
               if(file_exists('./dropzone_images/'.$image)){
                   unlink("./dropzone_images/".$image);
                   $this->response(array("message"=>"SUCCESS","code"=>"200"),200);
               }else{
                   $this->response(array("message"=>"error: No se ha encontrado una imagen","code"=>"200"),200);
               }
            }else{
                $this->response(array("message"=>"file null","code"=>"200"),200);
            }
    }
}