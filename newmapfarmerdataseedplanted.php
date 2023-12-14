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
        'dist'     =>  ''
        
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

        $planteddata = mysql_query("SELECT * FROM tblseedplanted WHERE tblfarmcode='$farmfldcode' ");
        $seedplant = 0;
        $z=0;
        while($rowplant = mysql_fetch_array($planteddata)) {
            $disfldcode = $rowplant['flddistributioncode'];
            $disdata = mysql_query("SELECT * FROM tblseeddistribution WHERE fldcode='$disfldcode' ");
            
           
            while($rowdis = mysql_fetch_array($disdata)) {

                $cropcode = $rowplant['tblcrops'];
                $cropsdata = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$cropcode'");
                    
                while($rowcrops2 = mysql_fetch_array($cropsdata)) {
                    $cropname2=$rowcrops2['fldcrops'];
                    $seeddistro = $seeddistro + $rowdis['fldseeddistributed'];
                }
            }
            
            
            
           
            // echo '<pre>';
            // print_r($cropname2.':'.$seeddistro);
            // echo '</pre>';
            $seeddistro =0;
            
        }
        $z++;
        $locations[$x]['plant'][$z] ='<b><font color="green">'.$cropname2.'</font></b>:<b>'.$seeddistro.'</b>';
    }
    
    
}

    
// echo '<pre>';
// print_r($locations);
// echo '</pre>';
echo json_encode($locations);

?>
