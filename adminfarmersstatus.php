<?php
require("include/conn.php");
$usercode=$_REQUEST['vuid'];
$status=$_REQUEST['status'];

//get user info
$userdata = mysql_query("SELECT * FROM tbluser WHERE fldcode='$usercode'");
while($row = mysql_fetch_array($userdata)){
    $email = $row['fldemail'];
    $firstname = $row['fldfirstname'];
}
if($status == 'deactivate') {
    $subject = 'Your account has been deactivated';
    $message = 'Dear '.$firstname."\r\n"."\r\n".'Your account has been deactivated. Contact our admin if you want to activate your account.'."\r\n"."\r\n".'Thank you.';
    mysql_query("UPDATE tbluser SET fldstatus = 'Inactive' WHERE fldcode = '$usercode'");	

} else if($status == 'activate') {
    $subject = 'Your account is now active';
    $message = 'Dear '.$firstname."\r\n"."\r\n".'Your account has been activated. Contact our admin if this is not you.'."\r\n"."\r\n".'Thank you.';
    mysql_query("UPDATE tbluser SET fldstatus = 'Active' WHERE fldcode = '$usercode'");	
}


$to      = $email;
$headers = 'From: '.$email. "\r\n" .
'Reply-To:'.$email. "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>

<meta  http-equiv="refresh" content=".000001;url=adminfarmers.php" />