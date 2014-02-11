<div class="content">
    <?php
        echo '<span>';
        foreach ($data["fcontent"] as $val)
            echo $val.'<br/>';
        echo '</span>'
    ?>
</div>

<div class="footer">
    <?php
        echo $data["stpage"] .' '. $data["page4left"] . ' ' . $data["page3left"]. ' ' . $data["page2left"] .' '. $data["page1left"] .' '.
            '<span>' . $data["page"] . '</span>' . ' '.
            $data["page1right"] . ' '. $data["page2right"] . ' '.$data["page3right"] . ' '. $data["page4right"] .' '. $data["enpage"];
    ?>
</div>
