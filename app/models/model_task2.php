<?php 
 
class Model_task2 extends Model{
    
    public function get_data(){
        $ch= curl_init();
        curl_setopt($ch, CURLOPT_URL, 
                "http://stackoverflow.com//");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $output= curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
