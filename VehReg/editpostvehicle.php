<?php 
    $title="/Success Edit";
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$veh_id = $_POST['veh_id'];
		$veh_num = $_POST['veh_num'];
		$veh_type = $_POST['veh_type'];
		$chechis = $_POST['chechis'];
		$engine_no = $_POST['engine_no'];
		$veh_desc = $_POST['veh_desc'];
		$cus_id = $_POST['cus_id'];
		$issuccess = $crud->editvehicle($veh_id,$veh_num,$veh_type,$chechis,$engine_no,$veh_desc,$cus_id);
		if($issuccess){
			header("Location: viewvehicle.php");
		}
		else{
			echo 'Error Ocurred';
		}
	}
?>