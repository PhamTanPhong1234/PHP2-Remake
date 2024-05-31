<?php
require_once('baseController.php');
class cartController extends BaseController
{
    function __construct()
    {
        $this->folder = 'cart';
    }

    public function index()
    {
        $this->render('index');
    }

}

