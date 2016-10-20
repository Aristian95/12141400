<?php
	if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
		class Pertama extends CI_Controller {
		
			public function index()
			{
				echo "Belajar CodeIgniter";
			}
			
			public function Kedua($nama,$usia){
				echo "Nama saya {$nama} usia {$usia} <br />";
				$uri ='<ol>';
				$uri.='<li>'.$this->uri->segment(1).'</li>';
				$uri.='<li>'.$this->uri->segment(2).'</li>';
				$uri.='<li>'.$this->uri->segment(3).'</li>';
				$uri.='<li>'.$this->uri->segment(4).'</li>';
				$uri.='</ol>';
				echo $uri;
				
			}
		}
?>			