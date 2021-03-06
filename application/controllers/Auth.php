<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('User_model');
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        //$this->output->enable_profiler(TRUE);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->User_model->process_login($username,$password);
        
        if (count($query->result())>0){ 
            foreach ($query->result() as $row)
            {                   
                $this->session->set_userdata("username",$row->username);
                $this->session->set_userdata("nama",$row->nama);
				$this->session->set_userdata("kode_user",$row->kode_user);
                $this->session->set_userdata("kode_cabang",$row->kode_cabang);
                $this->session->set_userdata("kode_akses",$row->kode_akses);
                $this->session->set_userdata("created_at",$row->created_at);
				$this->session->set_userdata("menu",$this->generatemenu());
				 $this->set_hak_akses();
                redirect('home');
            }
        }else{
            $data['msg'] = "Username atau password salah";
            $this->load->view('login',$data);
        }
    }
	
	public function set_hak_akses(){
        $data = $this->User_model->get_hak_akses();
        foreach ($data->result() as $row):
            $this->session->set_userdata($row->kode_menu_child."insert",$row->akses_insert);
            $this->session->set_userdata($row->kode_menu_child."view",$row->akses_view);
            $this->session->set_userdata($row->kode_menu_child."edit",$row->akses_edit);
            $this->session->set_userdata($row->kode_menu_child."delete",$row->akses_delete);
        endforeach;
    }
	
	public function generatemenu(){
		$data = $this->Menu_model->select_header()->result();
		$html = "";
		//print_r($html);
		foreach ($data as $row):
			///echo $row->menu_header;
			$html .= "<li class='treeview'>
                                  <a href='#'><i class='fa fa-link'></i> <span>".$row->menu_header."</span>
                                          <span class='pull-right-container'>
                                            <i class='fa fa-angle-left pull-right'></i>
                                          </span>
                                  </a>
                                  <ul class='treeview-menu'>";
			$submenu = $this->Menu_model->select_child($row->kode_menu_header)->result();
			foreach ($submenu as $rows):
			$html .= "<li><a href='".site_url('/'.$rows->file_php.'')."'>".$rows->menu_name."</a></li>";
			endforeach;
			$html .= "</ul>
                                  </li>";
			//print_r($submenu);
		endforeach;
		return $html;
	}

    public function logout()
    {
        $this->session->sess_destroy();
        $data['msg'] = "Silahkan Login";
        $this->load->view('login',$data); 
    }
}
