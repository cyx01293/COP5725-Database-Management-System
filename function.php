<html>
<head>
    <style>
        table{
            margin: 50 auto;
            width: 600px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<form action="#" method="post">
<table><tr><td>
MinTemp:</td><td>
<input name="check_list[]" type="checkbox" id="MinTemp" value="MinTemp"></td></tr>
<tr><td>
MaxTemp:</td><td>
<input name="check_list[]" type="checkbox" id="MaxTemp" value="MaxTemp"></td></tr>
<tr><td><br />
  </td><td>
<input type="submit" name="submit" value="Submit"></td></tr></table>
	</form>


<title>Oracle in PHP test page</title>
<h1>PHP script to access an Oracle database</h1>

<?php
// have username and password been passed from a form?


$conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');

if (isset($_POST['submit'])){
	echo $dd=$_POST['check_list']; // Displays value of checked checkbox.
	//echo $_POST['MaxTemp'];
	}
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
echo "<p>".$selected ."</p>";
}
echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}	
}

// else we have logged in to Oracle


// prepare the query
$stmt = "SELECT $selected
   FROM temperature_note t
   WHERE t.TID=5 ORDER BY TID DESC";
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

</body>
</html>