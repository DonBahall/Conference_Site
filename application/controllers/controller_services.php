<?php
require "D:\AMPPS\Ampps\www\application\models\model_conf.php";
class Controller_Services extends Controller
{
	function action_index()
	{
		$this->view->generate('services_view.php', 'template_view.php');
	}
}
