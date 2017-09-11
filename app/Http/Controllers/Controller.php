<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    	//This function (replace_tr) replace turkish char to english char. 
    	public function replace_tr($text) {
		   $text = trim($text);
		   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
		   $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
		   $new_text = str_replace($search,$replace,$text);
		   return $new_text;
		}
}
