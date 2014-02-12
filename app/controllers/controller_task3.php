<?php
class Controller_task3 extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function action_index() {
        $this->view->generate('t3content_view.php', 'theader_view.php');
    }
}