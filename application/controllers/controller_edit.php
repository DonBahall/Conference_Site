<?php
require "D:\AMPPS\Ampps\www\application\models\model_conf.php";
class Controller_Edit extends Controller
{
	function action_index()
	{
		$this->view->generate('edit_view.php', 'template_view.php', "");
	}
}
