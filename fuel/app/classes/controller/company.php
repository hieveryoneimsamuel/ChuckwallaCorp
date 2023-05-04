<?php
use \Model\chuckwallacolormodel;

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
			$data = array(
				'colorchoices' => chuckwallacolormodel::read_colors(),
				'colorcount' => chuckwallacolormodel::color_count()
	
			);
			$this->template->content = View::forge('ourcompany/colorsDirectory/colordatabaseview.php', $data);

			if(isset($_POST['add']) && isset($_POST['color-text'])){
				chuckwallacolormodel::add_color($_POST['color-text'], $_POST['color-hex']);
				chuckwallacolormodel::read_colors();
				
			}
			if(isset($_POST['delete']) && isset($_POST['colorchoicecheck'])){
				$checkedcolors = array();
				foreach($_POST['colorchoicecheck'] as $id){
					$checkedcolors[] = $id;
				}
				chuckwallacolormodel::delete_color($checkedcolors);
			}
			
			
			$data = array(
				'colorchoices' => chuckwallacolormodel::read_colors(),
				'colorcount' => chuckwallacolormodel::color_count()
	
			);
			$this->template->content = View::forge('ourcompany/colorsDirectory/colordatabaseview.php', $data);
			 
			if(isset($_POST['finishedbutton'])){
				$data = array(
					'colorchoices' => chuckwallacolormodel::read_colors(),
					'colorcount' => chuckwallacolormodel::color_count()
				);
				$this->template->content = View::forge('ourcompany/colorsDirectory/enterStuff.php', $data);
			}
			

			//$this->template->content = View::forge('ourcompany/colorsDirectory/enterStuff.php');
		}
		if(isset($_GET['val1']) && isset($_GET['val2'])){
			
			$numrc = $_GET['val1'];
			$numcolors = $_GET['val2'];

			
			$colorcount = chuckwallacolormodel::color_count();

			
			if(($numrc >= 1 && $numrc <= 26) && ($numcolors >=1 && $numcolors<=$colorcount)){
				$data = array(
					'colorchoices' => chuckwallacolormodel::read_colors(),
					'colorcount' => chuckwallacolormodel::color_count()
				);
				$this->template->content = View::forge('ourcompany/colorsDirectory/success.php', $data); 

				
				
				
			}
			else{
				$data = array(
					'colorchoices' => chuckwallacolormodel::read_colors(),
					'colorcount' => chuckwallacolormodel::color_count()
				);
				$this->template->content = View::forge('ourcompany/colorsDirectory/failure.php', $data); 
			}
			
		}
		if(isset($_POST['revisitdb'])){
			$data = array(
				'colorchoices' => chuckwallacolormodel::read_colors(),
				'colorcount' => chuckwallacolormodel::color_count()
			);
			$this->template->content = View::forge('ourcompany/colorsDirectory/colordatabaseview.php', $data);
		}
		
	}
	

}
?>
