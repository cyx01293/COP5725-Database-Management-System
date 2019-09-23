<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>User login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="login-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer	    = 0;	
var ddmenuitem      = 0;

// open hidden layer
function register_user()
{
    window.location.href="./register.php";
}
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
            <h1 class="page-title">AWIDS User Login</h1>
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
    <div id="login-content" class="clearfix">
        <div style="display:inline-block">
            <form method='POST' action="./judge_user.php">
                Login using your AWIDS user account username.<br/>
                <div style='width:100px;display:inline-block;text-align:right'>Username:</div>
                    <input type='text' name='user'></input>
                    <br/>
                    <div style='width:100px;display:inline-block;text-align:right'>Password:</div>
                    <input type='password' name='pass'></input>
                    <a href='#'>Forget AWIDS user account password?</a>
                    <br/>
                    <div style='width:100px;display:inline-block;text-align:right;'></div>
                    <input type='submit' name='Submit' value='Submit' style="color:#FFFFFF;"></input>
                    <input type="button" name="register" onclick="register_user()" value="Register"></input>
                    <p></p>
            </form>
        </div>
        <p>If you need any assistance with your account, please <a href="mailto:yixing.chen@ufl.edu">contact us here</a>
        .</p>
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