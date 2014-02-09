<?php

class Model_Task1 extends Model{
    public function get_data(){
        $fcontent= file_get_contents(__DIR__.'/../data/text.txt');
        return iconv_strlen($fcontent, 'UTF-8');
    }
    
}