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
        'yield'         =>  '',
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

        $disdata = mysql_query("SELECT * FROM tblseeddistribution WHERE tlbfarmcode='$farmfldcode' ");
        $seeddistro = 0;
        $z=0;
        while($rowdis = mysql_fetch_array($disdata)) {
            
            $cropcode = $rowdis['tblcrops'];
            $cropsdata = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$cropcode'");
                
            while($rowcrops2 = mysql_fetch_array($cropsdata)) {
                $cropname2=$rowcrops2['fldcrops'];
                $seeddistro = $seeddistro + $rowdis['fldseeddistributed'];
                
            }
            $z++;
            $locations[$x]['dist'][$z] ='<b><font color="green">'.$cropname2.'</font></b>:<b>'.$seeddistro.'</b>';
            // echo '<pre>';
            // print_r($cropname2.':'.$seeddistro);
            // echo '</pre>';
            $seeddistro =0;
            
        }
        
    
        

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
            $locations[$x]['fldcrops'][$i] =$cropname.':'.$countyield;
            
            
            
        }
        $i=0;

        


    }

    

    // echo '<pre>';
    // print_r($locations[$x]);
    // echo '</pre>';
    // $seedrequested = mysql_query("SELECT fldrequestedseed, SUM(fldrequestedqty) as fldrequestedqty, fldlocation FROM tblseedrequested WHERE fldlocation='$fldbarangay' ");
    
    // while($rowdseed = mysql_fetch_array($seedrequested)) {
    //     // echo '<pre>';
    //     // print_r($rowdseed);
    //     // echo '</pre>';
    //     $fldrequestedseed =  $rowdseed['fldrequestedseed'];
    //     $seedrequestedqty = $rowdseed['fldrequestedqty'];
    //     $crops = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$fldrequestedseed'");
    //     while($rowcrops = mysql_fetch_array($crops)) {
    //         $cropname=$rowcrops['fldcrops'];
    //     }
    // }
    

}
// echo '<pre>';
//                         print_r($locations);
//                         echo '</pre>';
    // echo '<pre>';
    // print_r($locations);
    // echo '</pre>';

    
    // $seeddistribution = mysql_query("SELECT * FROM tblseedrequested WHERE fldlocation='$fldbarangay'");
    // while($rowseed2 = mysql_fetch_array($seeddistribution)) {
    //     $fldcode = $rowseed2['fldcode'];
    //     // echo '<pre>';
    //     // print_r($fldcode);
    //     // echo '</pre>';
    //     $fldfarmcode=$rowseed2['fldrequestedseed'];
        
    //     $seeddistributiondata = mysql_query("SELECT * FROM tblseeddistribution WHERE fldstatus = 'Distributed' AND fldrequestcode='$fldcode' ");
    //     $crops2 = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$fldfarmcode'");
    //     while($rowcrops2 = mysql_fetch_array($crops2)) {
    //         $cropname2=$rowcrops['fldcrops'];
            
    //     }
        

    //     while($rowdistribution = mysql_fetch_array($seeddistributiondata)) {
      
    //         $disfldcode = $rowdistribution['fldcode'];
    //         print_r($disfldcode);
    //         $seedplanteddata = mysql_query("SELECT * FROM tblseedplanted WHERE flddistributioncode='$disfldcode'");
    //         $countyield = 0;
    //         while($rowseedplanted = mysql_fetch_array($seedplanteddata)) {
    //             $countyield = $rowseedplanted['fldyield'] + $countyield;
    //             echo '<pre>';
    //             print_r($rowseedplanted);
    //             echo '</pre>';
    //         }
            

            
    //     }
    //     $countseeddistribution=0;
    // }

    

    



    
// echo '<pre>';
// print_r($locations);
// echo '</pre>';
echo json_encode($locations);

?>
