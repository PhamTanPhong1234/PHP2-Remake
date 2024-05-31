<?php
require_once('baseController.php');
class productController extends BaseController
{
    function __construct()
    {
        $this->folder = 'product';
    }

    public function index()
    {
        $this->render('index');
    }
    public function create(){
        $this->render('create');
    }
    public function error()
    {
        $this->render('error');
    }
}

