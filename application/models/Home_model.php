<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function getWoGangguan($kode_cabang, $kode_user){
        return $this->db->query('SELECT mg.*, mp.*
            FROM master_gangguan mg, master_pelanggan mp
            WHERE mg.status_aktif = "YES" 
            AND mg.kode_cabang not in (1)
            AND mg.kode_cabang = "'.$kode_cabang.'"
            AND mg.kode_user = "'.$kode_user.'"
            AND mg.kode_pelanggan = mp.kode_pelanggan
            AND mp.status_aktif = "YES"
            ORDER BY mg.kode_gangguan DESC');
    }
}
?>
