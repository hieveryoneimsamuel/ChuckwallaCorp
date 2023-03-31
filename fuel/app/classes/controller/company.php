<?php

class Controller_company extends Controller_Template
{
	public $template = 'companytemplate.php';
	
	public function action_index()
	{
		
		$data = array();
		$this->template->title = "Welcome";
		$this->template->content= View::forge('ourcompany/welcome.php', $data);
		$this->template->css = "chuckwalla.css";

	}

	public function action_about(){
		$data = array();
		$this->template->title = "About";
		$this->template->content = View::forge('ourcompany/about.php'); 
		$this->template->css = "chuckwalla.css";

	}

	public function action_colors(){
		$data = array();
		$this->template->title = "Colors";
		$this->template->content = View::forge('ourcompany/colors.php'); 
		$this->template->css = "chuckwalla.css";

	}

}
?>