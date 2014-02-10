<div class="content">
    <?php
        echo 'Number of chars is ' . $data["total"]. $data["stpage"];
    ?>

</div>

<div class="footer">
    <?php
        echo $data["stpage"] . $data["page2left"] . $data["page1left"] .
                '<span>' . $data["page"] . '</span>' . 
                $data["page1right"] . $data["page2right"] . $data["enpage"];
    ?>
</div>