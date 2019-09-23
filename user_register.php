<?php
	$type = '0';
	$name = $_POST['user'];
	$pass1 = $_POST['pass1']; 
    $pass2 = $_POST['pass2']; 
    echo $name;
    echo $pass1;
    $conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');
     $stmt = "INSERT INTO registrar
(type,username,password)
VALUES('$type','$name','$pass1')" ;
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
	oci_close($conn);
	header("Location: ./login-page.php");
	}
	

