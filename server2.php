<?php

//curl -X POST http://192.168.1.230:8000/server.php  -d "x=7&y=6&b=255"
//curl http://192.168.1.230:8000/server.php

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        // echo "OK-GET\n";
        /*
	    $a=shell_exec('python zad1.py');
        $b=shell_exec('python zad2.py');
        $c=shell_exec('python zad3.py');
        $d=shell_exec('python zad4.py');
        */
        $output=shell_exec('python sensors.py');
        //$sens = json_decode($output,true);
        $sens = json_decode($output,true);
        echo '{"zad1":{"name":"pressure", "v":'.$sens["pressure"].'},"zad2":{"name":"temperature", "v":'.$sens["temperature"].'},"zad3":{"name":"humidity", "v":'.$sens["humidity"].'},"zad4":{"name":"roll", "v":'.$sens["orientation"]["roll"].'},"zad5":{"name":"pitch", "v":'.$sens["orientation"]["pitch"].'},"zad6":{"name":"yaw", "v":'.$sens["orientation"][
            "yaw"].'}}';
        //echo '{"zad1":{"name":"pressure", "v":'.$sens->pressure.'},"zad2":{"name":"temperature", "v":'.$sens->temperature.'},"zad3":{"name":"humidity", "v":'.$sens->humidity.'},"zad4":{"name":"orientation", "v":'.$sens->orientation.'}}';
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
