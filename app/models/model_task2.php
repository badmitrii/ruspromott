<?php 
 
class Model_task2 extends Model{
    
    public function get_data(){
        $ch= curl_init();
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 
                "http://1c-bitrix.ru/");
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
        $output= curl_exec($ch);
        curl_close($ch);
	return $output;
    }
}
