<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Dashboard';
	}

	public function index()
	{
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index');
        $this->load->view('templates/footer');
	}

  
}

