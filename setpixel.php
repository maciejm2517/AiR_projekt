<?php

//curl -X POST http://192.168.1.230:8000/server.php  -d "x=7&y=6&b=255"
//curl http://192.168.1.230:8000/server.php

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        // echo "OK-GET\n";
        if($_GET['C']==1){
            shell_exec("python LED_set.py -C 1");
        }else{
            $x=$_GET['x'];
            $y=$_GET['y'];
            $r=$_GET['r'];
            $g=$_GET['g'];
            $b=$_GET['b'];
	        shell_exec("python LED_set.py -x $x -y $y -r $r -g $g -b $b");
        }
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
