<?php
	if (isset($html)) {
		ob_start();
		require_once("../lib/dompdf/dompdf_config.inc.php");
		 
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		file_put_contents('../facturas/factura'.$facturaid.'.pdf', $dompdf->output());
		$dompdf->stream('factura'.$facturaid.'.pdf');
	}
?>