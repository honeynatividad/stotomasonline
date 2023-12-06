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

//////////////////////////////////////////////////////////////////
$vselectdate=Date("Y-m-d");
$vdatex = new DateTime($vselectdate);
$vdatep = $vdatex->format("Y-m-d");
$vdatesw = $vdatex->format("F d Y");	


$vcropscategoryx=$_REQUEST['txtcropscategory'];
$vbarangayx=$_REQUEST['txtbarangay'];

$vselectdate=$_REQUEST['txtstartingdate'];
$vdatex = new DateTime($vselectdate);
$vstartingdate = $vdatex->format("Y-m-d");
$vstartingdatew = $vdatex->format("F d Y");	

$vselectdate=$_REQUEST['txtendingdate'];
$vdatex = new DateTime($vselectdate);
$vendingdate = $vdatex->format("Y-m-d");
$vendingdatew = $vdatex->format("F d Y");	



$vi=0;

if($vbarangayx=="All")
{
$result = mysql_query("SELECT * FROM tblseedrequested where flddaterequested>='$vstartingdate' && flddaterequested<='$vendingdate' order by fldindex");
}
else
{
$result = mysql_query("SELECT * FROM tblseedrequested where fldlocation='$vbarangayx' && flddaterequested>='$vstartingdate' && flddaterequested<='$vendingdate' order by fldindex");

}
while($row = mysql_fetch_array($result))
{
    $arrbarangay[$vi]=$row['fldlocation'];
    $arrdaterequested[$vi]=$row['flddaterequested'];
    $arrstatus[$vi]=$row['fldstatus'];
    $arrrequestedqty[$vi]=$row['fldrequestedqty'];
    
    $vrequestedbycode=$row['fldrequestedby'];   
    $result1 = mysql_query("SELECT * FROM tbluser where fldcode='$vrequestedbycode'");
    while($row1 = mysql_fetch_array($result1))
    {  
        $arrrequestedby[$vi]=$row1['fldlastname'].", ".$row1['fldfirstname']." ".$row1['fldmiddlename'];
    }   
    
    $vrequestedseedcode=$row['fldrequestedseed'];
    $result1 = mysql_query("SELECT * FROM tblcrops where fldcode='$vrequestedseedcode'");
    while($row1 = mysql_fetch_array($result1))
    {  
        $arrcrops[$vi]=$row1['fldcrops'];
        $arrcropscategory[$vi]=$row1['fldcropscategory'];
    }   
    
    /////////////////////////////////////
    
    $vi=$vi+1;                              
}

//////////////////////////////////////////////////////////////////

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

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 7);

// add a page
$pdf->AddPage('P');
// print a line using Cell()
$pdf->Cell(0, 1, 'Sto. Tomas City Agricultural Mapping Web Portal', 0, 1, 'L');
$pdf->Cell(0, 4, 'Seed Request Report ', 0, 1, 'L');
$pdf->Cell(0, 4, 'Barangay: '.$vbarangayx, 0, 1, 'L');
$pdf->Cell(0, 4, 'Classification: '.$vcropscategoryx, 0, 1, 'L');
$pdf->Cell(0, 4, 'Inclusive Dates: '.$vstartingdatew." - ".$vendingdatew, 0, 1, 'L');
$pdf->Cell(0, 4, 'Date Printed: '.$vdatesw, 0, 1, 'L');
$pdf->Cell(0, 4, ' ', 0, 1, 'L');

// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

// Set some content to print
$tbl_header = '<table border="1" cellpadding="2" align="center">';

$tbl_footer = '</table>';
$tbl ='';
$tbl1 ='';



///////////////////////////////////////////// 


$tbl1 .= '<tr style="background-color:#336bff;color:#FFFFFF;" align="center"><td width="20">' . "#" . '</td><td width="120">' . "Requested By" . '</td><td width="90">' . "Barangay" . '</td><td width="100">' . "Seed Requested" . '</td><td width="40">' . "Quantity" . '</td><td width="70">' . "Date Requested" . '</td><td width="70">' . "Status" . '</td></tr>';	 

$viii=0;
$vctr=1;
$vi=$vi-1;
while($viii<=$vi)
{
    if($vcropscategoryx=="All")
    {
    
    $tbl .= '<tr align="left"><td width="20" align="center">' . $vctr . '</td><td width="120">' . $arrrequestedby[$viii] . '</td><td width="90">' . $arrbarangay[$viii] . '</td><td width="100" align="center">' . $arrcrops[$viii]. '</td><td width="40" align="center">' . $arrrequestedqty[$viii] . '</td><td width="70" align="center">' . $arrdaterequested[$viii] . '</td><td width="70">' . $arrstatus[$viii] . '</td></tr>';
    }
    if($vcropscategoryx!="All")
    {
        if($arrcropscategory[$viii]==$vcropscategoryx)
        {
    $tbl .= '<tr align="left"><td width="20" align="center">' . $vctr . '</td><td width="120">' . $arrrequestedby[$viii] . '</td><td width="90">' . $arrbarangay[$viii] . '</td><td width="100" align="center">' . $arrcrops[$viii]. '</td><td width="40" align="center">' . $arrrequestedqty[$viii] . '</td><td width="70" align="center">' . $arrdaterequested[$viii] . '</td><td width="70">' . $arrstatus[$viii] . '</td></tr>';
        }
    }
    $viii=$viii+1;
    $vctr=$vctr+1;
}


// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl1 . $tbl .  $tbl_footer, true, false, false, false, '');


// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('Seed Request Report', 'I');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
