
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Data Service</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="data-retrieval.css" rel="stylesheet" type="text/css" />
<link href="login-style.css" rel="stylesheet" type="text/css" />
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
function setOption(value){
   /*  var x = document.createElement("OPTION");
    x.setAttribute("value", "MinTemp");
    var t = document.createTextNode("MinTemp");
    x.appendChild(t);
    document.getElementById("mainparameter").appendChild(x); */
    var x = document.getElementById(value)
    x.setAttribute("style", "display:block;")
}
function deleteOption(value){
    var x = document.getElementById(value)
    x.setAttribute("style", "display:none;")
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
</head>
<body>
    <!-- <div id="navbox">
    <ul id="nav">
               <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Data Retrieval</a>
               <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
               <a href="./data-retrieval.php">Data Retrieval</a>
               </div>
               </li>
               <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">other function</a>
               <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
               <a href="./insert.php">insert</a>
               <a href="./delete.php">delete</a>
               </div>
               </li>
               <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">sample function1</a>
               <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
               <a href="./insert.php">average temperature in Australia in 2016</a>
               <a href="./delete.php">Which location in Australia has the highest temperature in 2017</a>
               <a href="./insert.php">Which location in Australia has the most rainfall in January 2015</a>
               <a href="./delete.php">At the given location, how does temperature change in 2009-2017 period? Can a trend be recognized</a>
               <a href="./insert.php">How does the temperature in different locations change in 2009~2017</a>
               </div>
               </li>
               <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">sample function2</a>
               <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
               <a href="./365_day.php">Does the windspeed/sunshine/rainfall influence the temperature? If it does, how?</a>
               <a href="./delete.php">At the given location, what’s the difference of wind direction between January and August in 2013?</a>
               <a href="./insert.php">Is the prediction of rainfall tomorrow accurate? What’s the accuracy</a>
               <a href="./delete.php">Does humidity have relation to the rainfall? What’s the relation</a>
               <a href="./insert.php">Which location in Australia has the most comfortable condition for a living</a>
               </div>
               </li>
            </ul>
        <div class="clear"></div>
    </div> -->
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
            <h1 class="page-title">Data Service</h1>
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
    <form action="./data-webpage.php" method='POST'>
    <div id="page" class="clearfix">
        <div class="content">
            <table width="100%" border="0" cellspacing="0" class="StationDetails">
                <tbody>
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                        <td colspan="3">Daily Data Retrieval</td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2">
                            <font size="3px">Daily observations are all recorded parameters for each individual day. </font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font size="3px">The first observation date is December 1, 2008. 
                                    <br>The last observation date is June 25, 2017.
                                </font>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font style="font-family:'Lato', Helvetica Neue, Arial, Sans-serif;font-size: 16px;font-weight: bold;" >Step 1 </font>
                            </td>
                    </tr>
                    <!-- <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="7"> 7 days</font></label>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="90"> 90 days</font></label>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="180"> 180 days</font></label>
                            </td>
                    </tr> -->
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font size="3px">Retrieve data from (required, min December 1, 2008)</font>
                                <label> <input name="date" type="date" min=2008-12-01 max=2017-06-25 required><span class="validity"></span></label>
                                <font size="3px">to (required, max June 25, 2017)</font>
                                <label> <input name="date2" type="date" min=2008-12-01 max=2017-06-25 required><span class="validity"></span></label>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2">
                            <font style="font-family:'Lato', Helvetica Neue, Arial, Sans-serif;font-size: 16px;font-weight: bold;" >Step 2 </font>
                        </td>
                </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2" >
                            <font size="3px">Select the location</font>
                            <select style="height: 20px;" name='location'>
                                <option disabled selected>--select--</option>
                                <option value="Albury">Albury</option>
                                <option value="BadgerysCreek">BadgerysCreek</option>
                                <option value="Cobar">Cobar</option>
                                <option value="CoffsHarbour">CoffsHarbour</option>
                                <option value="Moree">Moree</option>
                                <option value="Newcastle">Newcastle</option>
                                <option value="NorahHead">NorahHead</option>
                                <option value="NorfolkIsland">NorfolkIsland</option>
                                <option value="Penrith">Penrith</option>
                                <option value="Richmond">Richmond</option>
                                <option value="Sydney">Sydney</option>
                                <option value="SydneyAirport">SydneyAirport</option>
                                <option value="WaggaWagga">WaggaWagga</option>
                                <option value="Williamtown">Williamtown</option>
                                <option value="Wollongong">Wollongong</option>
                                <option value="Canberra">Canberra</option>
                                <option value="Tuggeranong">Tuggeranong</option>
                                <option value="MountGinini">MountGinini</option>
                                <option value="Ballarat">Ballarat</option>
                                <option value="Bendigo">Bendigo</option>
                                <option value="Sale">Sale</option>
                                <option value="MelbourneAirport">MelbourneAirport</option>
                                <option value="Melbourne">Melbourne</option>
                                <option value="Mildura">Mildura</option>
                                <option value="Nhil">Nhil</option>
                                <option value="Portland">Portland</option>
                                <option value="Watsonia">Watsonia</option>
                                <option value="Dartmoor">Dartmoor</option>
                                <option value="Brisbane">Brisbane</option>
                                <option value="Cairns">Cairns</option>
                                <option value="GoldCoast">GoldCoast</option>
                                <option value="Townsville">Townsville</option>
                                <option value="Adelaide">Adelaide</option>
                                <option value="MountGambier">MountGambier</option>
                                <option value="Nuriootpa">Nuriootpa</option>
                                <option value="Woomera">Woomera</option>
                                <option value="Albany">Albany</option>
                                <option value="Witchcliffe">Witchcliffe</option>
                                <option value="PearceRAAF">PearceRAAF</option>
                                <option value="PerthAirport">PerthAirport</option>
                                <option value="Perth">Perth</option>
                                <option value="SalmonGums">SalmonGums</option>
                                <option value="Walpole">Walpole</option>
                                <option value="Hobart">Hobart</option>
                                <option value="Launceston">Launceston</option>
                                <option value="AliceSprings">AliceSprings</option>
                                <option value="Darwin">Darwin</option>
                                <option value="Katherine">Katherine</option>
                                <option value="Uluru">Uluru</option>
                            </select>
                        </td>
                </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font style="font-family:'Lato', Helvetica Neue, Arial, Sans-serif;font-size: 16px;font-weight: bold;" >Step 3 </font>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font size="3px">Select the desired parameters.</font>
                            </td>
                    </tr>
                </tbody>
            </table>
                <div class="clear"></div>
                <div class="parameters">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                    <tbody>    
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                        <td colspan="2" bgcolor="#23365e">
                            <font size="4px">Temperature Parameters</font>
                        </td>
                        <td colspan="1" bgcolor="#23365e">
                            <font size="4">Unit</font>
                        </td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td colspan="2" bgcolor="#F4F4F4">
                            <font size="-1"> <input name="MinTemp" type="checkbox" id="MinTemp"  value="MinTemp" onclick="if(this.checked){setOption(1)};if(!this.checked){deleteOption(1)};"> MinTemp</font>
                        </td>
                        <td colspan="1" bgcolor="#F4F4F4">
                            <font size="2">Celsius</font>
                        </td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td colspan="2" bgcolor="#F4F4F4">
                                <font size="-1"> <input name="MaxTemp" type="checkbox" id="MaxTemp" value="MaxTemp" onclick="if(this.checked){setOption(2)};if(!this.checked){deleteOption(2)};"> MaxTemp</font>
                            </td>
                            <td colspan="1" bgcolor="#F4F4F4">
                                <font size="2">Celsius</font>
                            </td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td colspan="2" bgcolor="#F4F4F4">
                                <font size="-1"> <input name="Temp9am" type="checkbox" id="Temp9am" value="Temp_9am" onclick="if(this.checked){setOption(3)};if(!this.checked){deleteOption(3)};"> Temp9am</font>
                            </td>
                            <td colspan="1" bgcolor="#F4F4F4">
                                <font size="2">Celsius</font>
                            </td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                            <td colspan="2" bgcolor="#F4F4F4">
                                <font size="-1"> <input name="Temp3pm" type="checkbox" id="Temp3pm" value="Temp_3pm" onclick="if(this.checked){setOption(4)};if(!this.checked){deleteOption(4)};"> Temp3pm</font>
                            </td>
                            <td colspan="1" bgcolor="#F4F4F4">
                                <font size="2">Celsius</font>
                            </td>
                    </tr>
                
                    </tbody>
                </table>
                </div>
                <div class="parameters">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                            <tbody>    
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                                <td colspan="2" bgcolor="#23365e">
                                    <font size="4px">Cloud Parameters</font>
                                </td>
                                <td colspan="1" bgcolor="#23365e">
                                    <font size="4">Unit</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Cloud9am" type="checkbox" id="Cloud9am" value="Cloud_9am" onclick="if(this.checked){setOption(5)};if(!this.checked){deleteOption(5)};"> Cloud9am</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">"Oktas":eighths</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Cloud3pm" type="checkbox" id="Cloud3pm" value="Cloud_3pm" onclick="if(this.checked){setOption(6)};if(!this.checked){deleteOption(6)};"> Cloud3pm</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">"Oktas":eighths</font>
                                    </td>
                            </tr>
                        
                            </tbody>
                        </table>
                </div>
                <div class="parameters">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                            <tbody>    
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                                <td colspan="2" bgcolor="#23365e">
                                    <font size="4px">Humidity Parameters</font>
                                </td>
                                <td colspan="1" bgcolor="#23365e">
                                    <font size="4">Unit</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Humidity9am" type="checkbox" id="Humidity9am" value="Humidity_9am" onclick="if(this.checked){setOption(7)};if(!this.checked){deleteOption(7)};"> Humidity9am</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">Percent</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Humidity3pm" type="checkbox" id="Humidity3pm" value="Humidity_3pm" onclick="if(this.checked){setOption(8)};if(!this.checked){deleteOption(8)};"> Humidity3pm</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">Percent</font>
                                    </td>
                            </tr>
                        
                            </tbody>
                        </table>
                </div>
                <div class="parameters">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                            <tbody>    
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                                <td colspan="2" bgcolor="#23365e">
                                    <font size="4px">Rain Parameters</font>
                                </td>
                                <td colspan="1" bgcolor="#23365e">
                                    <font size="4">Unit</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Rainfall" type="checkbox" id="Rainfall" value="Rainfall" onclick="if(this.checked){setOption(9)};if(!this.checked){deleteOption(9)};"> Rainfall</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">mm</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="RainToday" type="checkbox" id="RainToday" value="Rain_Today"> RainToday</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">Boolean</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="RainTomorrow" type="checkbox" id="RainTomorrow" value="Rain_Tomorrow"> RainTomorrow</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">Boolean</font>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
                <div class="parameters">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                            <tbody>    
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                                <td colspan="2" bgcolor="#23365e">
                                    <font size="4px">Wind Parameters</font>
                                </td>
                                <td colspan="1" bgcolor="#23365e">
                                    <font size="4">Unit</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindGustDir" type="checkbox" id="WindGustDir" value="WindGustDir"> WindGustDir</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">directions</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindDir9am" type="checkbox" id="WindDir9am" value="WindDir_9am"> WindDir9am</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">directions</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindDir3pm" type="checkbox" id="WindDir3pm" value="WindDir_3pm"> WindDir3pm</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">directions</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindGustSpeed" type="checkbox" id="WindGustSpeed" value="WindGustSpeed" onclick="if(this.checked){setOption(10)};if(!this.checked){deleteOption(10)};"> WindGustSpeed</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">km/h</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindSpeed9am" type="checkbox" id="WindSpeed9am" value="WindSpeed_9am" onclick="if(this.checked){setOption(11)};if(!this.checked){deleteOption(11)};"> WindSpeed9am</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">km/h</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="WindSpeed3pm" type="checkbox" id="WindSpeed3pm" value="WindSpeed_3pm" onclick="if(this.checked){setOption(12)};if(!this.checked){deleteOption(12)};"> WindSpeed3pm</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">km/h</font>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
                <div class="parameters">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                            <tbody>    
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#F3F3F3;font-weight:bold;">
                                <td colspan="2" bgcolor="#23365e">
                                    <font size="4px">Pressure Parameters</font>
                                </td>
                                <td colspan="1" bgcolor="#23365e">
                                    <font size="4">Unit</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Pressure9am" type="checkbox" id="Pressure9am" value="Pressure_9am" onclick="if(this.checked){setOption(13)};if(!this.checked){deleteOption(13)};"> Pressure9am</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">hpa</font>
                                    </td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                    <td colspan="2" bgcolor="#F4F4F4">
                                        <font size="-1"> <input name="Pressure3pm" type="checkbox" id="Pressure3pm" value="Pressure_3pm" onclick="if(this.checked){setOption(14)};if(!this.checked){deleteOption(14)};"> Pressure3pm</font>
                                    </td>
                                    <td colspan="1" bgcolor="#F4F4F4">
                                        <font size="2">hpa</font>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                        
                </div>
                <div class="parameters">
                    <table width="100%" border="0" cellspacing="0" class="StationDetails">
                <tbody>
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                        <td colspan="3">Daily Data Retrieval</td>
                    </tr>
                    <!-- <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="7"> 7 days</font></label>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="90"> 90 days</font></label>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <label> <font size="-1"> <input name="period" type="radio" value="180"> 180 days</font></label>
                            </td>
                    </tr> -->
                    
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font style="font-family:'Lato', Helvetica Neue, Arial, Sans-serif;font-size: 16px;font-weight: bold;" >Step 3 </font>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                            <td colspan="3" bgcolor="#E2E2E2">
                                <font size="3px">Select the main order parameters</font>
                                <select id='mainparameter' style="height: 20px;" name='mainparameter'>
                               <!--  <option>--select--</option> -->
                                    <option value="dates">dates</option>
                                    <option id="1" value="MinTemp" style="display:none;">MinTemp</option>
                                    <option id="2" value="MaxTemp" style="display:none;">MaxTemp</option>
                                    <option id="3" value="Temp_9am" style="display:none;">Temp9am</option>
                                    <option id="4" value="Temp_3pm" style="display:none;">Temp3pm</option>
                                    <option id="5" value="Cloud_9am" style="display:none;">Cloud9am</option>
                                    <option id="6" value="Cloud_3pm" style="display:none;">Cloud3pm</option>
                                    <option id="7" value="Humidity_9am" style="display:none;">Humidity9am</option>
                                    <option id="8" value="Humidity_3pm" style="display:none;">Humidity3pm</option>
                                    <option id="9" value="Rainfall" style="display:none;">Rainfall</option>
                                    <option id="10" value="WindGustSpeed" style="display:none;">WindGustSpeed</option>
                                    <option id="11" value="WindSpeed_9am" style="display:none;">WindSpeed9am</option>
                                    <option id="12" value="WindSpeed_3pm" style="display:none;">WindSpeed3pm</option>
                                    <option id="13" value="Pressure_9am" style="display:none;">Pressure9am</option>
                                    <option id="14" value="Pressure_3pm" style="display:none;">Pressure3pm</option>
                                </select>
                            </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2">
                            <font style="font-family:'Lato', Helvetica Neue, Arial, Sans-serif;font-size: 16px;font-weight: bold;" >Step 4 </font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#E2E2E2" >
                            <font size="3px">Select the order </font>
                            <select style="height: 20px;" name='order'>
                              <!--   <option>--select--</option> -->
                                <option value="ASC">ascending</option>
                                <option value="DESC">descending</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
                <div id="output">
                        <table width="100%" border="0" cellspacing="0" class="StationDetails">
                                <tbody>    
                                <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;color:#000000;font-weight:bold;">
                                    <td colspan="1" bgcolor="#F0F0F0">
                                        <font size="4px"></font>
                                    </td>
                                    <td colspan="1" bgcolor="#F0F0F0">
                                            <font size="4">Output Format: </font>
                                            <select style="height: 20px;" name="format">
                                                    <option>--select--</option>
                                                    <option value="Web Page">Web Page</option>
                                                    <option value="PDF">PDF</option>
                                                    <option value="Comma delimited">Comma delimited</option>
                                                    <option value="Tab delimited">Tab delimited</option>
                                            </select>
                                    </td>
                                    <td colspan="1" bgcolor="#F0F0F0">
                                        <font size="4"></font>
                                    </td>
                                </tr>
                                <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                        <td colspan="1" bgcolor="#F4F4F4">
                                            
                                        </td>
                                        <td colspan="1" bgcolor="#F4F4F4">
                                            <input type='submit' name='Retrieve Data' value='Retrieve Data' style="color:#FFFFFF;"></input>
                                            <input type='reset' name='Reset Form' value='Reset Form' onclick="resetForm()" style="color:#FFFFFF;"></input>
                                        </td>
                                        <td colspan="1" bgcolor="#F4F4F4">
                                            
                                        </td>
                                </tr>
                                </tbody>
                            </table>    
                </div>
        </div>
        
    </div>
</form>
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