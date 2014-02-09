<?php

class Controller_task1 extends Controller{
    
    function __construct() {
        parent::__construct();
        $this-> model = new Model_task1();
    }
    function action_index() {
        $data=$this->model->get_data();
        $this->view->generate('t1content_view.php','theader_view.php',$data);
    }
}
