<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        if(isset($_SESSION['username'])){
            $data['today']       = $this->Home_model->get_today_gangguan()->row();
            $data['monthly']     = $this->Home_model->get_monthly_gangguan()->result();
            $data['total']       = $this->Home_model->get_total_gangguan()->row();
            $data['unit']        = $this->Home_model->get_unit_gangguan()->result();
			$this->load->view('home', $data);
		}
		else{
			redirect(site_url().'/Auth/logout');
		}
    }

}
