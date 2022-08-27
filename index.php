<?php
   require("vendor/autoload.php");
   
   $file_path = "";
   $column = "";
   $search_key = "";
   
   if(isset($argv[1]) && isset($argv[2]) && isset($argv[3])){
	   $file_path = $argv[1];
	   $column = $argv[2];
	   $search_key = $argv[3];
	   $csv = SimpleCSV::import($file_path);
	   
	if (!empty($csv[0][0])) {
		foreach($csv as $elements){
			if(isset($elements[$column]) && $elements[$column] == $search_key){
				die($elements[0].','.$elements[1].','.$elements[2].','.$elements[3].';');
			}
		}
		die('No search found.');
	}else{
		die("file is empty.");
	}
   }else{
	   die('Inputs are empty.');
   }
?>