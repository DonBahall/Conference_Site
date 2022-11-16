<?php
require "D:\AMPPS\Ampps\www\application\models\model_conf.php";
class Controller_Details extends Controller
{
    function action_index()
    {
        $this->view->generate('details_view.php', 'template_view.php');
    }
}