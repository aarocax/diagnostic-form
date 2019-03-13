<?php


use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;


class dfGeneratePDF {


	public function generate($responses_array, $preguntas, $nivel) {

		try {
		    ob_start();
		    include dirname(__FILE__).'/../templates/report-templates/template01.php';
		    $content = ob_get_clean();
		    $html2pdf = new Html2Pdf('P', 'A4', 'es');
		    $html2pdf->writeHTML($content);
		    $report_name = "file_".md5(microtime().rand()).".pdf";
				if(!is_dir(ABSPATH.'wp-content/uploads/informes_autodiagnostico/')) {
					mkdir(ABSPATH.'wp-content/uploads/informes_autodiagnostico/');
				}
				$html2pdf->output(ABSPATH.'wp-content/uploads/informes_autodiagnostico/'.$report_name,'F');
		    return $report_name;
		} catch (Html2PdfException $e) {
		    $html2pdf->clean();
		    $formatter = new ExceptionFormatter($e);
		    echo $formatter->getHtmlMessage();
		}

	}
}