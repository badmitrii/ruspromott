<?php

class Controller_task1 extends Controller {

    function __construct() {
        parent::__construct();
        $this->model = new Model_task1();
    }

    function action_index() {
        $dat = $this->model->get_data();
        $total=$dat["total"];
        $page=$_GET["page"];
        
        if ($page != 1)
            $stpage = '<a href=/task1/index?page=1><<<</a>';
        if ($page != $total)
            $enpage = '<a href=/task1/index?page=' . $total . '>>>></a>';
        if ($page - 1 > 0)
            $page1left = '<a href=/task1/index?page=' . ($page - 1) . '>' . ($page - 1) . '</a>';
        if ($page - 2 > 0)
            $page2left = '<a href=/task1/index?page=' . ($page - 2) . '>' . ($page - 2) . '</a>';
        if ($page + 1 < $total)
            $page1right = '<a href=/task1/index?page=' . ($page + 1) . '>' . ($page + 1) . '</a>';
        if ($page + 2 < $total)
            $page2right = '<a href=/task1/index?page=' . ($page + 2) . '>' . ($page + 2) . '</a>';
        $data= array("page"=>$page, "stpage"=>$stpage, "enpage"=>$enpage, 
            "page1left"=>$page1left, "page2left"=>$page2left,
            "page1right"=>$page1right, "page2right"=>$page2right,
                "total"=>$total, "fcontent"=>$dat["file_content"]);
        $this->view->generate('t1content_view.php', 'theader_view.php', $data);
    }
}
