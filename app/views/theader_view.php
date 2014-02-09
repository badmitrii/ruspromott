<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="../../styles/theader.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <a href="/task1/action_index">Task 1</a>
            <a href="/task2/action_index">Task 2</a>
            <a href="/task3/action_index">Task 3</a>
            <a href="/task4/action_index">Moreover</a>
        </div>
        <?php
            include '/app/view'.$content_view;
        ?>
    </body>
</html>
