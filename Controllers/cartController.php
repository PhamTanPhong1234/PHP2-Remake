<?php
require_once('baseController.php');

class cartController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function index()
    {
        $this->render('cart');
    }

    public function error()
    {
        $this->render('error');
    }
}
