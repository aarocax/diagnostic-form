<?php


class dfCRM {

	private $dsn;
	private $user;
	private $password;
	private $clientId;
	private $apiKey;
	private $apiSecret;
	private $endpoint;
	private $owner_email;
	public $preguntas;

	function __construct($preguntas) {
		$this->preguntas   = $preguntas;
		$this->dsn         = dfConfig::$dsn;
		$this->user        = dfConfig::$user;
		$this->password    = dfConfig::$password;
		$this->clientId    = dfConfig::$clientId;
		$this->apiKey      = dfConfig::$apiKey;
		$this->apiSecret   = dfConfig::$apiSecret;
		$this->endpoint    = dfConfig::$endpoint;
		$this->owner_email = dfConfig::$owner_email;
	}

	private function send($url, $data) {
		$fp = fopen(dirname(__FILE__).'/errorlog.txt', 'w');
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_STDERR, $fp);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: '.strlen($data)));
		return curl_exec($ch);
	}

	public function sendData($responses_array) {
		// ETIQUETAS
		$tags = Array('ORIG_DIAG');
		$tags[] = $this->preguntas->company_size[$responses_array['company_size_id']]['tag'];
		$tags[] = $this->preguntas->sectors['tipo_negocio'][$responses_array['tipo_negocio_description']][$responses_array['sector_id']]['tag'];
		$tags[] = $this->preguntas->getTipo($responses_array);
		
		$data = array(
			'clientId' => $this->clientId,
			'apiKey' => $this->apiKey,
			'requestTime' => time(),
			'sha' => sha1($this->apiKey . $this->clientId . $this->apiSecret),
			'contact' => array(
				'name' => $responses_array['nombre'],
				'company' => $responses_array['nombre_empresa'],
				'phone' => $responses_array['telefono'],
				'email' => $responses_array['email']
			),
			'properties' => array('mensaje' => 'mensaje'),
			'owner' => $this->owner_email,
			'tags' => $tags // Etiquetas que se van a añadir al cliente, separadas por comas
		);

		$json = json_encode($data); //Codificamos en JSON

		$result =  $this->send('http://' . $this->endpoint . '/api/contact/upsert', $json);
		
		$r1 = json_decode($result); //Recogemos la respuesta de SALESmanago
		return $contact_id = $r1->{'contactId'}; //Sacamos el contactID de SALESmanago asociado al usuario
	}

}