<?php
require("include/conn.php");

// get farm
$farmdata = mysql_query("SELECT * FROM tblfarm  ");
while($rowfarm =  mysql_fetch_array($farmdata)){
    $farmlocation = $rowfarm['fldlocation'];
    $farmcode = $rowfarm['fldcode'];

    $locations[]=array( 
        'farmlocation'      =>  $farmlocation, 
        'fldlong'           =>  $rowfarm['fldlong'], 
        'fldlat'            =>  $rowfarm['fldlat'],
        'req'               => '',
        'farmcode'          => $farmcode,
        'farmname'          => $rowfarm['fldfarmname'],
        'yield'             => '',
        
    );
    
}

$count = count($locations);


for($x=0; $x<$count;$x++) {
    $fldbarangay = $locations[$x]['farmlocation'];
    $farmcode = $locations[$x]['farmcode'];
   
    $reqdata = mysql_query("SELECT * FROM tblseedrequested WHERE fldfarmcode='$farmcode' ");
    $seedreq = 0;
    $z=0;
    while($rowreq = mysql_fetch_array($reqdata)) {
        $seedreq =$seedreq + $rowreq['fldrequestedqty'];
        $fldrequestedseed = $rowreq['fldrequestedseed'];
        $crops = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$fldrequestedseed'");
                    
        while($rowcrops = mysql_fetch_array($crops)) {
            $cropname=$rowcrops['fldcrops'];
        }
        $locations[$x]['req'][$z] ='<b><font color="green">'.$cropname.'</font></b>:<b>'.$seedreq.'</b><br>';
        $z++;
    }
    $seedreq = 0;

    $seedyield = 0;
    $n=0;
 
    $yielddata = mysql_query("SELECT * FROM tblseedplanted WHERE tblfarmcode='$farmcode' ");
    while($rowyield = mysql_fetch_array($yielddata)) {
        $seedyield =$seedyield + $rowyield['fldyield'];
        $vfarm = $rowyield['tblfarmcode'];
        $vseeddis = $rowyield['flddistributioncode'];
        $disdata = mysql_query("SELECT * FROM tblseeddistribution WHERE fldcode='$vseeddis' ");
        while($rowdis = mysql_fetch_array($disdata)) {
            $disfldcode = $rowdis['fldrequestcode'];
            $vfldrequestcode = $rowyield['fldrequestcode'];
            $getseeddata = mysql_query("SELECT * FROM tblseedrequested WHERE fldcode='$disfldcode' ");
        
            while($rowseeddata = mysql_fetch_array($getseeddata)) {
                $vcropdscode = $rowseeddata['fldrequestedseed'];
            
                $vcrops = mysql_query("SELECT * FROM tblcrops WHERE fldcode='$vcropdscode'");
                while($rowcrops = mysql_fetch_array($vcrops)) {
                    $vcropname=$rowcrops['fldcrops'];
                    $locations[$x]['yield'][$n] ='<b><font color="blue">'.$vcropname.'</font></b>:<b>'.$seedyield.'</b><br>';
                }
                
            }
        }
        
        $n++;
        $seedyield = 0;
    }
    
    // echo '<pre>';
    // var_dump($locations[$x]);
    // echo '</pre>';
}
    
echo json_encode($locations);
?>