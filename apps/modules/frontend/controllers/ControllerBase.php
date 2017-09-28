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
}
