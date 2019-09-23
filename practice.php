<?php
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                      // always modified
header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
header ("Pragma: no-cache");                          // HTTP/1.0

session_start();
$uri = $_SERVER['PHP_SELF'] . "?" . SID;
if( isset($_POST['dbuser']) ) {
	$dbuser = $_POST['dbuser'];
}
if( isset($_POST['pass']) ) {
	$pass = $_POST['pass'];
}
?>

<title>Oracle in PHP test page</title>
<h1>PHP script to access an Oracle database</h1>

<?php
// have username and password been passed from a form?
if ( isset($dbuser) && isset($pass) ) {
	// try to connect to Oracle with user and password supplied
        $conn = oci_connect($dbuser, $pass, 'oracle.cise.ufl.edu/orcl:1521');

	if (!$conn) {
    	$e = oci_error();
    	echo htmlentities($e['message'], ENT_QUOTES);
		unset($dbuser); unset($pass);
	}
}

// username and password will be unset if they weren't passed,
//  or if they were wrong
if( !isset($dbuser) || !isset($pass) ) {
    // just print form asking for account details
    echo "<form action=\"$uri\" method=post>\n";
    echo "<p>Oracle account name: ";
    echo "<input type=text name=dbuser>\n";
    echo "<br>Password: <input type=password name=pass>\n";
    echo "<br><input type=submit name=login value=Login>\n";
    echo "</form>\n";
    exit;
}

// else we have logged in to Oracle


// prepare the query
$stmt = "SELECT MinTemp
    FROM temperature_note t
    ORDER BY TID DESC
   ";
$stid = oci_parse($conn, $stmt);
// execute the query
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} else {
	// retrieve the results
	print "<p>The marks are as follows:</p>\n";
	print "<table cols=5 border=1>\n";
	print "<tr>\n";
	print "<th>Student ID</th>\n";
	print "<th>Surname</th>\n";
	print "<th>Forename</th>\n";
	print "<th>Module</th>\n";
	print "<th>Mark</th>\n";
	print "</tr>";
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	echo "<tr>\n";
    	foreach ($row as $item) {
        	echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    	}
    	echo "</tr>\n";
	}
	oci_close($conn);
	echo "</table>\n";
}
?>