<?php
	class Controller_404 extends Controller{
		public function __construct(){
			parent::__construct();			
		}

		public function action_index(){
			$this->view->generate(null, '404_view.php');
		}
	}

?>
