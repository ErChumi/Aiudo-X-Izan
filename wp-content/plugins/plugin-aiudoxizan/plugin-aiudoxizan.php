<?php

	/*
	Plugin Name: Plugin AiudoXIzan
	Plugin URI:
	Description: Modifica el estilo
	Author: Izan Jose Chumillas Rodríguez
	Version: 1
	Author URI:
	*/
	
	add_action('wp_enqueue_scripts' , function(){ 
		wp_register_style('hojaDeEstilos' , plugin_dir_url(__FILE__).'style.css');
		wp_enqueue_style('hojaDeEstilos');
	} , 999);
	
	

?>