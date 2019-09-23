<?php
// have username and password been passed from a form?
$conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');

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
               <!--  <table width="100%" border="0" cellspacing="0" class="StationDetails">
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
                    </table> -->
                <div class="clear"></div>
                <div class="parameters">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                    <tbody>    
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                        <td " bgcolor="#23365e">
                            <font size="4px">Year</font>
                        </td>
                        <td " bgcolor="#23365e">
                            <font size="4px">Rainfall of costal cities</font>
                        </td>
                        <td " bgcolor="#23365e">
                            <font size="4px">Rainfall of noncostal cities</font>
                        </td>
                    </tr>
                    <?php
// else we have logged in to Oracle

// prepare the query
/*$stmt = "SELECT $MinTemp, $MaxTemp, $Temp9am, $Temp3pm, $Cloud9am, $Cloud3pm, 
    $Humidity9am, $Humidity3pm, $Rainfall, $RainToday, $RainTomorrow, $WindGustDir, 
    $WindDir9am, $WindDir3pm, $WindGustSpeed, $WindSpeed9am, $WindSpeed3pm, $Pressure9am, $Pressure3pm
    FROM temperature_note t NATURAL JOIN cloud_note c NATURAL JOIN humidity_note c NATURAL JOIN location l NATURAL JOIN pressure_note p NATURAL JOIN rain_note r NATURAL JOIN wind_note w
    WHERE TID=5  ORDER BY TID DESC
   ";*/
    $stmt = "SELECT YC as Year,coastal_rain,noncoastal_rain from
    (select extract(year from dates) as YC,round(avg(rainfall),2) coastal_rain from  
        (select dates,rainfall from location natural join rain_note
             where name ='Adelaide'or name ='Brisbane'or name ='Cairns'or name ='CoffsHarbour'
                or name ='Darwin'or name ='GoldCoast'or name ='Hobart'or name ='Melbourne'
                or name ='Portland'or name ='Townsville'or name ='Wollongong')
         group by extract(year from dates)),
    (SELECT extract(year from dates) as YNC,round(avg(rainfall),2) noncoastal_rain from  
        (SELECT dates,rainfall from location natural join rain_note 
            where name not in 
            (SELECT name from location
             where name ='Adelaide'or name ='Brisbane'or name ='Cairns'or name ='CoffsHarbour'
                or name ='Darwin'or name ='GoldCoast'or name ='Hobart'or name ='Melbourne'
                or name ='Portland'or name ='Townsville'or name ='Wollongong'))
                group by extract(year from dates))
    where YC=YNC
    order by YC desc" ;
   
/*   $stmt = 'select * from(select * from
   (select name, round(avg(rainfall),2) as "avg_rain" from 
       (select l.name, r.rainfall from location l join rain_note r on l.RID=r.RID 
        where extract(year from l.dates)=2015 and extract(month from l.dates)=1)
    group by name)
    order by "avg_rain" desc)
where rownum = 1'; */
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
	oci_close($conn);
	echo "</table>\n";
}
?>
                    </tbody>
                </table>
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