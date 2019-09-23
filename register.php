<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>User login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="login-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function aaa(){
  var user = document.getElementById("user").value;
  var pass1 = document.getElementById("pass1").value;
  var pass2 = document.getElementById("pass2").value;
  if(pass1 == pass2){
    var form1 = document.forms[0];
    form1.action='./user_register.php';
    form1.submit();
  }
  else
  {
    alert('your password is different');
  }
}
</script>
</head>
<body>
    <div id="skip-link">
        <a href="index.html" class="element-invisible element-focusable">Skip to main content</a>
    </div>
    <div id="page-intro" class="clearfix">
        <div class="container">
            <h1 class="page-title">AWIDS User Login</h1>
        </div>
    </div>
   
    <div id="login-content" class="clearfix">
        <div style="display:inline-block">
            <form method='POST' action="./user_register.php" id="myForm">
               Register your AWIDS user account <br/>
                <div style='width:100px;display:inline-block;text-align:right'>Username:</div>
                    <input type='text' name='user' id="user"></input>
                    <br/>
                    <div style='width:100px;display:inline-block;text-align:right'>Password:</div>
                    <input type='password' name='pass1' id="pass1"></input>                
                    <br/>
                    <div style='width:100px;display:inline-block;text-align:right'>Retype:</div>
                    <input type='password' name='pass2' id="pass2"></input>
                    <br/>
                    <div style='width:100px;display:inline-block;text-align:right;'></div>
                    <input type="button" style="color:#FFFFFF;" onclick="aaa()" value='submit'></input>
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