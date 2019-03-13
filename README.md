# diagnostic-form
Pluging Wordpress Formulario diagnośtico multistep

# diagnostic-form
Pluging Wordpress Formulario diagnośtico multistep

Instalación:

.- Descargar o clonar repositorio dentro de wp-content/plugins/
.- Ejecutar composer install
.- Crear clase de configuracion dfConfig.php en el directorio classes/ y definir las propiedades estáticas 

~~~
class dfConfig {
	public static $dsn = "*********";
	public static $user = "**********";
	public static $password = "*********";
	public static $clientId = "************";
	public static $apiKey = "***********";
	public static $apiSecret = "********************";
	public static $endpoint = "**************"
	public static $owner_email = "**************";
}
~~~

.* insertar la siguiente línea **require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/diagnostic-form/templates/content-page-diagnostic-form.php'** en la plantilla donde queremos insertar el fomulario.
