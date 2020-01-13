<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }
    
    function process_login($username, $password){   
        //$this->output->enable_profiler(TRUE);
        $sql = "SELECT * FROM master_user_login WHERE username =? AND password= md5(?) AND status_aktif='YES'";
        $result = $this->db->query($sql, array($username, $password));
        return $result;
    }
	
	function get_hak_akses(){
        return $this->db->query("SELECT l.kode_menu_level, l.kode_akses, l.kode_menu_child, l.akses_insert, l.akses_view, l.akses_edit, l.akses_delete
                                 from menu_level l, master_user_login u
                                 where l.kode_akses = u.kode_akses and
                                       u.username = '".$_SESSION['username']."'");
    }

    function tampil_data(){
		if (($_SESSION['kode_cabang'] == 1) || ($_SESSION['kode_cabang'] == 2))
		{
        return $this->db->query('SELECT u.kode_user, u.kode_akses, 
                u.kode_cabang, u.username, u.nama, u.password, u.status_aktif, a.hak_akses, c.nama_cabang
                FROM master_user_login u, menu_hak_akses a, master_cabang c
                WHERE u.kode_akses = a.kode_akses AND u.kode_cabang = c.kode_cabang
				AND u.status_aktif = "YES"
				AND u.kode_cabang not in (1,2)
				ORDER BY u.kode_user DESC');
		}
		else
		{
		$kode_cabang = $_SESSION['kode_cabang'];
		 return $this->db->query('SELECT u.kode_user, u.kode_akses, 
                u.kode_cabang, u.username, u.nama, u.password, u.status_aktif, a.hak_akses, c.nama_cabang
                FROM master_user_login u, menu_hak_akses a, master_cabang c
                WHERE u.kode_akses = a.kode_akses AND u.kode_cabang = c.kode_cabang
				AND u.status_aktif = "YES"
				AND u.kode_cabang not in (1,2)
				AND u.kode_cabang = '.$kode_cabang.'
				ORDER BY u.kode_user DESC');
		}
    }

    function get_data_user(){
        $sql = "SELECT u.kode_user, u.kode_akses, 
                u.kode_cabang, u.username, u.nama, u.password, u.status_aktif, a.hak_akses, c.nama_cabang
                FROM master_user_login u, menu_hak_akses a, master_cabang c
                WHERE u.kode_akses = a.kode_akses AND u.kode_cabang = c.kode_cabang
                AND u.status_aktif = 'YES'
                AND u.kode_user = '".$_SESSION['kode_user']."'
                ORDER BY u.kode_user DESC";
        return $this->db->query($sql);
    }

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_user',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_user',$where);
        $this->db->update($table,$data);
        return true;
    }
}
?>
