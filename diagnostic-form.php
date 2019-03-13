<?php

/*
Plugin Name: Formulario diagnóstico
Plugin URI: http://aticsoft.com
Description: Formulario diagnóstico para cámara de Valencia
Version: 1.0.0
Author: MetricSalad
Text Domain: diagnostic_form
*/


 
require_once __DIR__ . '/vendor/autoload.php';

if( ! defined( 'ABSPATH' ) ) exit;


include_once dirname( __FILE__ ) . '/classes/dfConfig.php';
include_once dirname( __FILE__ ) . '/classes/dfDAO.php';
include_once dirname( __FILE__ ) . '/classes/dfPreguntas.php';
include_once dirname( __FILE__ ) . '/classes/dfGeneratePDF.php';
include_once dirname( __FILE__ ) . '/classes/dfCRM.php';
include_once dirname( __FILE__ ) . '/diagnostic-form-ajax-calls.php';



$dfDAO = new dfDAO();


register_activation_hook(__FILE__, array($dfDAO, 'install' ) );


function df_scripts() {

	wp_enqueue_style( 'jquery-ui-css', plugins_url( '/css/styles.css', __FILE__ ), false,'1.1','all');

	wp_enqueue_script( 'diagnostic-form-js', plugins_url( '/js/scripts.js', __FILE__ ), array('jquery'), '20190205', true );

	wp_localize_script('diagnostic-form-js', 'PT_Ajax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ajax-post-nonce'))
	);
}

add_action( 'wp_enqueue_scripts', 'df_scripts' );


