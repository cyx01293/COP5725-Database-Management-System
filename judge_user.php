<?php

$username = $_POST['user']; 
$passpord = $_POST['pass']; 
echo $passpord;
$conn = oci_connect('yixing', 'CYXcyx1993', 'oracle.cise.ufl.edu/orcl:1521');
$stmt = "SELECT *
    FROM registrar
    WHERE username='$username'";
   
  /* $stmt = 'select * from(select * from
   (select name, round(avg(rainfall),2) as "avg_rain" from 
       (select l.name, r.rainfall from location l join rain_note r on l.RID=r.RID 
        where extract(year from l.dates)=2015 and extract(month from l.dates)=1)
    group by name)
    order by "avg_rain" desc)
where rownum = 1';*/
$stid = oci_parse($conn, $stmt);
echo 'b';
// execute the query
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
 oci_close($conn);
 echo 'c';
} else {
	$row = oci_fetch_array($stid);
	//echo $row[1];
 if ($passpord == $row[1] ) {
	 echo 'a';
 header("Location: ./index.php");  
 oci_close($conn);
 # code...
}
 else{
 echo "Please log in with correct username and passpord";
 header("Location: ./login-page.php");  
 oci_close($conn);
}
 
 
}

?>