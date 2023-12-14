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
        'requested'     =>  '',
        'fldcrops'      => '',
        'dist'          => '',
        
    );
}
$count = count($locations);

for($x=0; $x<$count;$x++) {

    $fldbarangay = $locations[$x]['fldbarangay'];
    $farmdata = mysql_query("SELECT * FROM tblfarm WHERE fldlocation='$fldbarangay'");
    $countyield=0;
    while($rowfarm = mysql_fetch_array($farmdata)) {
        $farmfldcode = $rowfarm['fldcode'];
        $usercode = $rowfarm['fldfarmercode'];

        $planteddata = mysql_query("SELECT * FROM tblseedplanted WHERE tblfarmcode='$farmfldcode'");

        $i=0;
        while($rowplanted = mysql_fetch_array($planteddata)) {
            $countyield = $rowplanted['fldyield'] + $countyield;
            $seedfldcode = $rowplanted['flddistributioncode'];
            
            $seeddistributiondata = mysql_query("SELECT * FROM tblseeddistribution WHERE fldcode='$seedfldcode' ");
            
            while($rowdistribution = mysql_fetch_array($seeddistributiondata)) {
                
                $disfldcode = $rowdistribution['fldrequestcode'];
                
                $seedreqdata = mysql_query("SELECT * FROM tblseedrequested WHERE fldcode='$disfldcode' ");
                $seedqty=0;
                while($rowseedplanted = mysql_fetch_array($seedreqdata)) {
                    $fldrequestedseed = $rowseedplanted['fldrequestedseed'];
                    $seedqty=$seedqty+$rowseedplanted['fldrequestedqty'];
                    $crops = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$fldrequestedseed'");
                    
                    while($rowcrops = mysql_fetch_array($crops)) {
                        $cropname=$rowcrops['fldcrops'];
                        
                        
                    }
                    
                }
            }
            $i++;
            $locations[$x]['yields'][$i] ='<b><font color="blue">'.$cropname.'</font></b>:<b>'.$countyield.'</b><br>';
            
        }
        $i=0;
    }


}

    
// echo '<pre>';
// print_r($locations);
// echo '</pre>';
echo json_encode($locations);

?>
