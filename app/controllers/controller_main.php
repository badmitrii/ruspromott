<?php

class Controller_Main extends Controller
{
    function action_index()
    {	
        $this->view->generate(null,'main_view.php');
    }
}