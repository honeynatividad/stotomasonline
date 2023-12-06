    <?php
require("include/conn.php");
     if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                 //$sql = "INSERT into tblusers (fldindex, fldcode, fldlastname, fldfirstname, fldmiddlename, fldusertype, fldemail, fldimage,  fldpassword, fldusername,  fldstatus, fldlocation,fldlotarea, fldgender) 
                      // values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."')";
                   //    $result = mysqli_query($con, $sql);*/
                    
                    $sql="INSERT INTO tbluser (fldindex, fldcode, fldemail, fldlastname, fldfirstname, fldmiddlename, fldlocation, fldlotarea,  fldgender, fldusertype,  fldimage, fldpassword,fldstatus, fldusername) 
                    VALUES ('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$getData[6]','$getData[7]','$getData[8]','$getData[9]','$getData[10]', '$getData[11]', '$getData[12]', '$getData[13]')";

				    if (!mysql_query($sql,$con))
				    {
  						die('error: ' . mysql_error());
  		            }
                  
                
            if(!isset($result))
            {
            //  echo "<script type=\"text/javascript\">
            //      alert(\"Invalid File: Please Upload CSV File.\");
            //      window.location = \"adminimportfarmers.php\"
            //      </script>";    
            }
            else {
            //    echo "<script type=\"text/javascript\">
            //    alert(\"CSV File has been successfully Imported.\");
            //    window.location = \"adminfarmers.php\"
            //  </script>";
            }
               }
          
               fclose($file);  
         }
      }   
?>
                    <script>
				    alert("Import Successfull.");	
				    </script>   
    		          <meta  http-equiv="refresh" content=".000001;url=adminfarmers.php" />
            	       <?php   
     ?>