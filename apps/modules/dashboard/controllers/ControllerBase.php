<?php
namespace Modules\Dashboard\Controllers;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{

    public function initialize(){

        $this->assets->collection('CssIndex')
            ->setTargetPath("dash/css/general.min.css")
            ->setTargetUri("dash/css/general.min.css")
            ->addCss("dash/css/bootstrap.min.css")
            ->addCss("dash/css/font-awesome.css")
            ->join(true)
            ->addFilter(new \Phalcon\Assets\Filters\Cssmin());
        $this->view->setLayout("index");
    }
}
