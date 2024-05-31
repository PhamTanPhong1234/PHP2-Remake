<?php
require_once('baseController.php');
class usersController extends BaseController
{
    function __construct()
    {
        $this->folder = 'users';
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

