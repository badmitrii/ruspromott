<?php

class Controller_task1 extends Controller {

    function __construct() {
        parent::__construct();
        $this->model = new Model_task1();
    }

    function action_index() {
        $data = $this->model->get_data();
        $total = $data["total"];
        $page = $_GET["page"];
        $stpage = $enpage = $page1left = $page2left = $page1right = $page2right = NULL;
        $data = array("page" => $page, "stpage" => $stpage, "enpage" => $enpage,
            "page1left" => $page1left, "page2left" => $page2left,
            "page1right" => $page1right, "page2right" => $page2right,
            "total" => $total, "fcontent" => $data["file_content"]);
        
        if (!(is_numeric($data["page"])) or 
                ($data["page"] > $data["total"]) or ($data["page"] < 1)) {
            $this->view->generate('404_view.php', 'theader_view.php');
        }
        
        else if ($data["total"] == 1){
            $data["page"]=NULL;
            $this->view->generate('t1content_view.php', 'theader_view.php', $data);
        }    
        
        else {
            if ($data["page"] != 1) {
                $data["stpage"] = '<a href=/task1/index?page=1><<<</a>';
            }
            if ($data["page"] != $data["total"]) {
                $data["enpage"] = '<a href=/task1/index?page=' . $data["total"] . '>>>></a>';
            }
            if ($data["page"] - 1 > 0) {
                $data["page1left"] = '<a href=/task1/index?page=' . ($data["page"] - 1) . '>' . ($data["page"] - 1) . '</a>';
            }
            if ($data["page"] - 2 > 0) {
                $data["page2left"] = '<a href=/task1/index?page=' . ($data["page"] - 2) . '>' . ($data["page"] - 2) . '</a>';
            }
            if ($data["page"] + 1 <= $data["total"]) {
                $data["page1right"] = '<a href=/task1/index?page=' . ($data["page"] + 1) . '>' . ($data["page"] + 1) . '</a>';
            }
            if ($data["page"] + 2 <= $data["total"]) {
                $data["page2right"] = '<a href=/task1/index?page=' . ($data["page"] + 2) . '>' . ($data["page"] + 2) . '</a>';
            }

            $this->view->generate('t1content_view.php', 'theader_view.php', $data);
        }
    }

}
