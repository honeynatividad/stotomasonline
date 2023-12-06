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
            $vfarmercodex=$row['fldcode'];			
 		}
  ?>    


<!DOCTYPE html>
<html lang="en">

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
<link href="scroll.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <!-- End Logo -->

    
    
      <div class="pagetitle" align=left>
          <font color="blue">Welcome to Online Chat</font>
      
      
    
    </div><!-- End Page Title -->
    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->

  <main id="main" class="main">

    <!-- End Page Title -->
      <script>
        function fSave1()
        {
            document.frm["txt1"].value=1;
            
										
        }
      </script>
        <?php
        
        
        $vtest=0;
								
        ///////////////////////////////////
        $vtestx=$_POST['txt1'];
        //
        
        if($vtest==0)
        {
            if($vtestx==1)
            {
                $vctr=0;
                $result = mysql_query("SELECT * FROM tblchatfarmer order by fldindex");
                while($row = mysql_fetch_array($result))
                {
                    $vctr=$row['fldindex'];
                }
                $vctr=$vctr+1;
                $vcodex="CHAT".$vctr;
                
                //$vcodex=$_POST['txtcode'];
                $vchatx=$_POST['txtchat'];
                
                $sql="INSERT INTO tblchatfarmer (fldindex, fldcode, fldfarmercode, fldchat) VALUES ('$vctr','$vcodex','$vfarmercodex','$vchatx')";

				    if (!mysql_query($sql,$con))
				    {
  						die('error: ' . mysql_error());
  		            }
                
                $vfound=0;
                $result = mysql_query("SELECT * FROM tblchatbot WHERE upper(fldchat) LIKE'%$vchatx%'") ;
				while($row = mysql_fetch_array($result))
				{
                    $vfound=1;
				    $vresponsecode=$row['fldresponse'];	
				}
                
                $result = mysql_query("SELECT * FROM tblchatbotresponse WHERE fldindex='$vresponsecode'") ;
				while($row = mysql_fetch_array($result))
				{
				    $vresponse=$row['fldresponse'];	
				}
                if($vfound==0)
                {
                    $vresponse="Ipagpaumanhin nyo po. Baka po pwedeng maulit ang inyong katanungan. Salamat po.";
                }
                mysql_query("UPDATE tblchatfarmer SET fldresponse = '$vresponse' WHERE fldcode = '$vcodex'");		
                
                
                
            }
            
        } 
        
        ?>
      
      
      
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">

          <!-- Card with header and footer -->
          <div class="card">
            
            <div class="card-body container">
                
                <!-- Table with stripped rows -->
              <table class="table table-borderless">
                
                <tbody>
                     <?php 
				        $vcounter=1;
				        $result = mysql_query("SELECT * FROM tblchatfarmer where fldfarmercode='$vfarmercodex' order by fldindex asc");
				        while($row = mysql_fetch_array($result))
				        {
                            $vresponsex=$row['fldresponse'];  
				        ?>
                  <tr>
                    <td align=right>
                        <?php echo $row['fldchat']; ?>
                        &nbsp;&nbsp;
                        <img height="20" width="20" src="assets/img/<?php echo $vimage; ?>">  
                    </td>
                     
                  </tr>
                <?php
                 if($vresponsex!="")
                 {
                ?>
                 <tr>
                    
                    <td align=left>
                        <img height="20" width="20" src="assets/img/mainlogo.jpg">  
                        &nbsp;&nbsp;
                        <?php echo $vresponsex; ?>
                        
                        
                    </td>   
                  </tr>   
                <?php
                 }
                    ?>
                    
                    <?php
                        $vcounter=$vcounter+1;
                        }
                    ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->  
              
            </div>
            <div class="card-footer">
                <form action="farmchat.php" name="frm" class="row g-3 needs-validation" id="block-validate" method="post" novalidate>
                    <input type="hidden" name="txt1" id="txt1">
                    <input type="hidden" name="txtpost" id="txtpost">
                    
                    <input type="hidden" name="txtcode" id="txtcode" value="<?php echo $vcodex; ?>">
                    
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="" name="txtchat" >
                        
                    </div>
                    <div align=center>
                        <button class="btn btn-primary btn-sm" type="submit" onClick="fSave1()">Send</button>
                  
                    </div>
                </form>
            </div>
              
          </div><!-- End Card with header and footer -->


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

  <!-- ======= Footer ======= -->
 <!-- End Footer -->

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
    
        <meta  http-equiv="refresh" content=".000001;url=http://localhost/stotomas/index.php" />
        <?php 	
	}

?>

