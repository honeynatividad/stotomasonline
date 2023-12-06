<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2009-09-30
// 
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
// 
// Author: Nicola Asuni
// 
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @copyright 2004-2009 Nicola Asuni - Tecnick.com S.r.l (www.tecnick.com) Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
 * @link http://tcpdf.org
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 2009-03-20
 */

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');
require("include/conn.php");
require_once('tcpdf_include.php');

$valumnicode=$_REQUEST['vuid'];
$result = mysql_query("SELECT * FROM tblalumni where fldcode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
	$vbirhtdate=$row['fldbirthdate'];
    
    $vselectdate=$row['fldbirthdate'];
	$vdatex = new DateTime($vselectdate);
	$vbirthdatec = $vdatex->format("F d, Y");
	
    
	$vname=$row['fldlastname'].", ".$row['fldfirstname']." ".$row['fldmiddlename'];
}
$result = mysql_query("SELECT * FROM tbluser where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
	$vemail=$row['fldemail'];
}
////////////////////general information
$result = mysql_query("SELECT * FROM tblsurveygi where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
	$vtelno=$row['fldtelno'];
	$vcelno=$row['fldcelno'];
    $vregion=$row['fldregion'];
    $vprovince=$row['fldprovince'];
    $vpermanentaddress=$row['fldaddress'].", ".$row['fldcity'].", ".$row['fldprovince'];
    $vlocr=$row['fldlocr'];
    $vcivilstatus=$row['fldcivilstatus'];
    $vgender=$row['fldgender'];
}

///////////////////educational background
$vieb=0;
$result = mysql_query("SELECT * FROM tblsurveyeb where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $arrdegree[$vieb]=$row['flddegree'];
    $arrspecialization[$vieb]=$row['fldspecialization'];
    $arrcollege[$vieb]=$row['fldcollege'];
    $arryearg[$vieb]=$row['fldyearg'];
    $arrhonors[$vieb]=$row['fldhonors'];
    $vieb=$vieb+1;
}


//////////////////professional examination passed
$viex=0;
$result = mysql_query("SELECT * FROM tblsurveypep where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $arrnameofex[$viex]=$row['fldnameofex'];
    $arrdatetaken[$viex]=$row['flddatetaken'];
    $arrrating[$viex]=$row['fldrating'];
    $viex=$viex+1;
}

//////////////////reason for taking the course degree
$vitc=0;
$result = mysql_query("SELECT * FROM tbleducreasontaketemp where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $arrdegreer[$vitc]=$row['flddegree'];
    $arrreasontake[$vitc]=$row['fldreasontake'];
    $arrothersr[$vitc]=$row['fldothers'];
    $vitc=$vitc+1;
}


//////////////////trainings attended after college
$vitr=0;
$result = mysql_query("SELECT * FROM tblsurveytrain where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $arrtraining[$vitr]=$row['fldtraining'];
    $arrduration[$vitr]=$row['fldduration'];
    $arrcredits[$vitr]=$row['fldcredits'];
    $arrinstitution[$vitr]=$row['fldinstitution'];
    $vitr=$vitr+1;
}

//////////////////reason to pursue training advance studies
$virtrain=0;
$result = mysql_query("SELECT * FROM tbleducreasontraintemp where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $arrtrainingre[$vitrain]=$row['fldtraining'];
    $arrreasontrain[$vitrain]=$row['fldreasontrain'];
    $arrothersrt[$vitrain]=$row['fldothers'];
    $vitrain=$vitrain+1;
}

//////////////////employment data
$result = mysql_query("SELECT * FROM tblsurveyemp where fldalumnicode='$valumnicode'");
while($row = mysql_fetch_array($result))
{
    $vemployed=$row['fldemployed'];
    $vemploystat=$row['fldemploystat'];
    $vpresentocc=$row['fldpresentocc'];
    $vcompany=$row['fldcompany'];
    $vaddressco=$row['fldaddress'];
    $vlineofbus=$row['fldlineofbus'];
    $vplaceofwork=$row['fldplaceofwork'];
    $vfirstjobafcol=$row['fldfirstjobafcol'];
    $vfirstjobrel=$row['fldfirstjobrel'];
    $vfirstjobstay=$row['fldfirstjobstay'];
    $vfirstjobfind=$row['fldfirstjobfind'];
    $vfirstjobfindothers=$row['fldfirstjobfindother'];
    $vfirstjobland=$row['fldfirstjobland'];
    $vjobpositionf=$row['fldjobpositionf'];
    $vjobpositionc=$row['fldjobpositionc'];
    $vjobgrossearning=$row['fldjobgrossearning'];
    $vcurirel=$row['fldcurirel'];
    $vimprovecurri=$row['fldimprovecurri'];
    
}

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo_example.jpg';
        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle($vcompanyname);
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

//set some language-dependent strings
$pdf->setLanguageArray($l); 

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 7);

// add a page
$pdf->AddPage('P');
// print a line using Cell()
$pdf->Cell(0, 1, 'Batangas State University', 0, 1, 'L');
$pdf->Cell(0, 5, 'Alumni Tracer Information System', 0, 1, 'L');
$pdf->Cell(0, 4, ' ', 0, 1, 'L');
$pdf->Cell(0, 4, 'Alumni Individual Survey', 0, 1, 'L');
// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

// Set some content to print
$tbl_header = '<table border="1" cellpadding="2" align="center">';

$tbl_footer = '</table>';
$tbl ='';
$tbl1 ='';

$tbl1 .= '<tr style="background-color:#FF0000;color:#FFFFFF;" align="left"><td width="510">' . "General Information" . '</td></tr>';
	  
$tbl .= '<tr align="left"><td width="200">' . "Name" . '</td><td width="310">' . $vname . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Permanent Address" . '</td><td width="310">' . $vpermanentaddress . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Email Address" . '</td><td width="310">' . $vemail . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Telephone or Contact Number" . '</td><td width="310">' . $vtelno . '</td></tr>'; 
$tbl .= '<tr align="left"><td width="200">' . "Mobile Number" . '</td><td width="310">' . $vcelno . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Civil Status" . '</td><td width="310">' . $vcivilstatus . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Gender" . '</td><td width="310">' . $vgender . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Birthdate" . '</td><td width="310">' . $vbirthdatec . '</td></tr>';
$tbl .= '<tr align="left"><td width="200">' . "Region of Origin" . '</td><td width="310">' . $vregion . '</td></tr>';
// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl1 . $tbl .  $tbl_footer, true, false, false, false, '');



// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('Individual Survey', 'I');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
