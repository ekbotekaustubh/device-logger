<?php
class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $config = new Config();
        $model = new Model($config->getConfig());

        echo 'in index action';
    }
}
//ini_set('display_errors', 1);
//include 'auth.php';
//include '../layout/header.php';
?>