<?php

	class Client extends CI_Controller {
			
	public function index( $area = 'client', $page = 'clientprofilesummary') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->clientsearch();
		
	}
	
	
	public function clientprofilesummary( $area = 'client', $page = 'clientprofilesummary', $layout= '_ClientLayoutView', $topnavtab = 'client') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}		
		
		if (isset($_COOKIE['user'])) {			
			$user = $_COOKIE['user'];
			if ($user == 'publicuser') {
				$layout = '_ClientLayoutView_CP';	
				
				$data['layout'] = $layout;
				$data['area'] = $area;
				$data['page'] = $page;
				$this->load->helper('url');
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
				$this->load->view("shared/_MasterLayout_CP.php", $data);
				
			} else if ($user == 'admin') {					
				$data['layout'] = $layout;
				$data['page'] = $page;
				$data['area'] = $area;		
				$data['topnavtab'] = $topnavtab;
				$this->load->helper('url');		
				$data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
				$this->load->view("shared/_MasterLayout.php", $data);
			};
		} else {
			$this->load->helper('url');
			$url = base_url().'index.php';
			header( "Location: $url" );	
		}
		
	}
	
}