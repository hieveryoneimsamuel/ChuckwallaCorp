<?php

class Controller_company extends Controller_Template
{
	public $template = 'companytemplate.php';
	public $numrc = "";
	public $numcolors = "";
	
	public function action_index()
	{
		
		$data = array();
		$this->template->title = "Welcome";
		$this->template->content= View::forge('ourcompany/welcome.php', $data);
		$this->template->css = "chuckwalla.css";
		$this->template->js = "default.js";

		

	}

	public function action_about(){
		$data = array();
		$this->template->title = "About";
		$this->template->content = View::forge('ourcompany/about.php'); 
		$this->template->css = "chuckwalla.css";
		$this->template->js = "default.js";

	}

	public function action_colors(){
		$data = array();
		$this->template->title = "Colors";
		$this->template->css = "chuckwalla.css";
		$this->template->js = "chuckwalla.js";

		if(!isset($_GET['val1']) || !isset($_GET['val2'])){
			$this->template->content = View::forge('ourcompany/colorsDirectory/enterStuff.php');
		}
		if(isset($_GET['val1']) && isset($_GET['val2'])){
			
			$numrc = $_GET['val1'];
			$numcolors = $_GET['val2'];
			
			if(($numrc >= 1 && $numrc <= 26) && ($numcolors >=1 && $numcolors<=10)){
				$this->template->content = View::forge('ourcompany/colorsDirectory/success.php'); 
			}
			else{
				$this->template->content = View::forge('ourcompany/colorsDirectory/failure.php'); 
			}
			
		}
		
	}
	

}
?>
