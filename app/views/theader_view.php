<!DOCTYPE html>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="../../styles/theader.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="head">
            <a href="/task1/index?page=1">Task 1</a>
            <a href="/task2/index">Task 2</a>
            <a href="/task3/index">Task 3</a>
        </div>
        <?php
            include __DIR__.'/'.$content_view;
        ?>
    </body>
</html>
