<?php

class Route
{
    static function start()
    {
        $controller_name = 'main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
	if( empty($routes[1]) ){
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
       		header('HTTP/1.1 index');
        	header("Status: index");
		header('Location:'.$host.'index.php');
	} elseif ( empty($routes[2])){
		if( $routes[1]=='404'){
			$controller_name='404';
		} elseif( $routes[1]!='index.php'){
			Route::ErrorPage404();
		}
	}
	if (!empty($routes[2])){
		$action_n=  explode('?', $routes[2]);
		$action_name = $action_n[0];
		$controller_name = $routes[1];
	}
        
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        $model_file = strtolower($model_name).'.php';
        $model_path = "app/models/".$model_file;
        if(file_exists($model_path))
        {
            include "app/models/".$model_file;
        }
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "app/controllers/".$controller_file;
        }
        else
        {
		Route::ErrorPage404();
        }
        $controller = new $controller_name;
        $action = $action_name;
        
        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
		Route::ErrorPage404();
        }
    
    }
    
    static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}

