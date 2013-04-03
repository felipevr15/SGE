<?php

	class Site extends CI_Controller{
	
	//PRUEBAA
		function __construct(){
			parent::__construct();
			$this->is_logged_in();
			
			
		}
	
		function members_area(){
		
			$this->load->view('home/inicio');	
		}
		
		function ver_perfil(){
		
			$this->load->view('home/ver_perfil');	
		}
		
		function is_logged_in(){
			$is_logged_in=$this->session->userdata('is_logged_in');
			
			if(!isset($is_logged_in) || $is_logged_in != true){
			echo 'tu no tienes permisos para entrar aca'.' <a href="../login">Login</a>';	
			die();
			}
		}
	}
	
?>