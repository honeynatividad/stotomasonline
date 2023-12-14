<?php
require("include/conn.php");
$results = mysql_query("SELECT * FROM tblbarangay ");

while($rows = mysql_fetch_array($results)){
    $fldbarangay = $rows['fldbarangay'];
    $fldlong = $rows['fldlong'];                              
    $fldlat = $rows['fldlat'];
    $link=$rows['link'];
   
    $locations[]=array( 
        'fldbarangay'   =>  $fldbarangay, 
        'fldlong'       =>  $fldlong, 
        'fldlat'        =>  $fldlat,
        'requested'     =>  ''
        
    );
}
$count = count($locations);

for($x=0; $x<$count;$x++) {

    $fldbarangay = $locations[$x]['fldbarangay'];
    $farmdata = mysql_query("SELECT * FROM tblfarm WHERE fldlocation='$fldbarangay'");
    $countyield=0;
    while($rowfarm = mysql_fetch_array($farmdata)) {
        $i=0;
        $farmfldcode = $rowfarm['fldcode'];
        $seedreqdata = mysql_query("SELECT * FROM tblseedrequested WHERE fldfarmcode='$farmfldcode' ");
        $seedqty=0;
        while($rowseedplanted = mysql_fetch_array($seedreqdata)) {
        
            $seedqty=$seedqty+$rowseedplanted['fldrequestedqty'];
            $fldrequestedseed=$rowseedplanted['fldrequestedseed'];
            $crops = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$fldrequestedseed'");
            
            while($rowcrops = mysql_fetch_array($crops)) {
                $cropname=$rowcrops['fldcrops'];
            }
            $locations[$x]['requested'][$i] ='<b><font color="blue">'.$cropname.'</font></b>:<b>'.$seedqty.'</b><br>';
            $seedqty=0;    
        }
        $seedqty=0;
        $i++;
    }
    
    
    
}

    
// echo '<pre>';
// print_r($locations);
// echo '</pre>';
echo json_encode($locations);

?>
