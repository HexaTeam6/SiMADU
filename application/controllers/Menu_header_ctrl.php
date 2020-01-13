  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_header_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('Menu_header_model');
    }

    public function index()
    {
        if(isset($_SESSION['username'])){
			$data['data'] = $this->Menu_header_model->tampil_data()->result();
        	$this->load->view('Menu_header_view',$data);
		}
		else{
			redirect(site_url().'/Auth/logout');
		}
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_menu_header = $this->input->post('kode_menu_header');
        $menu_header = $this->input->post('menu_header');
        $data = array(
                'menu_header' => $menu_header
                );
        if ($this->input->post('action')=="add"){
            $this->Menu_header_model->input_data($data, 'menu_header');	
            $this->session->set_flashdata('msg', 'Berhasil Simpan');
        }else{
            $this->Menu_header_model->update_data($data, 'menu_header', $kode_menu_header);	
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
	redirect(site_url() . '\Menu_header_ctrl');
    }
	
	public function inactive()
    {
        $this->output->enable_profiler(TRUE);
		$data = array('status_aktif' => 'NO');
        $kode_menu_header_delete = $this->input->post('kode_menu_header_delete');
		$this->Menu_header_model->inactive_data($data,'menu_header',$kode_menu_header_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Menu_header_ctrl');
	}
}
?>
