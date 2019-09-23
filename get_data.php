<?php
	$datebegin = $_POST['date']; 
	$dateend = $_POST['date2']; 
	$location = $_POST['location']; 

	if(!isset($_POST['MinTemp'])){
		$MinTemp = 'null'; 
	}
	else{
	$MinTemp = $_POST['MinTemp']; 
}

	if(!isset($_POST['MaxTemp'])){
		$MaxTemp = 'null'; 
	}
	else{
	$MaxTemp = $_POST['MaxTemp']; 
}

	

	if(!isset($_POST['Temp9am'])){
		$Temp9am = 'null'; 
	}
	else{
	$Temp9am = $_POST['Temp9am']; 
}

	if(!isset($_POST['Temp3pm'])){
		$Temp3pm = 'null'; 
	}
	else{
	$Temp3pm = $_POST['Temp3pm']; 
}

	if(!isset($_POST['Cloud9am'])){
		$Cloud9am = 'null'; 
	}
	else{
	$Cloud9am = $_POST['Cloud9am']; 
}

	if(!isset($_POST['Cloud3pm'])){
		$Cloud3pm = 'null'; 
	}
	else{
	$Cloud3pm = $_POST['Cloud3pm']; 
}

	if(!isset($_POST['Humidity9am'])){
		$Humidity9am = 'null'; 
	}
	else{
	$Humidity9am = $_POST['Humidity9am']; 
}

	if(!isset($_POST['Humidity3pm'])){
		$Humidity3pm = 'null'; 
	}
	else{
	$Humidity3pm = $_POST['Humidity3pm']; 
}

	if(!isset($_POST['Rainfall'])){
		$Rainfall = 'null'; 
	}
	else{
	$Rainfall = $_POST['Rainfall']; 
}

	if(!isset($_POST['RainToday'])){
		$RainToday = 'null'; 
	}
	else{
	$RainToday = $_POST['RainToday']; 
}

	if(!isset($_POST['RainTomorrow'])){
		$RainTomorrow = 'null'; 
	}
	else{
	$RainTomorrow = $_POST['RainTomorrow']; 
}
	
	if(!isset($_POST['WindGustDir'])){
		$WindGustDir = 'null'; 
	}
	else{
	$WindGustDir = $_POST['WindGustDir']; 
}

	if(!isset($_POST['WindDir9am'])){
		$WindDir9am = 'null'; 
	}
	else{
	$WindDir9am = $_POST['WindDir9am']; 
}

	if(!isset($_POST['WindDir3pm'])){
		$WindDir3pm = 'null'; 
	}
	else{
	$WindDir3pm = $_POST['WindDir3pm']; 
}
	
	if(!isset($_POST['WindGustSpeed'])){
		$WindGustSpeed = 'null'; 
	}
	else{
	$WindGustSpeed = $_POST['WindGustSpeed']; 
}

	if(!isset($_POST['WindSpeed9am'])){
		$WindSpeed9am = 'null'; 
	}
	else{
	$WindSpeed9am = $_POST['WindSpeed9am']; 
}

	if(!isset($_POST['WindSpeed3pm'])){
		$WindSpeed3pm = 'null'; 
	}
	else{
	$WindSpeed3pm = $_POST['WindSpeed3pm']; 
}

	if(!isset($_POST['Pressure9am'])){
		$Pressure9am = 'null'; 
	}
	else{
	$Pressure9am = $_POST['Pressure9am']; 
}

	if(!isset($_POST['Pressure3pm'])){
		$Pressure3pm = 'null'; 
	}
	else{
	$Pressure3pm = $_POST['Pressure3pm']; 
}




	echo $datebegin;
	echo $dateend;
	echo $location;
	echo $MinTemp;
	echo $MaxTemp;



?>