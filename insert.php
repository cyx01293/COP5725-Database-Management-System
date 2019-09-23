<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>daily data retrieval</title>
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

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
</head>
<body>

	<div id="skip-link">
        <a href="./index.php" class="element-invisible element-focusable">Skip to main content</a>
    </div>
    <div id="navbox">
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
        </ul>
        <div class="clear"></div>
    </div>
	<form action="insert_data.php" method='POST'>
	<text> date </text> <input type="date" name="date">
	<br>
	<text> location </text> <select style="height: 20px;" name='location'>
                                <option>--select--</option>
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
                            <br>
    <text>MinTemp</text>   <input  name="MinTemp" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Celsius</text>
    <br>
    <text>MaxTemp</text>   <input  name="MaxTemp" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Celsius</text>
    <br>
    <text>Temp9am</text>   <input  name="Temp9am" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Celsius</text>
    <br>
    <text>Temp3pm</text>   <input  name="Temp3pm" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Celsius</text>
    <br>
    <text>Cloud9am</text>   <input  name="Cloud9am" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>"Oktas":eighths</text>
    <br>
    <text>Cloud3pm</text>   <input  name="Cloud3pm" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>"Oktas":eighths</text>
    <br>
    <text>Humidity9am</text>   <input  name="Humidity9am" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Percent</text>
    <br>
    <text>Humidity3pm</text>   <input  name="Humidity3pm" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>Percent</text>
    <br>
    <text>Rainfall</text>   <input  name="Rainfall" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>mm</text>
    <br>
    <text>RainToday</text>   <input  type="checkbox" name="RainToday" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')">
    <br>
    <text>RainTomorrow</text>   <input  type="checkbox" name="RainTomorrow" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')">
    <br>
    <text>WindGustDir</text>   <input  name="WindGustDir" ><text>directions</text>
    <br>
    <text>WindDir9am</text>   <input  name="WindDir9am" ><text>directions</text>
    <br>
    <text>WindDir3pm</text>   <input  name="WindDir3pm" ><text>directions</text>
    <br>
    <text>WindGustSpeed</text>   <input  name="WindGustSpeed" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>km/h</text>
    <br>
    <text>WindSpeed9am</text>   <input  name="WindSpeed9am" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>km/h</text>
    <br>
    <text>WindSpeed3pm</text>   <input  name="WindSpeed3pm" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>km/h</text>
    <br>
    <text>Pressure9am</text>   <input  name="Pressure9am" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>hpa</text>
    <br>
    <text>Pressure3pm</text>   <input  name="Pressure3pm" style="IME-MODE: disabled; WIDTH: 60px; HEIGHT: 15px" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"><text>hpa</text>
    <br>
    <input type="submit" value="update">
</form>
</body>
</html>