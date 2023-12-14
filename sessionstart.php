<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array(); 

session_start();
 
require("include/conn.php");
$vem=$_REQUEST['vuid'];
//////////////////
if($vem=='') {
?>
<meta  http-equiv="refresh" content=".000001;url=login.php" /><title>Login</title>
<?php
}
$vs=0;
$_SESSION['views']="a";
$result = mysql_query("SELECT * FROM tblusertemp where fldemail='$vem'");
	while($row = mysql_fetch_array($result))
	{
		$vemail=$row['fldemail'];	
		$_SESSION['views']=$row['fldemail'];	
 	}
	$result = mysql_query("SELECT * FROM tbluser where fldusername='$vemail'");
	while($row = mysql_fetch_array($result))
	{
		$vusertype=$row['fldusertype'];	
		$vs=1;
		
 	}
	if($vs==0)
	{
		$_SESSION['views']="a";
	}
	echo $vem;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php ////condition 
    echo $vusertype;
if($vusertype=="System Administrator")
{
    //////////////////////////////////////////////////////
        $vselectdate=date();
        $vdatex = new DateTime($vselectdate);
        $vyearnotif = $vdatex->format("Y");	
        
        $vforexpire=0;
        $result = mysql_query("SELECT * FROM tblseedplanted where fldyield!='0' && fldstatus!='Retired'");
		while($row = mysql_fetch_array($result))
		{
            $vselectdate=$row['flddateplanted'];			
            $vdatex = new DateTime($vselectdate);
            $vyearplanted = $vdatex->format("Y");	
            if($vyearplanted<$vyearnotif)
            {
                $vforexpire=1;
            }
 		}
        if($vforexpire==1)
        {
            /////////////////////////////////////////////////
                    $vctr=0;
                    $result = mysql_query("SELECT * FROM tblnotification order by fldindex");
                    while($row = mysql_fetch_array($result))
                    {
                        $vctr=$row['fldindex'];
                    }
                
                    
                    $vctr=$vctr+1;
                    $vcode="NOTF".$vctr;
                
                    
                    
                    
                
                    $vtitlex="Subject for Transaction Retirement";
                    $vsubtitlex="There are transactions that are needed to retire";
                    $vnotificationx="This is to notify you that there are possible transactions from the year ".$vyearplanted." that needs to retire.";
                    
                    $vselectdate=date();
                    $vdatex = new DateTime($vselectdate);
                    $vdate1x = $vdatex->format("Y-m-d");	    
                
                    $sql="INSERT INTO tblnotification (fldindex, fldcode, fldtitle, fldsubtitle, fldnotification, flddate, fldstatus, fldsource) VALUES ('$vctr','$vcode','$vtitlex','$vsubtitlex','$vnotificationx','$vdate1x','Not Yet Viewed','Farmer')";
                    if (!mysql_query($sql,$con))
				    {
  						die('error: ' . mysql_error());
  		            }
                    /////////////////////////////////////////////////////////////////////////

        }
        
        ///////////////////////////////////////////////////////
    
?>
    
<meta  http-equiv="refresh" content=".000001;url=dashboard.php" /><title>Untitled Document</title>
<?php 
}
if($vusertype=="Farmer")
{
?>
<meta  http-equiv="refresh" content=".000001;url=farmdashboard.php" /><title>Untitled Document</title>
<?php 
}
if($vusertype=="City Agriculture Personnel")
{
?>   
<meta  http-equiv="refresh" content=".000001;url=dashboard.php" /><title>Untitled Document</title>
<?php
}
////end condition ?>


</head>


<body>
</body>
</html>