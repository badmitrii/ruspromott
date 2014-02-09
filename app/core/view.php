<?php
class View
{    
    function generate($content_view, $template_view){
        include 'app/views/'.$template_view;
    }
}