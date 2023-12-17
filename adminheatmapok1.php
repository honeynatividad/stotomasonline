 <?php
session_start();
?>

<?php
require("include/conn.php");
$vun=$_SESSION['views'];
?>

<?php
if(isset($_SESSION['views']))
{
	require("include/conn.php");
	
	
	$vun=$_SESSION['views'];
	
	
	
	if($_SESSION['views']!="a")
  	{
  
		$result = mysql_query("SELECT * FROM tbluser where fldusername='$vun'");
		while($row = mysql_fetch_array($result))
		{
			$vuser=$row['fldfirstname']." ".$row['fldlastname'];	
            $vlastname=$row['fldlastname'];
            $vfirstname=$row['fldfirstname'];
            $rest = substr($vfirstname, 0, 1);
			$vusertype=$row['fldusertype'];			
			$vimage=$row['fldimage'];			
            $vcode=$row['fldcode'];			
 		}
  ?>    


<!DOCTYPE html>
<html lang="en">

<?php
///////////////barangay
$vbarangay="San Agustin";
$vbarangay1="San Antonio";
$vbarangay2="San Rafael";
$vbarangay3="Santiago";
$vbarangay4="San Bartolome";
$vbarangay5="San Miguel";
$vbarangay6="San Felix";
$vbarangay7="San Fernando";
$vbarangay8="San Francisco";
$vbarangay9="San Isidro Norte";
$vbarangay10="San Isidro Sur";
$vbarangay11="San Joaquin";
$vbarangay12="San Jose";
$vbarangay13="San Juan";
$vbarangay14="San Luis";
$vbarangay15="San Pablo";
$vbarangay16="San Pedro";
$vbarangay17="Santa Teresita";
$vbarangay18="Santa Maria";
$vbarangay19="Santa Elena";
$vbarangay20="Santa Clara";
$vbarangay21="Santa Anastacia";
$vbarangay22="Santa Ana";
$vbarangay23="Santa Cruz";
$vbarangay24="San Vicente";
$vbarangay25="San Roque";

        
/////////////////////////////////////////////////////////////////san agustin
////////////////////////classification distributed qty
$vdriceqty=0;
$vdcornqty=0;
$vdfruitvegetablesqty=0;
$vdleafyvegetablesqty=0;
$vdrootvegetablesqty=0;
$vdfruittreesqty=0;
$vdrootcropsqty=0;
$vdspicesqty=0;
$vdlegumesqty=0;
$vdindustrialcropsqty=0;
$vdcoconutqty=0;
$vdsugarcaneqty=0;
$vdbambooqty=0;

////////////////////////classification yield qty
$vyriceqty=0;
$vycornqty=0;
$vyfruitvegetablesqty=0;
$vyleafyvegetablesqty=0;
$vyrootvegetablesqty=0;
$vyfruittreesqty=0;
$vyrootcropsqty=0;
$vyspicesqty=0;
$vylegumesqty=0;
$vyindustrialcropsqty=0;
$vycoconutqty=0;
$vysugarcaneqty=0;
$vybambooqty=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Agustin'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty=$vdfruitvegetablesqty+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty=$vyfruitvegetablesqty+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san antonio
////////////////////////classification distributed qty
$vdriceqty1=0;
$vdcornqty1=0;
$vdfruitvegetablesqty1=0;
$vdleafyvegetablesqty1=0;
$vdrootvegetablesqty1=0;
$vdfruittreesqty1=0;
$vdrootcropsqty1=0;
$vdspicesqty1=0;
$vdlegumesqty1=0;
$vdindustrialcropsqty1=0;
$vdcoconutqty1=0;
$vdsugarcaneqty1=0;
$vdbambooqty1=0;

////////////////////////classification yield qty
$vyriceqty1=0;
$vycornqty1=0;
$vyfruitvegetablesqty1=0;
$vyleafyvegetablesqty1=0;
$vyrootvegetablesqty1=0;
$vyfruittreesqty1=0;
$vyrootcropsqty1=0;
$vyspicesqty1=0;
$vylegumesqty1=0;
$vyindustrialcropsqty1=0;
$vycoconutqty1=0;
$vysugarcaneqty1=0;
$vybambooqty1=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Antonio'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty1=$vdfruitvegetablesqty1+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty1=$vyfruitvegetablesqty1+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san rafael
////////////////////////classification distributed qty
$vdriceqty2=0;
$vdcornqty2=0;
$vdfruitvegetablesqty2=0;
$vdleafyvegetablesqty2=0;
$vdrootvegetablesqty2=0;
$vdfruittreesqty2=0;
$vdrootcropsqty2=0;
$vdspicesqty2=0;
$vdlegumesqty2=0;
$vdindustrialcropsqty2=0;
$vdcoconutqty2=0;
$vdsugarcaneqty2=0;
$vdbambooqty2=0;

////////////////////////classification yield qty
$vyriceqty2=0;
$vycornqty2=0;
$vyfruitvegetablesqty2=0;
$vyleafyvegetablesqty2=0;
$vyrootvegetablesqty2=0;
$vyfruittreesqty2=0;
$vyrootcropsqty2=0;
$vyspicesqty2=0;
$vylegumesqty2=0;
$vyindustrialcropsqty2=0;
$vycoconutqty2=0;
$vysugarcaneqty2=0;
$vybambooqty2=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Rafael'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty2=$vdfruitvegetablesqty2+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty2=$vyfruitvegetablesqty2+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santiago
////////////////////////classification distributed qty
$vdriceqty3=0;
$vdcornqty3=0;
$vdfruitvegetablesqty3=0;
$vdleafyvegetablesqty3=0;
$vdrootvegetablesqty3=0;
$vdfruittreesqty3=0;
$vdrootcropsqty3=0;
$vdspicesqty3=0;
$vdlegumesqty3=0;
$vdindustrialcropsqty3=0;
$vdcoconutqty3=0;
$vdsugarcaneqty3=0;
$vdbambooqty3=0;

////////////////////////classification yield qty
$vyriceqty3=0;
$vycornqty3=0;
$vyfruitvegetablesqty3=0;
$vyleafyvegetablesqty3=0;
$vyrootvegetablesqty3=0;
$vyfruittreesqty3=0;
$vyrootcropsqty3=0;
$vyspicesqty3=0;
$vylegumesqty3=0;
$vyindustrialcropsqty3=0;
$vycoconutqty3=0;
$vysugarcaneqty3=0;
$vybambooqty3=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santiago'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty3=$vdfruitvegetablesqty3+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty3=$vyfruitvegetablesqty3+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san bartolome
////////////////////////classification distributed qty
$vdriceqty4=0;
$vdcornqty4=0;
$vdfruitvegetablesqty4=0;
$vdleafyvegetablesqty4=0;
$vdrootvegetablesqty4=0;
$vdfruittreesqty4=0;
$vdrootcropsqty4=0;
$vdspicesqty4=0;
$vdlegumesqty4=0;
$vdindustrialcropsqty4=0;
$vdcoconutqty4=0;
$vdsugarcaneqty4=0;
$vdbambooqty4=0;

////////////////////////classification yield qty
$vyriceqty4=0;
$vycornqty4=0;
$vyfruitvegetablesqty4=0;
$vyleafyvegetablesqty4=0;
$vyrootvegetablesqty4=0;
$vyfruittreesqty4=0;
$vyrootcropsqty4=0;
$vyspicesqty4=0;
$vylegumesqty4=0;
$vyindustrialcropsqty4=0;
$vycoconutqty4=0;
$vysugarcaneqty4=0;
$vybambooqty4=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Bartolome'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty4=$vdfruitvegetablesqty4+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty4=$vyfruitvegetablesqty4+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

        
/////////////////////////////////////////////////////////////////san miguel
////////////////////////classification distributed qty
$vdriceqty5=0;
$vdcornqty5=0;
$vdfruitvegetablesqty5=0;
$vdleafyvegetablesqty5=0;
$vdrootvegetablesqty5=0;
$vdfruittreesqty5=0;
$vdrootcropsqty5=0;
$vdspicesqty5=0;
$vdlegumesqty5=0;
$vdindustrialcropsqty5=0;
$vdcoconutqty5=0;
$vdsugarcaneqty5=0;
$vdbambooqty5=0;

////////////////////////classification yield qty
$vyriceqty5=0;
$vycornqty5=0;
$vyfruitvegetablesqty5=0;
$vyleafyvegetablesqty5=0;
$vyrootvegetablesqty5=0;
$vyfruittreesqty5=0;
$vyrootcropsqty5=0;
$vyspicesqty5=0;
$vylegumesqty5=0;
$vyindustrialcropsqty5=0;
$vycoconutqty5=0;
$vysugarcaneqty5=0;
$vybambooqty5=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Miguel'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty5=$vdfruitvegetablesqty5+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty5=$vyfruitvegetablesqty5+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san felix
////////////////////////classification distributed qty
$vdriceqty6=0;
$vdcornqty6=0;
$vdfruitvegetablesqty6=0;
$vdleafyvegetablesqty6=0;
$vdrootvegetablesqty6=0;
$vdfruittreesqty6=0;
$vdrootcropsqty6=0;
$vdspicesqty6=0;
$vdlegumesqty6=0;
$vdindustrialcropsqty6=0;
$vdcoconutqty6=0;
$vdsugarcaneqty6=0;
$vdbambooqty6=0;

////////////////////////classification yield qty
$vyriceqty6=0;
$vycornqty6=0;
$vyfruitvegetablesqty6=0;
$vyleafyvegetablesqty6=0;
$vyrootvegetablesqty6=0;
$vyfruittreesqty6=0;
$vyrootcropsqty6=0;
$vyspicesqty6=0;
$vylegumesqty6=0;
$vyindustrialcropsqty6=0;
$vycoconutqty6=0;
$vysugarcaneqty6=0;
$vybambooqty6=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Felix'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty6=$vdfruitvegetablesqty6+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty6=$vyfruitvegetablesqty6+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////san fernando
////////////////////////classification distributed qty
$vdriceqty7=0;
$vdcornqty7=0;
$vdfruitvegetablesqty7=0;
$vdleafyvegetablesqty7=0;
$vdrootvegetablesqty7=0;
$vdfruittreesqty7=0;
$vdrootcropsqty7=0;
$vdspicesqty7=0;
$vdlegumesqty7=0;
$vdindustrialcropsqty7=0;
$vdcoconutqty7=0;
$vdsugarcaneqty7=0;
$vdbambooqty7=0;

////////////////////////classification yield qty
$vyriceqty7=0;
$vycornqty7=0;
$vyfruitvegetablesqty7=0;
$vyleafyvegetablesqty7=0;
$vyrootvegetablesqty7=0;
$vyfruittreesqty7=0;
$vyrootcropsqty7=0;
$vyspicesqty7=0;
$vylegumesqty7=0;
$vyindustrialcropsqty7=0;
$vycoconutqty7=0;
$vysugarcaneqty7=0;
$vybambooqty7=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Fernando'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty7=$vdfruitvegetablesqty7+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty7=$vyfruitvegetablesqty7+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////san francisco
////////////////////////classification distributed qty
$vdriceqty8=0;
$vdcornqty8=0;
$vdfruitvegetablesqty8=0;
$vdleafyvegetablesqty8=0;
$vdrootvegetablesqty8=0;
$vdfruittreesqty8=0;
$vdrootcropsqty8=0;
$vdspicesqty8=0;
$vdlegumesqty8=0;
$vdindustrialcropsqty8=0;
$vdcoconutqty8=0;
$vdsugarcaneqty8=0;
$vdbambooqty8=0;

////////////////////////classification yield qty
$vyriceqty8=0;
$vycornqty8=0;
$vyfruitvegetablesqty8=0;
$vyleafyvegetablesqty8=0;
$vyrootvegetablesqty8=0;
$vyfruittreesqty8=0;
$vyrootcropsqty8=0;
$vyspicesqty8=0;
$vylegumesqty8=0;
$vyindustrialcropsqty8=0;
$vycoconutqty8=0;
$vysugarcaneqty8=0;
$vybambooqty8=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Francisco'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty8=$vdfruitvegetablesqty8+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty8=$vyfruitvegetablesqty8+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san isidro norte
////////////////////////classification distributed qty
$vdriceqty9=0;
$vdcornqty9=0;
$vdfruitvegetablesqty9=0;
$vdleafyvegetablesqty9=0;
$vdrootvegetablesqty9=0;
$vdfruittreesqty9=0;
$vdrootcropsqty9=0;
$vdspicesqty9=0;
$vdlegumesqty9=0;
$vdindustrialcropsqty9=0;
$vdcoconutqty9=0;
$vdsugarcaneqty9=0;
$vdbambooqty9=0;

////////////////////////classification yield qty
$vyriceqty9=0;
$vycornqty9=0;
$vyfruitvegetablesqty9=0;
$vyleafyvegetablesqty9=0;
$vyrootvegetablesqty9=0;
$vyfruittreesqty9=0;
$vyrootcropsqty9=0;
$vyspicesqty9=0;
$vylegumesqty9=0;
$vyindustrialcropsqty9=0;
$vycoconutqty9=0;
$vysugarcaneqty9=0;
$vybambooqty9=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Isidro Norte'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty9=$vdfruitvegetablesqty9+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty9=$vyfruitvegetablesqty9+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san isidro sur
////////////////////////classification distributed qty
$vdriceqty10=0;
$vdcornqty10=0;
$vdfruitvegetablesqty10=0;
$vdleafyvegetablesqty10=0;
$vdrootvegetablesqty10=0;
$vdfruittreesqty10=0;
$vdrootcropsqty10=0;
$vdspicesqty10=0;
$vdlegumesqty10=0;
$vdindustrialcropsqty10=0;
$vdcoconutqty10=0;
$vdsugarcaneqty10=0;
$vdbambooqty10=0;

////////////////////////classification yield qty
$vyriceqty10=0;
$vycornqty10=0;
$vyfruitvegetablesqty10=0;
$vyleafyvegetablesqty10=0;
$vyrootvegetablesqty10=0;
$vyfruittreesqty10=0;
$vyrootcropsqty10=0;
$vyspicesqty10=0;
$vylegumesqty10=0;
$vyindustrialcropsqty10=0;
$vycoconutqty10=0;
$vysugarcaneqty10=0;
$vybambooqty10=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Isidro Sur'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty10=$vdfruitvegetablesqty10+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty10=$vyfruitvegetablesqty10+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san joaquin
////////////////////////classification distributed qty
$vdriceqty11=0;
$vdcornqty11=0;
$vdfruitvegetablesqty11=0;
$vdleafyvegetablesqty11=0;
$vdrootvegetablesqty11=0;
$vdfruittreesqty11=0;
$vdrootcropsqty11=0;
$vdspicesqty11=0;
$vdlegumesqty11=0;
$vdindustrialcropsqty11=0;
$vdcoconutqty11=0;
$vdsugarcaneqty11=0;
$vdbambooqty11=0;

////////////////////////classification yield qty
$vyriceqty11=0;
$vycornqty11=0;
$vyfruitvegetablesqty11=0;
$vyleafyvegetablesqty11=0;
$vyrootvegetablesqty11=0;
$vyfruittreesqty11=0;
$vyrootcropsqty11=0;
$vyspicesqty11=0;
$vylegumesqty11=0;
$vyindustrialcropsqty11=0;
$vycoconutqty11=0;
$vysugarcaneqty11=0;
$vybambooqty11=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Joaquin'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty11=$vdfruitvegetablesqty11+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty11=$vyfruitvegetablesqty11+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san jose
////////////////////////classification distributed qty
$vdriceqty12=0;
$vdcornqty12=0;
$vdfruitvegetablesqty12=0;
$vdleafyvegetablesqty12=0;
$vdrootvegetablesqty12=0;
$vdfruittreesqty12=0;
$vdrootcropsqty12=0;
$vdspicesqty12=0;
$vdlegumesqty12=0;
$vdindustrialcropsqty12=0;
$vdcoconutqty12=0;
$vdsugarcaneqty12=0;
$vdbambooqty12=0;

////////////////////////classification yield qty
$vyriceqty12=0;
$vycornqty12=0;
$vyfruitvegetablesqty12=0;
$vyleafyvegetablesqty12=0;
$vyrootvegetablesqty12=0;
$vyfruittreesqty12=0;
$vyrootcropsqty12=0;
$vyspicesqty12=0;
$vylegumesqty12=0;
$vyindustrialcropsqty12=0;
$vycoconutqty12=0;
$vysugarcaneqty12=0;
$vybambooqty12=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Jose'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty12=$vdfruitvegetablesqty12+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty12=$vyfruitvegetablesqty12+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san juan
////////////////////////classification distributed qty
$vdriceqty13=0;
$vdcornqty13=0;
$vdfruitvegetablesqty13=0;
$vdleafyvegetablesqty13=0;
$vdrootvegetablesqty13=0;
$vdfruittreesqty13=0;
$vdrootcropsqty13=0;
$vdspicesqty13=0;
$vdlegumesqty13=0;
$vdindustrialcropsqty13=0;
$vdcoconutqty13=0;
$vdsugarcaneqty13=0;
$vdbambooqty13=0;

////////////////////////classification yield qty
$vyriceqty13=0;
$vycornqty13=0;
$vyfruitvegetablesqty13=0;
$vyleafyvegetablesqty13=0;
$vyrootvegetablesqty13=0;
$vyfruittreesqty13=0;
$vyrootcropsqty13=0;
$vyspicesqty13=0;
$vylegumesqty13=0;
$vyindustrialcropsqty13=0;
$vycoconutqty13=0;
$vysugarcaneqty13=0;
$vybambooqty13=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Juan'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty13=$vdfruitvegetablesqty13+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty13=$vyfruitvegetablesqty13+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san luis
////////////////////////classification distributed qty
$vdriceqty14=0;
$vdcornqty14=0;
$vdfruitvegetablesqty14=0;
$vdleafyvegetablesqty14=0;
$vdrootvegetablesqty14=0;
$vdfruittreesqty14=0;
$vdrootcropsqty14=0;
$vdspicesqty14=0;
$vdlegumesqty14=0;
$vdindustrialcropsqty14=0;
$vdcoconutqty14=0;
$vdsugarcaneqty14=0;
$vdbambooqty14=0;

////////////////////////classification yield qty
$vyriceqty14=0;
$vycornqty14=0;
$vyfruitvegetablesqty14=0;
$vyleafyvegetablesqty14=0;
$vyrootvegetablesqty14=0;
$vyfruittreesqty14=0;
$vyrootcropsqty14=0;
$vyspicesqty14=0;
$vylegumesqty14=0;
$vyindustrialcropsqty14=0;
$vycoconutqty14=0;
$vysugarcaneqty14=0;
$vybambooqty14=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Luis'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty14=$vdfruitvegetablesqty14+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty14=$vyfruitvegetablesqty14+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san pablo
////////////////////////classification distributed qty
$vdriceqty15=0;
$vdcornqty15=0;
$vdfruitvegetablesqty15=0;
$vdleafyvegetablesqty15=0;
$vdrootvegetablesqty15=0;
$vdfruittreesqty15=0;
$vdrootcropsqty15=0;
$vdspicesqty15=0;
$vdlegumesqty15=0;
$vdindustrialcropsqty15=0;
$vdcoconutqty15=0;
$vdsugarcaneqty15=0;
$vdbambooqty15=0;

////////////////////////classification yield qty
$vyriceqty15=0;
$vycornqty15=0;
$vyfruitvegetablesqty15=0;
$vyleafyvegetablesqty15=0;
$vyrootvegetablesqty15=0;
$vyfruittreesqty15=0;
$vyrootcropsqty15=0;
$vyspicesqty15=0;
$vylegumesqty15=0;
$vyindustrialcropsqty15=0;
$vycoconutqty15=0;
$vysugarcaneqty15=0;
$vybambooqty15=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Pablo'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty15=$vdfruitvegetablesqty15+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty15=$vyfruitvegetablesqty15+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////san pedro
////////////////////////classification distributed qty
$vdriceqty16=0;
$vdcornqty16=0;
$vdfruitvegetablesqty16=0;
$vdleafyvegetablesqty16=0;
$vdrootvegetablesqty16=0;
$vdfruittreesqty16=0;
$vdrootcropsqty16=0;
$vdspicesqty16=0;
$vdlegumesqty16=0;
$vdindustrialcropsqty16=0;
$vdcoconutqty16=0;
$vdsugarcaneqty16=0;
$vdbambooqty16=0;

////////////////////////classification yield qty
$vyriceqty16=0;
$vycornqty16=0;
$vyfruitvegetablesqty16=0;
$vyleafyvegetablesqty16=0;
$vyrootvegetablesqty16=0;
$vyfruittreesqty16=0;
$vyrootcropsqty16=0;
$vyspicesqty16=0;
$vylegumesqty16=0;
$vyindustrialcropsqty16=0;
$vycoconutqty16=0;
$vysugarcaneqty16=0;
$vybambooqty16=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Pedro'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty16=$vdfruitvegetablesqty16+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty16=$vyfruitvegetablesqty16+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santa teresita
////////////////////////classification distributed qty
$vdriceqty17=0;
$vdcornqty17=0;
$vdfruitvegetablesqty17=0;
$vdleafyvegetablesqty17=0;
$vdrootvegetablesqty17=0;
$vdfruittreesqty17=0;
$vdrootcropsqty17=0;
$vdspicesqty17=0;
$vdlegumesqty17=0;
$vdindustrialcropsqty17=0;
$vdcoconutqty17=0;
$vdsugarcaneqty17=0;
$vdbambooqty17=0;

////////////////////////classification yield qty
$vyriceqty17=0;
$vycornqty17=0;
$vyfruitvegetablesqty17=0;
$vyleafyvegetablesqty17=0;
$vyrootvegetablesqty17=0;
$vyfruittreesqty17=0;
$vyrootcropsqty17=0;
$vyspicesqty17=0;
$vylegumesqty17=0;
$vyindustrialcropsqty17=0;
$vycoconutqty17=0;
$vysugarcaneqty17=0;
$vybambooqty17=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Teresita'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty17=$vdfruitvegetablesqty17+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty17=$vyfruitvegetablesqty17+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santa maria
////////////////////////classification distributed qty
$vdriceqty18=0;
$vdcornqty18=0;
$vdfruitvegetablesqty18=0;
$vdleafyvegetablesqty18=0;
$vdrootvegetablesqty18=0;
$vdfruittreesqty18=0;
$vdrootcropsqty18=0;
$vdspicesqty18=0;
$vdlegumesqty18=0;
$vdindustrialcropsqty18=0;
$vdcoconutqty18=0;
$vdsugarcaneqty18=0;
$vdbambooqty18=0;

////////////////////////classification yield qty
$vyriceqty18=0;
$vycornqty18=0;
$vyfruitvegetablesqty18=0;
$vyleafyvegetablesqty18=0;
$vyrootvegetablesqty18=0;
$vyfruittreesqty18=0;
$vyrootcropsqty18=0;
$vyspicesqty18=0;
$vylegumesqty18=0;
$vyindustrialcropsqty18=0;
$vycoconutqty18=0;
$vysugarcaneqty18=0;
$vybambooqty18=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Maria'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty18=$vdfruitvegetablesqty18+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty18=$vyfruitvegetablesqty18+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santa elena
////////////////////////classification distributed qty
$vdriceqty19=0;
$vdcornqty19=0;
$vdfruitvegetablesqty19=0;
$vdleafyvegetablesqty19=0;
$vdrootvegetablesqty19=0;
$vdfruittreesqty19=0;
$vdrootcropsqty19=0;
$vdspicesqty19=0;
$vdlegumesqty19=0;
$vdindustrialcropsqty19=0;
$vdcoconutqty19=0;
$vdsugarcaneqty19=0;
$vdbambooqty19=0;

////////////////////////classification yield qty
$vyriceqty19=0;
$vycornqty19=0;
$vyfruitvegetablesqty19=0;
$vyleafyvegetablesqty19=0;
$vyrootvegetablesqty19=0;
$vyfruittreesqty19=0;
$vyrootcropsqty19=0;
$vyspicesqty19=0;
$vylegumesqty19=0;
$vyindustrialcropsqty19=0;
$vycoconutqty19=0;
$vysugarcaneqty19=0;
$vybambooqty19=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Elena'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty19=$vdfruitvegetablesqty19+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty19=$vyfruitvegetablesqty19+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santa clara
////////////////////////classification distributed qty
$vdriceqty20=0;
$vdcornqty20=0;
$vdfruitvegetablesqty20=0;
$vdleafyvegetablesqty20=0;
$vdrootvegetablesqty20=0;
$vdfruittreesqty20=0;
$vdrootcropsqty20=0;
$vdspicesqty20=0;
$vdlegumesqty20=0;
$vdindustrialcropsqty20=0;
$vdcoconutqty20=0;
$vdsugarcaneqty20=0;
$vdbambooqty20=0;

////////////////////////classification yield qty
$vyriceqty20=0;
$vycornqty20=0;
$vyfruitvegetablesqty20=0;
$vyleafyvegetablesqty20=0;
$vyrootvegetablesqty20=0;
$vyfruittreesqty20=0;
$vyrootcropsqty20=0;
$vyspicesqty20=0;
$vylegumesqty20=0;
$vyindustrialcropsqty20=0;
$vycoconutqty20=0;
$vysugarcaneqty20=0;
$vybambooqty20=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Clara'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty20=$vdfruitvegetablesqty20+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty20=$vyfruitvegetablesqty20+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////santa anastacia
////////////////////////classification distributed qty
$vdriceqty21=0;
$vdcornqty21=0;
$vdfruitvegetablesqty21=0;
$vdleafyvegetablesqty21=0;
$vdrootvegetablesqty21=0;
$vdfruittreesqty21=0;
$vdrootcropsqty21=0;
$vdspicesqty21=0;
$vdlegumesqty21=0;
$vdindustrialcropsqty21=0;
$vdcoconutqty21=0;
$vdsugarcaneqty21=0;
$vdbambooqty21=0;

////////////////////////classification yield qty
$vyriceqty21=0;
$vycornqty21=0;
$vyfruitvegetablesqty21=0;
$vyleafyvegetablesqty21=0;
$vyrootvegetablesqty21=0;
$vyfruittreesqty21=0;
$vyrootcropsqty21=0;
$vyspicesqty21=0;
$vylegumesqty21=0;
$vyindustrialcropsqty21=0;
$vycoconutqty21=0;
$vysugarcaneqty21=0;
$vybambooqty21=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Anastacia'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty21=$vdfruitvegetablesqty21+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty21=$vyfruitvegetablesqty21+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////
    
/////////////////////////////////////////////////////////////////san ana
////////////////////////classification distributed qty
$vdriceqty22=0;
$vdcornqty22=0;
$vdfruitvegetablesqty22=0;
$vdleafyvegetablesqty22=0;
$vdrootvegetablesqty22=0;
$vdfruittreesqty22=0;
$vdrootcropsqty22=0;
$vdspicesqty22=0;
$vdlegumesqty22=0;
$vdindustrialcropsqty22=0;
$vdcoconutqty22=0;
$vdsugarcaneqty22=0;
$vdbambooqty22=0;

////////////////////////classification yield qty
$vyriceqty22=0;
$vycornqty22=0;
$vyfruitvegetablesqty22=0;
$vyleafyvegetablesqty22=0;
$vyrootvegetablesqty22=0;
$vyfruittreesqty22=0;
$vyrootcropsqty22=0;
$vyspicesqty22=0;
$vylegumesqty22=0;
$vyindustrialcropsqty22=0;
$vycoconutqty22=0;
$vysugarcaneqty22=0;
$vybambooqty22=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Ana'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty22=$vdfruitvegetablesqty22+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty22=$vyfruitvegetablesqty22+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////
        
/////////////////////////////////////////////////////////////////santa cruz
////////////////////////classification distributed qty
$vdriceqty23=0;
$vdcornqty23=0;
$vdfruitvegetablesqty23=0;
$vdleafyvegetablesqty23=0;
$vdrootvegetablesqty23=0;
$vdfruittreesqty23=0;
$vdrootcropsqty23=0;
$vdspicesqty23=0;
$vdlegumesqty23=0;
$vdindustrialcropsqty23=0;
$vdcoconutqty23=0;
$vdsugarcaneqty23=0;
$vdbambooqty23=0;

////////////////////////classification yield qty
$vyriceqty23=0;
$vycornqty23=0;
$vyfruitvegetablesqty23=0;
$vyleafyvegetablesqty23=0;
$vyrootvegetablesqty23=0;
$vyfruittreesqty23=0;
$vyrootcropsqty23=0;
$vyspicesqty23=0;
$vylegumesqty23=0;
$vyindustrialcropsqty23=0;
$vycoconutqty23=0;
$vysugarcaneqty23=0;
$vybambooqty23=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='Santa Cruz'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty23=$vdfruitvegetablesqty23+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty23=$vyfruitvegetablesqty23+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////
        
/////////////////////////////////////////////////////////////////san vicente
////////////////////////classification distributed qty
$vdriceqty24=0;
$vdcornqty24=0;
$vdfruitvegetablesqty24=0;
$vdleafyvegetablesqty24=0;
$vdrootvegetablesqty24=0;
$vdfruittreesqty24=0;
$vdrootcropsqty24=0;
$vdspicesqty24=0;
$vdlegumesqty24=0;
$vdindustrialcropsqty24=0;
$vdcoconutqty24=0;
$vdsugarcaneqty24=0;
$vdbambooqty24=0;

////////////////////////classification yield qty
$vyriceqty24=0;
$vycornqty24=0;
$vyfruitvegetablesqty24=0;
$vyleafyvegetablesqty24=0;
$vyrootvegetablesqty24=0;
$vyfruittreesqty24=0;
$vyrootcropsqty24=0;
$vyspicesqty24=0;
$vylegumesqty24=0;
$vyindustrialcropsqty24=0;
$vycoconutqty24=0;
$vysugarcaneqty24=0;
$vybambooqty24=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Vicente'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty24=$vdfruitvegetablesqty24+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty24=$vyfruitvegetablesqty24+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////
        
/////////////////////////////////////////////////////////////////san roque
////////////////////////classification distributed qty
$vdriceqty25=0;
$vdcornqty25=0;
$vdfruitvegetablesqty25=0;
$vdleafyvegetablesqty25=0;
$vdrootvegetablesqty25=0;
$vdfruittreesqty25=0;
$vdrootcropsqty25=0;
$vdspicesqty25=0;
$vdlegumesqty25=0;
$vdindustrialcropsqty25=0;
$vdcoconutqty25=0;
$vdsugarcaneqty25=0;
$vdbambooqty25=0;

////////////////////////classification yield qty
$vyriceqty25=0;
$vycornqty25=0;
$vyfruitvegetablesqty25=0;
$vyleafyvegetablesqty25=0;
$vyrootvegetablesqty25=0;
$vyfruittreesqty25=0;
$vyrootcropsqty25=0;
$vyspicesqty25=0;
$vylegumesqty25=0;
$vyindustrialcropsqty25=0;
$vycoconutqty25=0;
$vysugarcaneqty25=0;
$vybambooqty25=0;

$result = mysql_query("SELECT * FROM tbluser where fldlocation='San Roque'");
while($row = mysql_fetch_array($result))
{
    $vcode=$row['fldcode'];
    /////////////////////////////////////////////
    $result1 = mysql_query("SELECT * FROM tblseedrequested where fldrequestedby='$vcode' && fldstatus='Distributed'");
    while($row1 = mysql_fetch_array($result1))
    {
        $vcropcode=$row1['fldrequestedseed'];
        $vdistributedqty=$row1['fldrequestedqty'];
        $vrequestcode=$row1['fldcode'];
        
        //////////////////////////////////rice
        
        //////////////////////////////////corn
        
        
        //////////////////////////////////fruit vegetables
        $result2 = mysql_query("SELECT * FROM tblcrops where fldcode='$vcropcode' && fldcropscategory='Fruit Vegetables'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdfruitvegetablesqty25=$vdfruitvegetablesqty25+$vdistributedqty;
        }
        
        $result2 = mysql_query("SELECT * FROM tblseeddistribution where fldrequestcode='$vrequestcode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vdistributioncode=$row2['fldcode'];
        }
        $result2 = mysql_query("SELECT * FROM tblseedplanted where flddistributioncode='$vdistributioncode'");
        while($row2 = mysql_fetch_array($result2))
        {   
            $vyfruitvegetablesqty25=$vyfruitvegetablesqty25+$row2['fldyield'];
        }
        
        /////////////////////////////////////////////////
        
    }
    

}

///////////////////////////////////////////////////////////////////////////////////


?>
 
    
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sto. Tomas City Agricultural Mapping Web Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      /**
       * @license
       * Copyright 2019 G oogle LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.
      function initMap() {
        const sanagustin = { lat: 14.064385, lng: 121.208259 };
        const sanantonio = { lat: 14.116221, lng: 121.152426 };
        const sanrafael = { lat: 14.133653, lng: 121.152426 };
        
        const santiago = { lat: 14.127275, lng: 121.155288 };
          
        const sanbartolome = { lat: 14.114784, lng: 121.179629 };
        const sanmiguel = { lat: 14.104491, lng: 121.179629 };
        const sanfelix = { lat: 14.082534, lng: 121.198239 };
        const sanfernando = { lat: 14.027571, lng: 121.213984 };
          
        const sanfrancisco = { lat: 14.041935, lng: 121.178197 };
          
        const sanisidronorte = { lat: 14.072534, lng: 121.178197 };
          
        const sanisidrosur = { lat: 14.057366, lng: 121.185356 };
          
        const sanjoaquin = { lat: 14.056397, lng: 121.198601 };
          
        const sanjose = { lat: 14.076572, lng: 121.203965 };
          
        const sanjuan = { lat: 14.069265, lng: 121.201102 };
        const sanluis = { lat: 14.018244, lng: 121.198239 };
          
        const sanpablo = { lat: 14.079435, lng: 121.183924 };
        const sanpedro = { lat: 14.085398, lng: 121.178197 };
          
        const santateresita = { lat: 14.019059, lng: 121.192514 };
          
        const santamaria = { lat: 14.070106, lng: 121.168175 };
        const santaelena = { lat: 14.096068, lng: 121.202534 };
          
        const santaclara = { lat: 14.018103, lng: 121.208259 };
          
        const santaanastacia = { lat: 14.141115, lng: 121.139536 };
          
        const santaana = { lat: 14.065347, lng: 121.192514 };
          
        const santacruz = { lat: 13.994563, lng: 121.211122 };
        const sanvicente = { lat: 14.090689, lng: 121.168175 };
        const sanroque = { lat: 14.098289, lng: 121.150992 };
        
          
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: sanisidronorte,
        });
          
        //////////////////////////san agustin
        const contentString =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty; ?>,  " +
          "Corn: <?php echo $vdcornqty; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty; ?>, Root Crops: <?php echo $vdrootcropsqty; ?>, " +
          "Spices: <?php echo $vdspicesqty; ?>, Legumes: <?php echo $vdlegumesqty; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty; ?>, Coconut: <?php echo $vdcoconutqty; ?>, Sugarcane: <?php echo $vdsugarcaneqty; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty; ?>,  " +
          "Corn: <?php echo $vycornqty; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty; ?>, Root Crops: <?php echo $vyrootcropsqty; ?>, " +
          "Spices: <?php echo $vyspicesqty; ?>, Legumes: <?php echo $vylegumesqty; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty; ?>, Coconut: <?php echo $vycoconutqty; ?>, Sugarcane: <?php echo $vysugarcaneqty; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow = new google.maps.InfoWindow({
          content: contentString,
          ariaLabel: "San Agustin",
        });
        const marker = new google.maps.Marker({
          position: sanagustin,
          map,
          title: "San Agustin, Sto. Tomas, Batangas",
        });

        marker.addListener("click", () => {
          infowindow.open({
            anchor: marker,
            map,
          });
        });
        
        ////////////////////////
        /////////////////////////////////san antonio
        const contentString1 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay1; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty1; ?>,  " +
          "Corn: <?php echo $vdcornqty1; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty1; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty1; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty1; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty1; ?>, Root Crops: <?php echo $vdrootcropsqty1; ?>, " +
          "Spices: <?php echo $vdspicesqty1; ?>, Legumes: <?php echo $vdlegumesqty1; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty1; ?>, Coconut: <?php echo $vdcoconutqty1; ?>, Sugarcane: <?php echo $vdsugarcaneqty1; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty1; ?>,  " +
          "Corn: <?php echo $vycornqty1; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty1; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty1; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty1; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty1; ?>, Root Crops: <?php echo $vyrootcropsqty1; ?>, " +
          "Spices: <?php echo $vyspicesqty1; ?>, Legumes: <?php echo $vylegumesqty1; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty1; ?>, Coconut: <?php echo $vycoconutqty1; ?>, Sugarcane: <?php echo $vysugarcaneqty1; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow1 = new google.maps.InfoWindow({
          content: contentString1,
          ariaLabel: "San Antonio",
        });
        
        const marker1 = new google.maps.Marker({
          position: sanantonio,
          map,
          title: "San Antonio, Sto. Tomas, Batangas",
        });

        marker1.addListener("click", () => {
          infowindow1.open({
            anchor: marker1,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san rafael
        const contentString2 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay2; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty2; ?>,  " +
          "Corn: <?php echo $vdcornqty2; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty2; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty2; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty2; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty2; ?>, Root Crops: <?php echo $vdrootcropsqty2; ?>, " +
          "Spices: <?php echo $vdspicesqty2; ?>, Legumes: <?php echo $vdlegumesqty2; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty2; ?>, Coconut: <?php echo $vdcoconutqty2; ?>, Sugarcane: <?php echo $vdsugarcaneqty2; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty2; ?>,  " +
          "Corn: <?php echo $vycornqty2; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty2; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty2; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty2; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty2; ?>, Root Crops: <?php echo $vyrootcropsqty2; ?>, " +
          "Spices: <?php echo $vyspicesqty2; ?>, Legumes: <?php echo $vylegumesqty2; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty2; ?>, Coconut: <?php echo $vycoconutqty2; ?>, Sugarcane: <?php echo $vysugarcaneqty2; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow2 = new google.maps.InfoWindow({
          content: contentString2,
          ariaLabel: "San Rafael",
        });
        
        const marker2 = new google.maps.Marker({
          position: sanrafael,
          map,
          title: "San Rafael, Sto. Tomas, Batangas",
        });

        marker2.addListener("click", () => {
          infowindow2.open({
            anchor: marker2,
            map,
          });
        });
        ///////////////////////////////////////////////  
        
         /////////////////////////////////santiago
        const contentString3 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay3; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty3; ?>,  " +
          "Corn: <?php echo $vdcornqty3; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty3; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty3; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty3; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty3; ?>, Root Crops: <?php echo $vdrootcropsqty3; ?>, " +
          "Spices: <?php echo $vdspicesqty3; ?>, Legumes: <?php echo $vdlegumesqty3; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty3; ?>, Coconut: <?php echo $vdcoconutqty3; ?>, Sugarcane: <?php echo $vdsugarcaneqty3; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty3; ?>,  " +
          "Corn: <?php echo $vycornqty3; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty3; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty3; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty3; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty3; ?>, Root Crops: <?php echo $vyrootcropsqty3; ?>, " +
          "Spices: <?php echo $vyspicesqty3; ?>, Legumes: <?php echo $vylegumesqty3; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty3; ?>, Coconut: <?php echo $vycoconutqty3; ?>, Sugarcane: <?php echo $vysugarcaneqty3; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow3 = new google.maps.InfoWindow({
          content: contentString3,
          ariaLabel: "Santiago",
        });
        
        const marker3 = new google.maps.Marker({
          position: santiago,
          map,
          title: "Santiago, Sto. Tomas, Batangas",
        });

        marker3.addListener("click", () => {
          infowindow3.open({
            anchor: marker3,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san bartolome
        const contentString4 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay4; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty4; ?>,  " +
          "Corn: <?php echo $vdcornqty4; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty4; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty4; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty4; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty4; ?>, Root Crops: <?php echo $vdrootcropsqty4; ?>, " +
          "Spices: <?php echo $vdspicesqty4; ?>, Legumes: <?php echo $vdlegumesqty4; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty4; ?>, Coconut: <?php echo $vdcoconutqty4; ?>, Sugarcane: <?php echo $vdsugarcaneqty4; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty4; ?>,  " +
          "Corn: <?php echo $vycornqty4; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty4; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty4; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty4; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty4; ?>, Root Crops: <?php echo $vyrootcropsqty4; ?>, " +
          "Spices: <?php echo $vyspicesqty4; ?>, Legumes: <?php echo $vylegumesqty4; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty4; ?>, Coconut: <?php echo $vycoconutqty4; ?>, Sugarcane: <?php echo $vysugarcaneqty4; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow4 = new google.maps.InfoWindow({
          content: contentString4,
          ariaLabel: "San Bartolome",
        });
        
        const marker4 = new google.maps.Marker({
          position: sanbartolome,
          map,
          title: "San Bartolome, Sto. Tomas, Batangas",
        });

        marker4.addListener("click", () => {
          infowindow4.open({
            anchor: marker4,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san miguel
        const contentString5 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay5; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty5; ?>,  " +
          "Corn: <?php echo $vdcornqty5; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty5; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty5; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty5; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty5; ?>, Root Crops: <?php echo $vdrootcropsqty5; ?>, " +
          "Spices: <?php echo $vdspicesqty5; ?>, Legumes: <?php echo $vdlegumesqty5; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty5; ?>, Coconut: <?php echo $vdcoconutqty5; ?>, Sugarcane: <?php echo $vdsugarcaneqty5; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty5; ?>,  " +
          "Corn: <?php echo $vycornqty5; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty5; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty5; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty5; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty5; ?>, Root Crops: <?php echo $vyrootcropsqty5; ?>, " +
          "Spices: <?php echo $vyspicesqty5; ?>, Legumes: <?php echo $vylegumesqty5; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty5; ?>, Coconut: <?php echo $vycoconutqty5; ?>, Sugarcane: <?php echo $vysugarcaneqty5; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow5 = new google.maps.InfoWindow({
          content: contentString5,
          ariaLabel: "San Miguel",
        });
        
        const marker5 = new google.maps.Marker({
          position: sanmiguel,
          map,
          title: "San Miguel, Sto. Tomas, Batangas",
        });

        marker5.addListener("click", () => {
          infowindow5.open({
            anchor: marker5,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san felix
        const contentString6 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay6; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty6; ?>,  " +
          "Corn: <?php echo $vdcornqty6; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty6; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty6; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty6; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty6; ?>, Root Crops: <?php echo $vdrootcropsqty6; ?>, " +
          "Spices: <?php echo $vdspicesqty6; ?>, Legumes: <?php echo $vdlegumesqty6; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty6; ?>, Coconut: <?php echo $vdcoconutqty6; ?>, Sugarcane: <?php echo $vdsugarcaneqty6; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty6; ?>,  " +
          "Corn: <?php echo $vycornqty6; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty6; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty6; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty6; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty6; ?>, Root Crops: <?php echo $vyrootcropsqty6; ?>, " +
          "Spices: <?php echo $vyspicesqty6; ?>, Legumes: <?php echo $vylegumesqty6; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty6; ?>, Coconut: <?php echo $vycoconutqty6; ?>, Sugarcane: <?php echo $vysugarcaneqty6; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow6 = new google.maps.InfoWindow({
          content: contentString6,
          ariaLabel: "San Felix",
        });
        
        const marker6 = new google.maps.Marker({
          position: sanfelix,
          map,
          title: "San Felix, Sto. Tomas, Batangas",
        });

        marker6.addListener("click", () => {
          infowindow6.open({
            anchor: marker6,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san fernando
        const contentString7 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay7; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty7; ?>,  " +
          "Corn: <?php echo $vdcornqty7; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty7; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty7; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty7; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty7; ?>, Root Crops: <?php echo $vdrootcropsqty7; ?>, " +
          "Spices: <?php echo $vdspicesqty7; ?>, Legumes: <?php echo $vdlegumesqty7; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty7; ?>, Coconut: <?php echo $vdcoconutqty7; ?>, Sugarcane: <?php echo $vdsugarcaneqty7; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty7; ?>,  " +
          "Corn: <?php echo $vycornqty7; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty7; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty7; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty7; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty7; ?>, Root Crops: <?php echo $vyrootcropsqty7; ?>, " +
          "Spices: <?php echo $vyspicesqty7; ?>, Legumes: <?php echo $vylegumesqty7; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty7; ?>, Coconut: <?php echo $vycoconutqty7; ?>, Sugarcane: <?php echo $vysugarcaneqty7; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow7 = new google.maps.InfoWindow({
          content: contentString7,
          ariaLabel: "San Fernando",
        });
        
        const marker7 = new google.maps.Marker({
          position: sanfernando,
          map,
          title: "San Fernando, Sto. Tomas, Batangas",
        });

        marker7.addListener("click", () => {
          infowindow7.open({
            anchor: marker7,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san francisco
        const contentString8 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay8; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty8; ?>,  " +
          "Corn: <?php echo $vdcornqty8; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty8; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty8; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty8; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty8; ?>, Root Crops: <?php echo $vdrootcropsqty8; ?>, " +
          "Spices: <?php echo $vdspicesqty8; ?>, Legumes: <?php echo $vdlegumesqty8; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty8; ?>, Coconut: <?php echo $vdcoconutqty8; ?>, Sugarcane: <?php echo $vdsugarcaneqty8; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty8; ?>,  " +
          "Corn: <?php echo $vycornqty8; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty8; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty8; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty8; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty8; ?>, Root Crops: <?php echo $vyrootcropsqty8; ?>, " +
          "Spices: <?php echo $vyspicesqty8; ?>, Legumes: <?php echo $vylegumesqty8; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty8; ?>, Coconut: <?php echo $vycoconutqty8; ?>, Sugarcane: <?php echo $vysugarcaneqty8; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow8 = new google.maps.InfoWindow({
          content: contentString8,
          ariaLabel: "San Francisco",
        });
        
        const marker8 = new google.maps.Marker({
          position: sanfrancisco,
          map,
          title: "San Francisco, Sto. Tomas, Batangas",
        });

        marker8.addListener("click", () => {
          infowindow8.open({
            anchor: marker8,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san isidro norte
        const contentString9 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay9; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty9; ?>,  " +
          "Corn: <?php echo $vdcornqty9; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty9; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty9; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty9; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty9; ?>, Root Crops: <?php echo $vdrootcropsqty9; ?>, " +
          "Spices: <?php echo $vdspicesqty9; ?>, Legumes: <?php echo $vdlegumesqty9; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty9; ?>, Coconut: <?php echo $vdcoconutqty9; ?>, Sugarcane: <?php echo $vdsugarcaneqty9; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty9; ?>,  " +
          "Corn: <?php echo $vycornqty9; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty9; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty9; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty9; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty9; ?>, Root Crops: <?php echo $vyrootcropsqty9; ?>, " +
          "Spices: <?php echo $vyspicesqty9; ?>, Legumes: <?php echo $vylegumesqty9; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty9; ?>, Coconut: <?php echo $vycoconutqty9; ?>, Sugarcane: <?php echo $vysugarcaneqty9; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow9 = new google.maps.InfoWindow({
          content: contentString9,
          ariaLabel: "San Isidro Norte",
        });
        
        const marker9 = new google.maps.Marker({
          position: sanisidronorte,
          map,
          title: "San Isidro Norte, Sto. Tomas, Batangas",
        });

        marker9.addListener("click", () => {
          infowindow9.open({
            anchor: marker9,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san isidro sur
        const contentString10 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay10; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty10; ?>,  " +
          "Corn: <?php echo $vdcornqty10; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty10; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty10; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty10; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty10; ?>, Root Crops: <?php echo $vdrootcropsqty10; ?>, " +
          "Spices: <?php echo $vdspicesqty10; ?>, Legumes: <?php echo $vdlegumesqty10; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty10; ?>, Coconut: <?php echo $vdcoconutqty10; ?>, Sugarcane: <?php echo $vdsugarcaneqty10; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty10; ?>,  " +
          "Corn: <?php echo $vycornqty10; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty10; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty10; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty10; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty10; ?>, Root Crops: <?php echo $vyrootcropsqty10; ?>, " +
          "Spices: <?php echo $vyspicesqty10; ?>, Legumes: <?php echo $vylegumesqty10; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty10; ?>, Coconut: <?php echo $vycoconutqty10; ?>, Sugarcane: <?php echo $vysugarcaneqty10; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow10 = new google.maps.InfoWindow({
          content: contentString10,
          ariaLabel: "San Isidro Sur",
        });
        
        const marker10 = new google.maps.Marker({
          position: sanisidrosur,
          map,
          title: "San Isidro Sur, Sto. Tomas, Batangas",
        });

        marker10.addListener("click", () => {
          infowindow10.open({
            anchor: marker10,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////san joaquin
        const contentString11 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay11; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty11; ?>,  " +
          "Corn: <?php echo $vdcornqty11; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty11; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty11; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty11; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty11; ?>, Root Crops: <?php echo $vdrootcropsqty11; ?>, " +
          "Spices: <?php echo $vdspicesqty11; ?>, Legumes: <?php echo $vdlegumesqty11; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty11; ?>, Coconut: <?php echo $vdcoconutqty11; ?>, Sugarcane: <?php echo $vdsugarcaneqty11; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty11; ?>,  " +
          "Corn: <?php echo $vycornqty11; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty11; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty11; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty11; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty11; ?>, Root Crops: <?php echo $vyrootcropsqty11; ?>, " +
          "Spices: <?php echo $vyspicesqty11; ?>, Legumes: <?php echo $vylegumesqty11; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty11; ?>, Coconut: <?php echo $vycoconutqty11; ?>, Sugarcane: <?php echo $vysugarcaneqty11; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow11 = new google.maps.InfoWindow({
          content: contentString11,
          ariaLabel: "San Joaquin",
        });
        
        const marker11 = new google.maps.Marker({
          position: sanjoaquin,
          map,
          title: "San Joaquin, Sto. Tomas, Batangas",
        });

        marker11.addListener("click", () => {
          infowindow11.open({
            anchor: marker11,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////san jose
        const contentString12 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay12; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty12; ?>,  " +
          "Corn: <?php echo $vdcornqty12; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty12; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty12; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty12; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty12; ?>, Root Crops: <?php echo $vdrootcropsqty12; ?>, " +
          "Spices: <?php echo $vdspicesqty12; ?>, Legumes: <?php echo $vdlegumesqty12; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty12; ?>, Coconut: <?php echo $vdcoconutqty12; ?>, Sugarcane: <?php echo $vdsugarcaneqty12; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty12; ?>,  " +
          "Corn: <?php echo $vycornqty12; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty12; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty12; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty12; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty12; ?>, Root Crops: <?php echo $vyrootcropsqty12; ?>, " +
          "Spices: <?php echo $vyspicesqty12; ?>, Legumes: <?php echo $vylegumesqty12; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty12; ?>, Coconut: <?php echo $vycoconutqty12; ?>, Sugarcane: <?php echo $vysugarcaneqty12; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow12 = new google.maps.InfoWindow({
          content: contentString12,
          ariaLabel: "San Jose",
        });
        
        const marker12 = new google.maps.Marker({
          position: sanjose,
          map,
          title: "San Jose, Sto. Tomas, Batangas",
        });

        marker12.addListener("click", () => {
          infowindow12.open({
            anchor: marker12,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////san juan
        const contentString13 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay13; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty13; ?>,  " +
          "Corn: <?php echo $vdcornqty13; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty13; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty13; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty13; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty13; ?>, Root Crops: <?php echo $vdrootcropsqty13; ?>, " +
          "Spices: <?php echo $vdspicesqty13; ?>, Legumes: <?php echo $vdlegumesqty13; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty13; ?>, Coconut: <?php echo $vdcoconutqty13; ?>, Sugarcane: <?php echo $vdsugarcaneqty13; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty13; ?>,  " +
          "Corn: <?php echo $vycornqty13; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty13; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty13; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty13; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty13; ?>, Root Crops: <?php echo $vyrootcropsqty13; ?>, " +
          "Spices: <?php echo $vyspicesqty13; ?>, Legumes: <?php echo $vylegumesqty13; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty13; ?>, Coconut: <?php echo $vycoconutqty13; ?>, Sugarcane: <?php echo $vysugarcaneqty13; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow13 = new google.maps.InfoWindow({
          content: contentString12,
          ariaLabel: "San Juan",
        });
        
        const marker13 = new google.maps.Marker({
          position: sanjuan,
          map,
          title: "San Juan, Sto. Tomas, Batangas",
        });

        marker13.addListener("click", () => {
          infowindow13.open({
            anchor: marker13,
            map,
          });
        });
        ///////////////////////////////////////////////
        
        /////////////////////////////////san luis
        const contentString14 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay14; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty14; ?>,  " +
          "Corn: <?php echo $vdcornqty14; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty14; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty14; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty14; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty14; ?>, Root Crops: <?php echo $vdrootcropsqty14; ?>, " +
          "Spices: <?php echo $vdspicesqty14; ?>, Legumes: <?php echo $vdlegumesqty14; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty14; ?>, Coconut: <?php echo $vdcoconutqty14; ?>, Sugarcane: <?php echo $vdsugarcanqty14; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty14; ?>,  " +
          "Corn: <?php echo $vycornqty14; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty14; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty14; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty14; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty14; ?>, Root Crops: <?php echo $vyrootcropsqty14; ?>, " +
          "Spices: <?php echo $vyspicesqty14; ?>, Legumes: <?php echo $vylegumesqty14; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty14; ?>, Coconut: <?php echo $vycoconutqty14; ?>, Sugarcane: <?php echo $vysugarcaneqty14; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow14 = new google.maps.InfoWindow({
          content: contentString14,
          ariaLabel: "San Luis",
        });
        
        const marker14 = new google.maps.Marker({
          position: sanluis,
          map,
          title: "San Luis, Sto. Tomas, Batangas",
        });

        marker14.addListener("click", () => {
          infowindow14.open({
            anchor: marker14,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////san pablo
        const contentString15 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay15; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty15; ?>,  " +
          "Corn: <?php echo $vdcornqty15; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty15; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty15; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty15; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty15; ?>, Root Crops: <?php echo $vdrootcropsqty15; ?>, " +
          "Spices: <?php echo $vdspicesqty15; ?>, Legumes: <?php echo $vdlegumesqty15; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty15; ?>, Coconut: <?php echo $vdcoconutqty15; ?>, Sugarcane: <?php echo $vdsugarcaneqty15; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty15; ?>,  " +
          "Corn: <?php echo $vycornqt15y; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty15; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty15; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty15; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty15; ?>, Root Crops: <?php echo $vyrootcropsqty15; ?>, " +
          "Spices: <?php echo $vyspicesqty15; ?>, Legumes: <?php echo $vylegumesqty15; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty15; ?>, Coconut: <?php echo $vycoconutqty15; ?>, Sugarcane: <?php echo $vysugarcaneqty15; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow15 = new google.maps.InfoWindow({
          content: contentString15,
          ariaLabel: "San Pablo",
        });
        
        const marker15 = new google.maps.Marker({
          position: sanpablo,
          map,
          title: "San Pablo, Sto. Tomas, Batangas",
        });

        marker15.addListener("click", () => {
          infowindow15.open({
            anchor: marker15,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////san pedro
        const contentString16 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay16; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty16; ?>,  " +
          "Corn: <?php echo $vdcornqty16; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty16; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty16; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty16; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty16; ?>, Root Crops: <?php echo $vdrootcropsqty16; ?>, " +
          "Spices: <?php echo $vdspicesqty16; ?>, Legumes: <?php echo $vdlegumesqty16; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty16; ?>, Coconut: <?php echo $vdcoconutqty16; ?>, Sugarcane: <?php echo $vdsugarcanqty16; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty16; ?>,  " +
          "Corn: <?php echo $vycornqty16; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty16; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty16; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty16; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty16; ?>, Root Crops: <?php echo $vyrootcropsqty16; ?>, " +
          "Spices: <?php echo $vyspicesqty16; ?>, Legumes: <?php echo $vylegumesqty16; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty16; ?>, Coconut: <?php echo $vycoconutqty16; ?>, Sugarcane: <?php echo $vysugarcaneqty16; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow16 = new google.maps.InfoWindow({
          content: contentString16,
          ariaLabel: "San Pedro",
        });
        
        const marker16 = new google.maps.Marker({
          position: sanpedro,
          map,
          title: "San Pedro, Sto. Tomas, Batangas",
        });

        marker16.addListener("click", () => {
          infowindow16.open({
            anchor: marker16,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa teresita
        const contentString17 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay17; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty17; ?>,  " +
          "Corn: <?php echo $vdcornqty17; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty17; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty17; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty17; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty17; ?>, Root Crops: <?php echo $vdrootcropsqty17; ?>, " +
          "Spices: <?php echo $vdspicesqty17; ?>, Legumes: <?php echo $vdlegumesqty17; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty17; ?>, Coconut: <?php echo $vdcoconutqty17; ?>, Sugarcane: <?php echo $vdsugarcaneqty17; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty17; ?>,  " +
          "Corn: <?php echo $vycornqty17; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty17; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty17; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty17; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty17; ?>, Root Crops: <?php echo $vyrootcropsqty17; ?>, " +
          "Spices: <?php echo $vyspicesqty17; ?>, Legumes: <?php echo $vylegumesqty17; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty17; ?>, Coconut: <?php echo $vycoconutqty17; ?>, Sugarcane: <?php echo $vysugarcaneqty17; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow17 = new google.maps.InfoWindow({
          content: contentString17,
          ariaLabel: "Santa Teresita",
        });
        
        const marker17 = new google.maps.Marker({
          position: santateresita,
          map,
          title: "Santa Teresita, Sto. Tomas, Batangas",
        });

        marker17.addListener("click", () => {
          infowindow17.open({
            anchor: marker17,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa maria
        const contentString18 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay18; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty18; ?>,  " +
          "Corn: <?php echo $vdcornqty18; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty18; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty18; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty18; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty18; ?>, Root Crops: <?php echo $vdrootcropsqty18; ?>, " +
          "Spices: <?php echo $vdspicesqty18; ?>, Legumes: <?php echo $vdlegumesqty18; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty18; ?>, Coconut: <?php echo $vdcoconutqty18; ?>, Sugarcane: <?php echo $vdsugarcaneqty18; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty18; ?>,  " +
          "Corn: <?php echo $vycornqty18; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty18; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty18; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty18; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty18; ?>, Root Crops: <?php echo $vyrootcropsqty18; ?>, " +
          "Spices: <?php echo $vyspicesqty18; ?>, Legumes: <?php echo $vylegumesqty18; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty18; ?>, Coconut: <?php echo $vycoconutqty18; ?>, Sugarcane: <?php echo $vysugarcaneqty18; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow18 = new google.maps.InfoWindow({
          content: contentString18,
          ariaLabel: "Santa Maria",
        });
        
        const marker18 = new google.maps.Marker({
          position: santamaria,
          map,
          title: "Santa Maria, Sto. Tomas, Batangas",
        });

        marker18.addListener("click", () => {
          infowindow18.open({
            anchor: marker18,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa elena
        const contentString19 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay19; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty19; ?>,  " +
          "Corn: <?php echo $vdcornqty19; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty19; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty19; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty19; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty19; ?>, Root Crops: <?php echo $vdrootcropsqty19; ?>, " +
          "Spices: <?php echo $vdspicesqty19; ?>, Legumes: <?php echo $vdlegumesqty19; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty19; ?>, Coconut: <?php echo $vdcoconutqty19; ?>, Sugarcane: <?php echo $vdsugarcaneqty19; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty19; ?>,  " +
          "Corn: <?php echo $vycornqty19; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty19; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty19; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty19; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty19; ?>, Root Crops: <?php echo $vyrootcropsqty19; ?>, " +
          "Spices: <?php echo $vyspicesqty19; ?>, Legumes: <?php echo $vylegumesqty19; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty19; ?>, Coconut: <?php echo $vycoconutqty19; ?>, Sugarcane: <?php echo $vysugarcaneqty19; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow19 = new google.maps.InfoWindow({
          content: contentString19,
          ariaLabel: "Santa Elena",
        });
        
        const marker19 = new google.maps.Marker({
          position: santaelena,
          map,
          title: "Santa Elena, Sto. Tomas, Batangas",
        });

        marker19.addListener("click", () => {
          infowindow19.open({
            anchor: marker19,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa clara
        const contentString20 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay20; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty20; ?>,  " +
          "Corn: <?php echo $vdcornqty20; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty20; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty20; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty20; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty20; ?>, Root Crops: <?php echo $vdrootcropsqty20; ?>, " +
          "Spices: <?php echo $vdspicesqty20; ?>, Legumes: <?php echo $vdlegumesqty20; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty20; ?>, Coconut: <?php echo $vdcoconutqty20; ?>, Sugarcane: <?php echo $vdsugarcaneqty20; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty20; ?>,  " +
          "Corn: <?php echo $vycornqty20; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty20; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty20; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty20; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty20; ?>, Root Crops: <?php echo $vyrootcropsqty20; ?>, " +
          "Spices: <?php echo $vyspicesqty20; ?>, Legumes: <?php echo $vylegumesqty20; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty20; ?>, Coconut: <?php echo $vycoconutqty20; ?>, Sugarcane: <?php echo $vysugarcaneqty20; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow20 = new google.maps.InfoWindow({
          content: contentString20,
          ariaLabel: "Santa Clara",
        });
        
        const marker20 = new google.maps.Marker({
          position: santaclara,
          map,
          title: "Santa Clara, Sto. Tomas, Batangas",
        });

        marker20.addListener("click", () => {
          infowindow20.open({
            anchor: marker20,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa anastacia
        const contentString21 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay21; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty21; ?>,  " +
          "Corn: <?php echo $vdcornqty21; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty21; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty21; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty21; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty21; ?>, Root Crops: <?php echo $vdrootcropsqty21; ?>, " +
          "Spices: <?php echo $vdspicesqty21; ?>, Legumes: <?php echo $vdlegumesqty21; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty21; ?>, Coconut: <?php echo $vdcoconutqty21; ?>, Sugarcane: <?php echo $vdsugarcaneqty21; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty21; ?>,  " +
          "Corn: <?php echo $vycornqty21; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty21; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty21; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty21; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty21; ?>, Root Crops: <?php echo $vyrootcropsqty21; ?>, " +
          "Spices: <?php echo $vyspicesqty21; ?>, Legumes: <?php echo $vylegumesqty21; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty21; ?>, Coconut: <?php echo $vycoconutqty21; ?>, Sugarcane: <?php echo $vysugarcaneqty21; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow21 = new google.maps.InfoWindow({
          content: contentString21,
          ariaLabel: "Santa Anastacia",
        });
        
        const marker21 = new google.maps.Marker({
          position: santaanastacia,
          map,
          title: "Santa Anastacia, Sto. Tomas, Batangas",
        });

        marker21.addListener("click", () => {
          infowindow21.open({
            anchor: marker21,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa ana
        const contentString22 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay22; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty22; ?>,  " +
          "Corn: <?php echo $vdcornqty22; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty22; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty22; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty22; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty22; ?>, Root Crops: <?php echo $vdrootcropsqty22; ?>, " +
          "Spices: <?php echo $vdspicesqty22; ?>, Legumes: <?php echo $vdlegumesqty22; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty22; ?>, Coconut: <?php echo $vdcoconutqty22; ?>, Sugarcane: <?php echo $vdsugarcaneqty22; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty22; ?>,  " +
          "Corn: <?php echo $vycornqty22; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty22; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty22; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty22; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty22; ?>, Root Crops: <?php echo $vyrootcropsqty22; ?>, " +
          "Spices: <?php echo $vyspicesqty22; ?>, Legumes: <?php echo $vylegumesqty22; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty22; ?>, Coconut: <?php echo $vycoconutqty22; ?>, Sugarcane: <?php echo $vysugarcaneqty22; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow22 = new google.maps.InfoWindow({
          content: contentString22,
          ariaLabel: "Santa Ana",
        });
        
        const marker22 = new google.maps.Marker({
          position: santaana,
          map,
          title: "Santa Ana, Sto. Tomas, Batangas",
        });

        marker22.addListener("click", () => {
          infowindow22.open({
            anchor: marker22,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa cruz
        const contentString23 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay23; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty23; ?>,  " +
          "Corn: <?php echo $vdcornqty23; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty23; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty23; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty23; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty23; ?>, Root Crops: <?php echo $vdrootcropsqty23; ?>, " +
          "Spices: <?php echo $vdspicesqty23; ?>, Legumes: <?php echo $vdlegumesqty23; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty23; ?>, Coconut: <?php echo $vdcoconutqty23; ?>, Sugarcane: <?php echo $vdsugarcaneqty23; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty23; ?>,  " +
          "Corn: <?php echo $vycornqty23; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty23; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty23; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty23; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty23; ?>, Root Crops: <?php echo $vyrootcropsqty23; ?>, " +
          "Spices: <?php echo $vyspicesqty23; ?>, Legumes: <?php echo $vylegumesqty23; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty23; ?>, Coconut: <?php echo $vycoconutqty23; ?>, Sugarcane: <?php echo $vysugarcaneqty23; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow23 = new google.maps.InfoWindow({
          content: contentString23,
          ariaLabel: "Santa Cruz",
        });
        
        const marker23 = new google.maps.Marker({
          position: santacruz,
          map,
          title: "Santa Cruz, Sto. Tomas, Batangas",
        });

        marker23.addListener("click", () => {
          infowindow23.open({
            anchor: marker23,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa vicente
        const contentString24 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay24; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty24; ?>,  " +
          "Corn: <?php echo $vdcornqty24; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty24; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty24; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty24; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty24; ?>, Root Crops: <?php echo $vdrootcropsqty24; ?>, " +
          "Spices: <?php echo $vdspicesqty24; ?>, Legumes: <?php echo $vdlegumesqty24; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty24; ?>, Coconut: <?php echo $vdcoconutqty24; ?>, Sugarcane: <?php echo $vdsugarcaneqty24; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty24; ?>,  " +
          "Corn: <?php echo $vycornqty24; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty24; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty24; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty24; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty24; ?>, Root Crops: <?php echo $vyrootcropsqty24; ?>, " +
          "Spices: <?php echo $vyspicesqty24; ?>, Legumes: <?php echo $vylegumesqty24; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty24; ?>, Coconut: <?php echo $vycoconutqty24; ?>, Sugarcane: <?php echo $vysugarcaneqty24; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow24 = new google.maps.InfoWindow({
          content: contentString24,
          ariaLabel: "Santa Vicente",
        });
        
        const marker24 = new google.maps.Marker({
          position: sanvicente,
          map,
          title: "Santa Vicente, Sto. Tomas, Batangas",
        });

        marker24.addListener("click", () => {
          infowindow24.open({
            anchor: marker24,
            map,
          });
        });
        ///////////////////////////////////////////////
          
        /////////////////////////////////santa roque
        const contentString25 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading"><?php echo $vbarangay25; ?></h1>' +
          '<div id="bodyContent">' +
          "<p><b>Seed Distribution:</b><br>" +
          "Rice: <?php echo $vdriceqty25; ?>,  " +
          "Corn: <?php echo $vdcornqty25; ?>, Fruit Vegetables: <?php echo $vdfruitvegetablesqty25; ?>, " +
          "Leafy Vegetables: <?php echo $vdleafyvegetablesqty25; ?>, Root Vegetables: <?php echo $vdrootvegetablesqty25; ?>, " +
          "Fruit Trees: <?php echo $vdfruittreesqty25; ?>, Root Crops: <?php echo $vdrootcropsqty25; ?>, " +
          "Spices: <?php echo $vdspicesqty25; ?>, Legumes: <?php echo $vdlegumesqty25; ?>, " +
          "Industrial Crops: <?php echo $vdindustrialcropsqty25; ?>, Coconut: <?php echo $vdcoconutqty25; ?>, Sugarcane: <?php echo $vdsugarcaneqty25; ?>, " +
          "<br></p>" +
          "<p><b>Yield:</b><br>" +
          "Rice: <?php echo $vyriceqty25; ?>,  " +
          "Corn: <?php echo $vycornqty25; ?>, Fruit Vegetables: <?php echo $vyfruitvegetablesqty25; ?>, " +
          "Leafy Vegetables: <?php echo $vyleafyvegetablesqty25; ?>, Root Vegetables: <?php echo $vyrootvegetablesqty25; ?>, " +
          "Fruit Trees: <?php echo $vyfruittreesqty25; ?>, Root Crops: <?php echo $vyrootcropsqty25; ?>, " +
          "Spices: <?php echo $vyspicesqty25; ?>, Legumes: <?php echo $vylegumesqty25; ?>, " +
          "Industrial Crops: <?php echo $vyindustrialcropsqty25; ?>, Coconut: <?php echo $vycoconutqty25; ?>, Sugarcane: <?php echo $vysugarcaneqty25; ?>, " +
          "<br></p>" +
        
          "</div>" +
          "</div>";
        const infowindow25 = new google.maps.InfoWindow({
          content: contentString25,
          ariaLabel: "Santa Roque",
        });
        
        const marker25 = new google.maps.Marker({
          position: sanroque,
          map,
          title: "Santa Roque, Sto. Tomas, Batangas",
        });

        marker25.addListener("click", () => {
          infowindow25.open({
            anchor: marker25,
            map,
          });
        });
        ///////////////////////////////////////////////
        
      }
      window.initMap = initMap;
    </script>
    <style>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      /* 
       * Always set the map height explicitly to define the size of the div element
       * that contains the map. 
       */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
        html,
      body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="navbar-brand " style="font-size: 14px;color: blue;" href="#page-top"><img height="60" height="60" src="img/mainlogo.jpg" alt="..."  /><span class="desktop">City Agriculture Office of Sto Tomas, Batangas</span></a>
     <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
      
    <?php
      $vctrn=0;
        $result = mysql_query("SELECT * FROM tblnotification where fldstatus='Not Yet Viewed' order by fldindex");
        while($row = mysql_fetch_array($result))
        {
            //$vctr=$row['fldindex'];
            $vctrn=$vctrn+1;
        }
        
    ?>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- End Search Icon-->
          <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <?php
                if($vctrn!=0)
                {
                ?>
            <span class="badge bg-danger badge-number"><?php echo $vctrn; ?></span>
              <?php
                }
                ?>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                <a onclick="myFunction1()"> <font color=blue>You have <?php echo $vctrn; ?> new notifications</font></a>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php   
            ////////////////////////////////////////////////////////////////////////////////////////////////start
            $result = mysql_query("SELECT * FROM tblnotification where fldstatus='Not Yet Viewed' order by fldindex");
            while($row = mysql_fetch_array($result))
            {
                $vtitle=$row['fldtitle'];
                $vsubtitle=$row['fldsubtitle'];
                $vdate=$row['flddate'];
            ?>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-primary"></i>
              <div>
                <h4><?php echo $vtitle; ?></h4>
                <p><?php echo $vsubtitle; ?></p>
                <p><?php echo $vdate; ?></p>
                 
                 
              </div>
               
            </li>
            <?php
            }
            /////////////////////////////////////////////////////////////////////////////////////////////////end
            ?>
            <li>
              <hr class="dropdown-divider">
            
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#" onclick="myFunction1()">Show all notifications</a>
            <script>
            function myFunction1() {
                window.open("notificationview.php?vuid=<?php echo $vfacode; ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=400,left=300,width=800,height=600");
            }
            </script>
            </li>

          </ul><!-- End Notification Dropdown Items -->
        <!-- End Notification Nav -->

        <!-- End Messages Dropdown Items -->

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/<?php echo $vimage; ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $vlastname.", ".$rest; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $vuser; ?></h6>
              <span><?php echo $vusertype; ?></span>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="lo.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item collapsed">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-people"></i>
          <span>Users
            </span>
        </a>
      </li>
    <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link collapsed " href="dashboard.php">
          <i class="ri ri-dashboard-3-line"></i>
          <span>Dashboard
            </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="adminadmin.php">
          <i class="bi bi-people"></i>
          <span>Users
            </span>
        </a>
      </li>
      </li>    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminbarangays.php">
          <i class="bi bi-shop"></i>
          <span>Barangays</span>
        </a>
      </li>    
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminplantcalendar.php">
          <i class="bi bi-calendar4-range"></i>
          <span>Planting Calendar</span>
        </a>
      </li>    
    <li class="nav-item">
        <a class="nav-link" href="adminheatmapfarmer.php">
          <i class="bi bi-globe2"></i>
          <span>Mapping</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="admininsurance.php">
          <i class="bi bi-journal-bookmark"></i>
          <span>Insurance</span>
        </a>
      </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="adminfeedback.php">
          <i class="bi bi-chat-text"></i>
          <span>Feedback</span>
        </a>
      </li> 
    
        <li class="nav-item">
        <a class="nav-link collapsed" href="adminpagecontent.php">
          <i class="bi bi-aspect-ratio"></i>
          <span>Page Content</span>
        </a>
      </li> 
    <!-- End Dashboard Nav -->

      <!-- End Contact Page Nav -->

      <!-- End Register Page Nav -->

      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>
<!-- End Menu -->
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h5><i class="bi bi-globe2"></i>&nbsp;Mapping</h5> 
      
      <!--<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item bi bi-people">&nbsp;Users / System Administrators</li>
          
        </ol>
      </nav>-->
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">

          
        </div>
            <!-- Sales Card -->
            <!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- End Customers Card -->

            <!-- Reports -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
<div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2D65_pObn_NrKcEMyXFei92m6luBNxJU&callback=initMap&v=weekly"
      defer
    ></script>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>City of Sto. Tomas Batangas</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
	}

?> 
<?php
	}
	else
	{
		
	
		?>
    
        <meta  http-equiv="refresh" content=".000001;url=login.php" />
        <?php 	
	}

?>

