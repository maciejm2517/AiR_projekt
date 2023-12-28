<?php

//curl -X POST http://192.168.1.230:8000/server.php  -d "x=7&y=6&b=255"
//curl http://192.168.1.230:8000/server.php

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        // echo "OK-GET\n";
	    $a=shell_exec('python LED_get.py');
        echo $a;
	break;
    case 'POST':
	echo "OK-POST\n";
	// $input = $_POST;
	// $str_cmd = "python zad2.py ";
    // $str_cmd .= isset($_POST['P']) ? "-P ".$_POST['P'] : "" ;
    // $str_cmd .= isset($_POST['T']) ? "-T ".$_POST['T'] : "" ;
    // $str_cmd .= isset($_POST['U']) ? "-U " : "" ;

	// // foreach($input as $key => $val){
    // //     if ($val=NULL){
    // //         $str_cmd = $str_cmd . ' -' . $key;
    // //     }
	// // 	$str_cmd = $str_cmd . ' -' . $key . ' '. $val;
	// // }
	// echo $str_cmd . "\n";
	// shell_exec($str_cmd);
        break;
}

?>
