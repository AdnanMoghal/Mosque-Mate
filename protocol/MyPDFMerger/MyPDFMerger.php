<?php 
 class MyPDFMerger
 {
	
  var $_sql, $_err;
  // You must give input file path and either new width or new height 
  // You can also give both the new width and height,give new path to save new image
  //
  var $pdf;
  function MyPDFMerger(){
		//echo '12';
		include_once (getConfigValue('lib').'pdfmerge/PDFMerger.php');
		//require_once (getConfigValue('lib').'php_writeexcel/class.writeexcel_workbook.inc.php');
		//require_once (getConfigValue('lib').'php_writeexcel/class.writeexcel_worksheet.inc.php');
		//require_once (getConfigValue('lib').'php_readexcel/reader.php');
		
		
				
	}
	function initPDF() {
		//echo ("initPDF");
		$this->pdf = new PDFMerger;
		
	}
	function addPDF(){
		//echo ("123");
	}
	function mergePDF(){
	
	}
	
	function downloadXls ($file_name, $rmove_also = 0){
		//$this->workbook->close();
		
		header("Content-Type: application/x-msexcel; name=\"$file_name\"");
		header("Content-Disposition: inline; filename=\"$file_name\"");
		
		$fh=fopen($this->fname, "rb");
		fpassthru($fh);
		//unlink($this->fname);
			
	}

 }
?>
