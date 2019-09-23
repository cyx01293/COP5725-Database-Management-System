<?php
// have username and password been passed from a form?
$conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');

?>
<?php
  //  $datebegin = $_POST['date']; 
    $datebegin = $_POST['date'];
	$dateend = $_POST['date2']; 
    $location = $_POST['location'];
    $mainparameter = $_POST['mainparameter'];
    $order = $_POST['order'];
    
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


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>data webpage</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="data-retrieval.css" rel="stylesheet" type="text/css" />
<style>
    table{
        border:solid 1px black;
    }
    </style>
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer	    = 0;	
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
</head>
<body>
    <div id="navbox">
            <ul id="nav">
                <li><a href="./index.php" class="element-invisible element-focusable">Index</a>
               </li>
               <li><a href="./data-abstract.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Data Abstract</a>
               </li>
               <li><a href="./data-retrieval.php">Data Service</a>
               </li>
            </ul>
            <div class="clear"></div>
    </div>
    <div id="page-intro" class="clearfix">
        <div class="container">
            <h1 class="page-title">Data Retrieved</h1>
        </div>
    </div>
    <div id="page-login" class="clearfix" style="padding-bottom:25px;">
        <table width="50%" border="0" cellspacing="0" class="StationDetails">
            <tbody>
                <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                    <td colspan="3" bgcolor="#F4F4F4" style="text-align:center;float:right;">
                        <font size="5px"><a href="./login-page.php" class="element-invisible element-focusable">Login</a></font>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="page" class="clearfix">
        <div class="content">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                        <tbody>
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                                <td colspan="3">Daily Data Retrieval</td>
                            </tr>
                            <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="3" bgcolor="#E2E2E2">
                                        <font size="3px">Retrieved data from </font>
                                        <label><?php echo $datebegin ?></label>
                                        <font size="3px">to </font>
                                        <label><?php echo $dateend ?></label>
                                    </td>
                            </tr>
                            <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                                <td colspan="3" bgcolor="#E2E2E2">
                                    <font size="3px">of the location, </font>
                                    <?php echo $location ?>
                                </td>
                        </tr>
                        </tbody>
                    </table>
                <div class="clear"></div>
                <div class="parameters">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                    <tbody>    
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                        <td " bgcolor="#23365e">
                            <font size="4px">Date</font>
                        </td>
                        <td " bgcolor="#23365e">
                            <font size="4px">Location</font>
                        </td>
                        <?php
                        $temp = '';
                        // have username and password been passed from a form?
                        if($MinTemp!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $MinTemp. "</font></td>\n";
                            $temp = $temp.$MinTemp.',';
                        }
                        if($MaxTemp!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $MaxTemp. "</font></td>\n";
                            $temp = $temp.$MaxTemp.',';
                        }
                        if($Temp9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Temp9am. "</font></td>\n";
                            $temp = $temp.$Temp9am.',';
                        }
                        if($Temp3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Temp3am. "</font></td>\n";
                            $temp = $temp.$Temp3pm.',';
                        }
                        if($Cloud9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Cloud9am. "</font></td>\n";
                            $temp = $temp.$Cloud9am.',';
                            
                        }
                        if($Cloud3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Cloud3pm. "</font></td>\n";
                            $temp = $temp.$Cloud3pm.',';
                            
                        }
                        if($Humidity9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Humidity9am. "</font></td>\n";
                            $temp = $temp.$Humidity9am.',';
                            
                        }
                        if($Humidity3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Humidity3pm. "</font></td>\n";
                            $temp = $temp.$Humidity3pm.',';
                        }
                        if($Rainfall!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Rainfall. "</font></td>\n";
                            $temp = $temp.$Rainfall.',';
                        }
                        if($RainToday!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $RainToday. "</font></td>\n";
                            $temp = $temp.$RainToday.',';
                        }
                        if($RainTomorrow!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $RainTomorrow. "</font></td>\n";
                        }
                        if($WindGustDir!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindGustDir. "</font></td>\n";
                            $temp = $temp.$WindGustDir.',';
                        }
                        if($WindDir9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindDir9am. "</font></td>\n";
                            $temp = $temp.$WindDir9am.',';
                        }
                        if($WindDir3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindDir3pm. "</font></td>\n";
                            $temp = $temp.$WindDir3pm.',';
                        }
                        if($WindGustSpeed!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindGustSpeed. "</font></td>\n";
                            $temp = $temp.$WindGustSpeed.',';
                        }
                        if($WindSpeed9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindSpeed9am. "</font></td>\n";
                            $temp = $temp.$WindSpeed9am.',';
                        }
                        if($WindSpeed3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $WindSpeed3pm. "</font></td>\n";
                            $temp = $temp.$WindDir3pm.',';
                        }
                        if($Pressure9am!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Pressure9am. "</font></td>\n";
                            $temp = $temp.$Pressure9am.',';
                        }
                        if($Pressure3pm!=='null'){
                            echo '    <td " bgcolor="#23365e"><font size="4px">' . $Pressure3pm. "</font></td>\n";
                            $temp = $temp.$Pressure3pm.',';
                        }
                        $length = strlen($temp);
                        
                        $temp = substr($temp, 0, $length - 1);
                        
                        ?>
                        
                    </tr>
                    <?php
// else we have logged in to Oracle

// prepare the query
/* $stmt = "SELECT $MinTemp, $MaxTemp, $Temp9am, $Temp3pm, $Cloud9am, $Cloud3pm, 
    $Humidity9am, $Humidity3pm, $Rainfall, $RainToday, $RainTomorrow, $WindGustDir, 
    $WindDir9am, $WindDir3pm, $WindGustSpeed, $WindSpeed9am, $WindSpeed3pm, $Pressure9am, $Pressure3pm
    FROM temperature_note t NATURAL JOIN cloud_note c NATURAL JOIN humidity_note c NATURAL JOIN location l NATURAL JOIN pressure_note p NATURAL JOIN rain_note r NATURAL JOIN wind_note w
    WHERE TID=5  ORDER BY TID DESC
   "; */
    $stmt = "SELECT dates, l.NAME, $temp
    FROM temperature_note t NATURAL JOIN cloud_note c NATURAL JOIN humidity_note h NATURAL JOIN location l NATURAL JOIN pressure_note p NATURAL JOIN rain_note r NATURAL JOIN wind_note w
    WHERE dates>=TO_DATE('$datebegin','yyyy-mm-dd') and dates<=TO_DATE('$dateend','yyyy-mm-dd') and l.NAME = '$location'
    ORDER BY $mainparameter $order " ;
   
  /* $stmt = 'select * from(select * from
   (select name, round(avg(rainfall),2) as "avg_rain" from 
       (select l.name, r.rainfall from location l join rain_note r on l.RID=r.RID 
        where extract(year from l.dates)=2015 and extract(month from l.dates)=1)
    group by name)
    order by "avg_rain" desc)
where rownum = 1';*/
$stid = oci_parse($conn, $stmt);
// execute the query
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} else {
	// retrieve the results
	/* print "<p>The marks are as follows:</p>\n";
	print "<table cols=5 border=1>\n";
	print "<tr>\n";
	print "<th>Student ID</th>\n";
	print "<th>Surname</th>\n";
	print "<th>Forename</th>\n";
	print "<th>Module</th>\n";
	print "<th>Mark</th>\n";
	print "</tr>"; */
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	echo '<tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">';
    	foreach ($row as $item) {
            
        	echo "    <td>" . ($item != null ? htmlentities($item, ENT_QUOTES) : "&nbsp") . "</td>\n";
    	}
    	echo "</tr>\n";
	}
	// oci_close($conn);
	echo "</table>\n";
}
?>
                    </tbody>
                </table>
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                    <tbody>    
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                        <td " bgcolor="#23365e">
                            <font size="4px">Date</font>
                        </td>
                        <td " bgcolor="#23365e">
                            <font size="4px">Location</font>
                        </td>
                        <?php
                           // $cars=array("Volvo","BMW","Toyota"); 
                            $temp1=explode(",",$temp);
                            $arrlength=count($temp1); 
                           // echo $arrlength;
                            for($x=0;$x<$arrlength;$x++) { 
                               // echo $temp[$x]; echo "<br>"; 
                                //echo $x;
                                $sql = "SELECT AVG($temp1[$x]), MIN($temp1[$x]), MAX($temp1[$x])
                                FROM temperature_note t NATURAL JOIN cloud_note c NATURAL JOIN humidity_note h NATURAL JOIN location l NATURAL JOIN pressure_note p NATURAL JOIN rain_note r NATURAL JOIN wind_note w
                                WHERE dates>=TO_DATE('$datebegin','yyyy-mm-dd') and dates<=TO_DATE('$dateend','yyyy-mm-dd') and l.NAME = '$location'
                                ORDER BY $mainparameter $order " ;
                                
                                $sqlid = oci_parse($conn, $sql);
                               
                                if( !oci_execute($sqlid) ) {
                                    $e = oci_error();
                                    echo htmlentities($e['message'], ENT_QUOTES);
                                    oci_close($conn);
                                } else {
                                    // retrieve the results
                                    /* print "<p>The marks are as follows:</p>\n";
                                    print "<table cols=5 border=1>\n";
                                    print "<tr>\n";
                                    print "<th>Student ID</th>\n";
                                    print "<th>Surname</th>\n";
                                    print "<th>Forename</th>\n";
                                    print "<th>Module</th>\n";
                                    print "<th>Mark</th>\n";
                                    print "</tr>"; */
                                    echo "!!!!";
                                    while ($row = oci_fetch_array($sqlid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                        echo '<tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">';
                                        foreach ($row as $item) {
                                            
                                            echo "    <td>" . ($item != null ? htmlentities($item, ENT_QUOTES) : "&nbsp") . "</td>\n";
                                        }
                                        echo "</tr>\n";
                                        echo "@222222";
                                    }
                                    
                                    echo "</table>\n";
                                }
                            } 
                            oci_close($conn);
                        ?>
                    </tbody>
                <!-- </table>    --> 
                </div>
        </div>
        
    </div>
    <div id="footer" class="clearfix">
        <div id="block-block-17">
            <h2 class="title">Contact Us</h2>
            <div>
                <ul class="contact-info">
                    <li>
                        <i class="fa fa-map-marker"></i> University of Florida
                        <br> Gainesville, FL 32611
                    </li>
                    <li>
                        <i class="fa fa-envelope-o"></i> Contact: Yixing chen
                        <br>Email:
                        <a href="mailto:yixing.chen@ufl.edu">yixing.chen@ufl.edu</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>