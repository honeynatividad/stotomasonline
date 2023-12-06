<?php
require("include/conn.php");
$vcode=$_REQUEST['vuid'];
$vinsurancecode=$_REQUEST['vuid1'];
mysql_query("UPDATE tblinsuranceaccomplish SET fldstatus = 'Verified' WHERE fldcode = '$vcode'");	

$vfarmercode=$_REQUEST['vuid3'];
$vuseremail=$_REQUEST['vuid4'];
$vfemail=$_REQUEST['vuid5'];

$result = mysql_query("SELECT * FROM tbluser where fldcode='$vfarmercode' order by fldindex");
                    while($row = mysql_fetch_array($result))
                    {
                        $vfarmeremail=$row['fldemail'];
                        
                        $vfirstnamex=$row['fldfirstname'];
                        echo $vfarmeremail;
                    }

/////////////////////////////////////////////////
                    $vctr=0;
                    $result = mysql_query("SELECT * FROM tblnotificationf order by fldindex");
                    while($row = mysql_fetch_array($result))
                    {
                        $vctr=$row['fldindex'];
                    }
                
                    
                    $vctr=$vctr+1;
                    $vcode="NOFF".$vctr;
                
                    
                    
                    $result = mysql_query("SELECT * FROM tblinsuranceaccomplish where fldcode='$vinsurancecode' order by fldindex");
                    while($row = mysql_fetch_array($result))
                    {
                        $vinsurancex=$row['fldinsurance'];
                        $vdatex=$row['flddate'];
                    }
                
                    $vtitlex="Insurance Form Verificed";
                    $vsubtitlex="The submitted insurance form has been verified";
                    $vnotificationx="Your submitted insurance form last ".$vdatex." has been verified";
                    
                    $vselectdate=date();
                    $vdatex = new DateTime($vselectdate);
                    $vdate1x = $vdatex->format("Y-m-d");	    
                
                    $sql="INSERT INTO tblnotificationf (fldindex, fldcode, fldtitle, fldsubtitle, fldnotification, flddate, fldstatus, fldsource) VALUES ('$vctr','$vcode','$vtitlex','$vsubtitlex','$vnotificationx','$vdate1x','Not Yet Viewed','Administrator')";
                    if (!mysql_query($sql,$con))
				    {
  						die('error: ' . mysql_error());
  		            }
                    /////////////////////////////////////////////////////////////////////////

                    ////////////////////////////////////email
                                        $to      = $vfemail;
                                        $subject = 'Verified Insurance Form';
                                        $message = 'Dear '.$vfirstnamex."\r\n"."\r\n".'Your submitted insurance form has been verified.'."\r\n"."\r\n".'Thank you.';
                                        $headers = 'From: '.$vuseremail. "\r\n" .
                                        'Reply-To:'.$vuseremail. "\r\n" .
                                        'X-Mailer: PHP/' . phpversion();

                                        mail($to, $subject, $message, $headers);

                                            
                                        ////////////////////////////////////////
                        



?>

<meta  http-equiv="refresh" content=".000001;url=admininsuranceview.php?vuid=<?php echo $vinsurancecode; ?>" />