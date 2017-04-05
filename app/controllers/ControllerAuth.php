<?php

class ControllerAuth extends Controller
{

    public function __construct()
    {
        $this->model = new ModelAuth();
        $this->view = new View();
    }

    public function actionIndex()
    {
        if (isset($_SESSION['login'])) {
            header('Location: /profile/index');
            exit();
        }
        //$data = $this->model->statusModel; //вывод ошибок и замечаний
        $this->view->generate('auth_view.php', 'template_view.php');
    }

    public function actionPost()
    {
        $this->model->postHandler();
        //$data = $this->model->statusModel; //вывод ошибок и замечаний
        $this->view->generate('auth_view.php', 'template_view.php');

    }
}