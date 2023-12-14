<?php
require("include/conn.php");
$vselectdate=date("Y-m-d");
$vdatex = new DateTime($vselectdate);
$vdatetoday = $vdatex->format("Y-m-d");	

$result = mysql_query("SELECT fldrequestedseed,SUM(fldrequestedqty) as fldrequestedqty FROM tblseedrequested where flddaterequested<='$vdatetoday'  GROUP BY fldrequestedseed  order by fldrequestedseed");


$data = array();
$myArray = array();
$i=0;
while($row = mysql_fetch_array($result)){
    
    $cropcode=$row['fldrequestedseed'];
    $crops = mysql_query("SELECT * FROM tblcrops WHERE fldcode = '$cropcode'");
    while($row2 = mysql_fetch_array($crops)){
        $cropname=$row2['fldcrops'];
    }
    $data[$i] = $row;
    $myArray[] = array( 'fldrequestedseed' => $cropname, 'fldrequestedqty' => $row['fldrequestedqty'] );
    // $myArray[]= (object)[
    //     'fldrequestedseed' => $row['fldrequestedseed'],
    //     'fldrequestedqty' => $row['fldrequestedqty']
    // ];
    
    $i++;
}
//echo $myArray;
echo json_encode($myArray);
?>