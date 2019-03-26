<?php


function df_ajax_save_form() {

	$base_url = get_site_url()."/wp-content/uploads/informes_autodiagnostico/";

	$nonce = $_POST['nonce'];

	if (!wp_verify_nonce($nonce, 'ajax-post-nonce')) {
		die (' ');
	}

	$responses_array = array();
	parse_str($_POST['data'], $responses_array);

	$business_type_id = $_POST["form_id"]; //tipo negocio (form-empresa-tipo-1 = Comercio / form-empresa-tipo-2 = Industria /  form-empresa-tipo-3 = Servicios
	$sector_id = $responses_array["sector"];
	$company_size_id = $responses_array["tamaño"];

	$dfPreguntas = new dfPreguntas;

	// Sector
	$business_type_name = $dfPreguntas->sectors['codigos'][$business_type_id];
	$sector_name = $dfPreguntas->sectors['tipo_negocio'][$business_type_name][$sector_id]['description'];

	$responses_array['tipo_negocio_id'] = $business_type_id;
	$responses_array['tipo_negocio_description'] = $business_type_name;

	$responses_array['sector_id'] = $sector_id;
	$responses_array['sector_description'] = $sector_name;

	// tamaño
	$company_size_description = $dfPreguntas->company_size[$company_size_id]['description'];
	$responses_array['company_size_id'] = $company_size_id;
	$responses_array['company_size_description'] = $company_size_description;


	$puntuacion = $dfPreguntas->getPuntuacion($responses_array);
	$nivel = $dfPreguntas->getNivel($puntuacion);


	/**********************************
	 * Send data to salesmanago
	 **********************************/
	$dfCRM = new dfCRM(new $dfPreguntas);

	$contact_id = $dfCRM->sendData($responses_array);

	if ($contact_id) {
		saveInDataBase($responses_array, $contact_id);
		$dfGeneratePDF = new dfGeneratePDF;
		$pdf_file_url = $dfGeneratePDF->generate($responses_array, $dfPreguntas->preguntas, $nivel);
		$email_response = sendMail($responses_array["email"], $base_url.$pdf_file_url);
	}
	
	echo 'llamada OK...'.$contact_id." - ".$email_response;

	die();
}

add_action('wp_ajax_df_ajax_save_form', 'df_ajax_save_form');
add_action('wp_ajax_nopriv_df_ajax_save_form', 'df_ajax_save_form' );




/**********************************
 * Save data in DDBB
 **********************************/
function saveInDataBase($responses_array, $contact_id) {
	
	$date = new DateTime();

	$empresa = array(
		'creation_date'	=> $date->format('Y-m-d H:i:s'),
		'contact_id'    => $contact_id,
		'name'	  			=> $responses_array["nombre"],
		'company'				=> $responses_array["nombre_empresa"],
		'sector'				=> $responses_array['sector_description'],
		'tipo_negocio'	=> $responses_array['tipo_negocio_description'],
		'company_size'	=> $responses_array['company_size_description'],
		'email'					=> $responses_array["email"],
		'phone'					=> $responses_array["telefono"],
		'score'					=> $puntuacion
	);

	$dfDAO = new dfDAO;
	return $dfDAO->insert($empresa);
}


/**********************************
 * Send email
 **********************************/

function sendMail($email, $pdf_file_url) {
	$to = $email;
	$headers = array('Content-Type: text/html; charset=UTF-8','From: Ticnegocios <ticnegocios@camaravalencia.com>');
	$subject = 'Informe madurez digital';
	$body = '<table style="background:#f3f3f3;width:100%;"><tr><td><table width="600" style="margin:0 auto;background:white;padding:20px;"><tr style="padding:20px 0"><td style="text-align:right;"><img src="https://ticnegocios.camaravalencia.com/wp-content/themes/espaciotic/images/logo-camara-valencia.png" alt="" height="50"></td></tr><tr style="background:#264875;padding:20px 0;"><td><img src="https://ticnegocios.camaravalencia.com/wp-content/themes/espaciotic/images/logo.png" alt=""></td></tr><tr><td><p>¡Te damos la enhorabuena por hacer tu auto-diagnóstico de madurez digital! Eso significa que quieres ser más competitivo en el mercado y conducir tu negocio hacia la innovación.</p>';
	$body .= '<p>Puedes descargar tu informe de auto-diagnóstico aquí:</p>';
	$body .= '<p style="text-align:center;padding:20px;"><a style="text-decoration:none;padding:10px 20px;background:#264875;color:#ffffff;" href='.$pdf_file_url.'>Descarga tu informe</a></p>';
	$body .= '<p>Si deseas obtener un diagnóstico ampliado y asesoría para llevar a cabo tu proyecto de transformación digital, contacta con nuestros consultores por el teléfono 963 10 39 24 o envía un mensaje a <a href="mailto:oficinadigital@camaravalencia.com">oficinadigital@camaravalencia.com.</a> Por un tiempo limitado estaremos ofreciendo consultoría y la elaboración de un plan personalizado de digitalización sin ningún coste.</p>';
	$body .= '<p>¿A qué esperas? ¡Hazte Digital!</p>';
	$body .= '</td></tr></table></td></tr></table>';
	
	
 
	$result = wp_mail( $to, $subject, $body, $headers );

	return "email enviado: ".$result."<br>";
}