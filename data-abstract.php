<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Data Abstract</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
            <h1 class="page-title">Australian Weather Information Database System</h1>
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
        <div class="clear"></div>
    </div>
    <div id="page" class="clearfix">
        <div class="container">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                        <tbody>
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                                <td colspan="3">Dataset Copyright</td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                <td colspan="3" bgcolor="#F4F4F4">
                                    <font size="-1">Observations were drawn from numerous weather stations. The daily observations are available from http://www.bom.gov.au/climate/data. Copyright Commonwealth of Australia 2010, Bureau of Meteorology.</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0">
                                <td colspan="2" bgcolor="#F4F4F4">
                                    <font size="-1">Definitions adapted from http://www.bom.gov.au/climate/dwo/IDCJDW0000.shtml</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1">You need to log in to access to the dataset.</font>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
        </div>
        <div class="content">
            <table width="100%" border="0" cellspacing="0" class="StationDetails">
                <tbody>
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                        <td colspan="3">AWIDS Metadata</td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2">
                            <font size="3px">This dataset contains daily weather observations from numerous Australian weather stations.</font>
                        </td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="4px">Parameters</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="4">About This Column</font>
                        </td>
<!--                         <td  bgcolor="#F4F4F4">
                            <font size="4">Information</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">Date</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The date of observation</font>
                        </td>
                        <!-- <td  bgcolor="#F4F4F4">
                            <font size="2">From Dec 01, 2008 to Jun 24, 2017</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">Location</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The common name of the location of the weather station</font>
                        </td>
                       <!--  <td  bgcolor="#F4F4F4">
                            <font size="2">Canberra 2%, Sydney 2%, Other (47) 95%</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">MinTemp</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The minimum temperature in degrees celsius</font>
                        </td>
                        <!-- <td  bgcolor="#F4F4F4">
                            <font size="2">390 unique values</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">MaxTemp</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The maximum temperature in degrees celsius</font>
                        </td>
                       <!--  <td  bgcolor="#F4F4F4">
                            <font size="2">506 unique values</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">Rainfall</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The amount of rainfall recorded for the day in mm</font>
                        </td>
                        <!-- <td  bgcolor="#F4F4F4">
                            <font size="2">0 63%, 0.2 6%, Other (678) 30%</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td  bgcolor="#F4F4F4">
                            <font size="3">Evaporation</font>
                        </td>
                        <td  bgcolor="#F4F4F4">
                            <font size="2">The so-called Class A pan evaporation (mm) in the 24 hours to 9am</font>
                        </td>
                        <!-- <td  bgcolor="#F4F4F4">
                            <font size="2">NULL 43%, 4 2%, Other (355) 55%</font>
                        </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindGustDir</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">The direction of the strongest wind gust in the 24 hours to midnight</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">W 7%, NULL 7%, Other (15) 87%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindGustSpeed</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">The speed (km/h) of the strongest wind gust in the 24 hours to midnight</font>
                            </td>
                           <!--  <td  bgcolor="#F4F4F4">
                                <font size="2">NULL 7%, 35 6%, Other (66) 87%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindDir9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Direction of the wind at 9am</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">N 8%, NULL 7%, Other (15) 85%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindDir3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Direction of the wind at 3pm</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">SE 7%, W 7%, Other (15) 86%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindSpeed9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Wind speed (km/hr) averaged over 10 minutes prior to 9am</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">9 9%, 13 9%, Other (42) 82%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">WindSpeed3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Wind speed (km/hr) averaged over 10 minutes prior to 3pm</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">13 9%, 17 9%, Other (43) 83%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Humidity9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Humidity (percent) at 9am</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Humidity3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Humidity (percent) at 3pm</font>
                            </td>
                           <!--  <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Pressure9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Atmospheric pressure (hpa) reduced to mean sea level at 9am</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Pressure3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Atmospheric pressure (hpa) reduced to mean sea level at 3pm</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Cloud9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Fraction of sky obscured by cloud at 9am. 
                                    This is measured in "oktas", which are a unit of eigths. 
                                    It records how many eigths of the sky are obscured by cloud. 
                                    A 0 measure indicates completely clear sky whilst an 8 indicates that it is completely overcast.</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">NULL 38%, 7 14%, Other (9) 48%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Cloud3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Fraction of sky obscured by cloud (in "oktas": eighths) at 3pm. See Cload9am for a description of the values.</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2">NULL 40%, 7 13%, Other (9) 47%</font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Temp9am</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Temperature (degrees C) at 9am</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">Temp3pm</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Temperature (degrees C) at 3pm</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">RainToday</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">Boolean: 1 if precipitation (mm) in the 24 hours to 9am exceeds 1mm, otherwise 0</font>
                            </td>
                            <!-- <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td  bgcolor="#F4F4F4">
                                <font size="3">RainTomorrow</font>
                            </td>
                            <td  bgcolor="#F4F4F4">
                                <font size="2">The target variable. Did it rain tomorrow?</font>
                            </td>
                           <!--  <td  bgcolor="#F4F4F4">
                                <font size="2"></font>
                            </td> -->
                    </tr>
                </tbody>
            </table>
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