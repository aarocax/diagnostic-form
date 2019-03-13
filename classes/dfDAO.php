<?php


class dfDAO {

  private static function _table() {
    global $wpdb;
    $tablename = "formulario_diagnostico";
    return $wpdb->prefix . $tablename;
  }

	function install() {
		global $wpdb;

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
       
        $charset_collate = $wpdb->get_charset_collate();

        $table_name = $wpdb->prefix.'formulario_diagnostico';

        if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        	$sql = "CREATE TABLE ".$table_name." (
                    id int(11) NOT NULL AUTO_INCREMENT,
                    creation_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
                    contact_id VARCHAR(100) DEFAULT '' NOT NULL,
                    name VARCHAR(250) DEFAULT '' NOT NULL,
                    company VARCHAR(250) DEFAULT '' NOT NULL,
                    sector VARCHAR(100) DEFAULT '' NOT NULL,
                    tipo_negocio VARCHAR(100) DEFAULT '' NOT NULL,
                    company_size VARCHAR(100) DEFAULT '' NOT NULL,
                    email VARCHAR(250) DEFAULT '' NOT NULL,
                    phone VARCHAR(20) DEFAULT '' NOT NULL,
                    score INT(2) DEFAULT 0,
                    UNIQUE KEY id (id)
                )".$charset_collate.";";

          dbDelta( $sql );
        }
	}

  static function insert( $data ) {
    global $wpdb;
    return $wpdb->insert( self::_table(), $data );
  }

}