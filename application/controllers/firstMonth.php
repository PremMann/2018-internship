<?php 
	class firstMonth extends CI_controller {
		// public function firstWeek() 
		// {
		// 	$this->load->view('templates/header.php');
		// 	$this->load->view('menu/studentMenu.php');
		// 	$this->load->view('student/monthReport/monthOne/weekOne');
		// 	$this->load->view('templates/footer.php');
		// }
		public function secounWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthOne/weekTwo');
			$this->load->view('templates/footer.php');
		}
		public function thirdWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthOne/weekThree');
			$this->load->view('templates/footer.php');
		}
		public function fourWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthOne/weekFour');
			$this->load->view('templates/footer.php');
		}
	}

 ?>