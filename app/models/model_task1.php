<?php

class Model_Task1 extends Model{
    public function get_data(){
        $fcontent= file_get_contents(__DIR__.'/../data/text.txt');
        $num=iconv_strlen($fcontent, 'UTF-8');
        $total= intval($num/300)+1;
        return array("total"=>$total, "file_content"=>$fcontent);
    }
    
}