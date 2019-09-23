<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>index</title>
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
    <div id="map" class="clearfix">
        <div class="content">
            <table width="100%" border="0" cellspacing="0" class="StationDetails">
                <tbody>
                    <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                        <td colspan="3">Map of Australia</td>
                    </tr>
                    <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                        <td colspan="3" bgcolor="#F4F4F4" style="text-align: center;">
                            <img class='a' src="./map2.jpg">
                        </td>
                    </tr>
                </tbody>
            </table>        
        </div>
        <div class="container">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                        <tbody>
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                                <td colspan="3">Dataset Copyright</td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                <td colspan="3" bgcolor="#F4F4F4" style="text-align:justify;">
                                    <font size="-1">Australia is located
between the South Pacific and the Indian Ocean and consists of islands such as the
Australian mainland and Tasmania and overseas territories. It faces the Pacific Ocean
and the Tasman Sea, the west, the north, and the south facing the Indian Ocean and its
fringe. It is the only country in the world that monopolizes a continent. Its geographical location determines how the climate there is like. Australia is in the southern
hemisphere, with summers from December to February, autumn from March to May,
winter from June to August, and spring from September to November. The annual
average temperature is 27°C in the north and 14°C in the south. Australia spans two
climatic zones, and the north zone is a tropical zone. The south zone is a temperate zone.
The Midwest of Australia is an uninhabited desert with dry weather, high temperatures
and large temperature differences. In the coastal areas, rainfall is abundant and the
climate is humid.</font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0">
                                <td colspan="2" bgcolor="#F4F4F4">
                                    <font size="-1"><a href="./data-abstract.php" class="element-invisible element-focusable">more details</a> for dataset</font>
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
        <div class="container">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                        <tbody>
                            <tr bgcolor="#34495e" style="border-top:1px solid #FFFFFF;color:#FFFFFF;font-weight:bold;">
                                <td colspan="3">Do you know?</td>
                            </tr>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                <td colspan="3" bgcolor="#F4F4F4" style="text-align:justify;">
                                    <font size="-1">The most comfortable city for human beings in 2013 is Cairns. Cairns is a city in the Cairns Region, Queensland, Australia. 
                                        It is on the east coast of Far North Queensland. Cairns is a popular tourist destination because of its tropical climate and access to 
                                        both nearby tropical rainforest and the Great Barrier Reef, one of the seven natural wonders of the world. We analyze our database and 
                                        select tempearature and humidity with the same weight to compare the living condition between cities 
                                        <a href="./data-mostcomfort.php" class="element-invisible element-focusable">view more</a></font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0">
                                <td colspan="2" bgcolor="#F4F4F4">
                                    <font size="-1"></font>
                                </td>
                            </tr>

                        </tbody>
                    </table>
        </div>
        <div class="container">
                <table width="100%" border="0" cellspacing="0" class="StationDetails">
                        <tbody>
                            <tr bgcolor="#F0F0F0" style="border-top:1px solid #FFFFFF;">
                                <td colspan="3" bgcolor="#F4F4F4" style="text-align:justify;">
                                    <font size="-1">The rainfall in the coastal cities is usually more than those noncoastal cities. 
                                        In our database, the observation stations which are in coastal cities including Adelaide, Brisbane, 
                                        Cairns, CoffsHarbour, Darwin, GoldCoast, Hobart, Melbourne, Portland, Townsville and Wollongong tend 
                                        to have more rainfall. <a href="./data-costalcity.php" class="element-invisible element-focusable">view more</a></font>
                                </td>
                            </tr>
                            <tr bgcolor="#F0F0F0">
                                <td colspan="2" bgcolor="#F4F4F4">
                                    <font size="-1"></font>
                                </td>
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