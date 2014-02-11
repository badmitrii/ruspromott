<?php

class Controller_task2 extends Controller{
    
    public function __construct() {
        parent::__construct();
        $this->model= new Model_task2();
    }
    
    public function action_index(){
        $data=$this->model->get_data();
        $this->view->generate('t2content_view.php','theader_view.php',$data);
    }
}
