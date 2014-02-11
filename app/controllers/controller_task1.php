<?php 

class Controller_task1 extends Controller {

    function __construct() {
        parent::__construct();
        $this->model = new Model_task1();
    }

    function action_index() {
        $data = $this->model->get_data();
        //Using to avoid double checking of the same conditions
        $pcon = NULL;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $total = $data["total"];
        $stpage = $enpage = $page1left = $page2left = $page1right = $page2right = $page3left = $page4left = $page3right = $page4right = NULL;
        $data = array("page" => $page, "stpage" => $stpage, "enpage" => $enpage,
            "page1left" => $page1left, "page2left" => $page2left,
            "page1right" => $page1right, "page2right" => $page2right,
            "page3left" => $page3left, "page4left" => $page4left,
            "page3right" => $page3right, "page4right" => $page4right,
            "total" => $total, "fcontent" => $data["file_content"]);

        if (!(is_numeric($data["page"])) or
                ($data["page"] > $data["total"]) or ($data["page"] < 1)) {
            $this->view->generate('404_view.php', 'theader_view.php');
        } elseif ($data["total"] == 1) {
            $data["page"] = NULL;
            $this->view->generate('t1content_view.php', 'theader_view.php', $data);
        } else {
            if ($data["page"] != 1) {
                $data["stpage"] = '<a href=/task1/index?page=1><<<</a>';
            }
            if ($data["page"] != $data["total"]) {
                $data["enpage"] = '<a href=/task1/index?page=' . $data["total"] . '>>>></a>';
            }
            if ($data["page"] - 2 > 0) {
                $data["page2left"] = '<a href=/task1/index?page=' . ($data["page"] - 2) . '>' . ($data["page"] - 2) . '</a>';
                $data["page1left"] = '<a href=/task1/index?page=' . ($data["page"] - 1) . '>' . ($data["page"] - 1) . '</a>';
            } elseif ($data["page"] - 1 > 0) {
                $data["page1left"] = '<a href=/task1/index?page=' . ($data["page"] - 1) . '>' . ($data["page"] - 1) . '</a>';
                if ($pcon = ($data["page"] + 3 <= $data["total"])) {
                    $data["page3right"] = '<a href=/task1/index?page=' . ($data["page"] + 3) . '>' . ($data["page"] + 3) . '</a>';
                }
            } elseif ($data["page"] + 4 <= $data["total"]) {
                $data["page3right"] = '<a href=/task1/index?page=' . ($data["page"] + 3) . '>' . ($data["page"] + 3) . '</a>';
                $data["page4right"] = '<a href=/task1/index?page=' . ($data["page"] + 4) . '>' . ($data["page"] + 4) . '</a>';
            } elseif (($data["page"] + 3 <= $data["total"])) {
                $data["page3right"] = '<a href=/task1/index?page=' . ($data["page"] + 3) . '>' . ($data["page"] + 3) . '</a>';
            }
            if ($data["page"] + 2 <= $data["total"]) {
                $data["page2right"] = '<a href=/task1/index?page=' . ($data["page"] + 2) . '>' . ($data["page"] + 2) . '</a>';
                $data["page1right"] = '<a href=/task1/index?page=' . ($data["page"] + 1) . '>' . ($data["page"] + 1) . '</a>';
            } elseif ($data["page"] + 1 <= $data["total"]) {
                $data["page1right"] = '<a href=/task1/index?page=' . ($data["page"] + 1) . '>' . ($data["page"] + 1) . '</a>';
                if ($pcon = ($data["page"] - 3 > 0)) {
                    $data["page3left"] = '<a href=/task1/index?page=' . ($data["page"] - 3) . '>' . ($data["page"] - 3) . '</a>';
                }
            } elseif ($data["page"] - 4 > 0 ) {
                $data["page3left"] = '<a href=/task1/index?page=' . ($data["page"] - 3) . '>' . ($data["page"] - 3) . '</a>';
                $data["page4left"] = '<a href=/task1/index?page=' . ($data["page"] - 4) . '>' . ($data["page"] - 4) . '</a>';
            } elseif ($data["page"] - 3 > 0) {
                $data["page3left"] = '<a href=/task1/index?page=' . ($data["page"] - 3) . '>' . ($data["page"] - 3) . '</a>';
            }
            $fcontent=substr($data["fcontent"], 300*($page-1), 300);
            $data["fcontent"]= explode("\n", $fcontent);
            $this->view->generate('t1content_view.php', 'theader_view.php', $data);
        }
    }
}
