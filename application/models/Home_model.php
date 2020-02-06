<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function get_total_gangguan(){
        if($_SESSION['kode_akses'] == 1 || $_SESSION['kode_akses'] == 6){
            return $this->db->query('SELECT 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].') AS total, 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND status_wo = "Selesai") AS selesai');
        }else{
            return $this->db->query('SELECT 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND kode_user = '.$_SESSION['kode_user'].') AS total, 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND kode_user = '.$_SESSION['kode_user'].'
                AND status_wo = "Selesai") AS selesai');
        }
    }

    function get_today_gangguan(){
        if($_SESSION['kode_akses'] == 1 || $_SESSION['kode_akses'] == 6){
            return $this->db->query('SELECT 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND DATE(created_at) = CURDATE()) AS total, 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND status_wo = "Selesai"
                AND DATE(created_at) = CURDATE()) AS selesai');
        }else{
            return $this->db->query('SELECT 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND kode_user = '.$_SESSION['kode_user'].'
                AND DATE(created_at) = CURDATE()) AS total, 
                (SELECT COUNT(*) FROM master_gangguan 
                WHERE status_aktif = "YES" 
                AND kode_cabang NOT IN (1)
                AND kode_cabang = '.$_SESSION['kode_cabang'].'
                AND kode_user = '.$_SESSION['kode_user'].'
                AND status_wo = "Selesai"
                AND DATE(created_at) = CURDATE()) AS selesai');
        }
    }

    function get_monthly_gangguan(){
        if($_SESSION['kode_akses'] == 1 || $_SESSION['kode_akses'] == 6){
            return $this->db->query('Select month(created_at) as bulan, count(*) as jumlah 
                from master_gangguan 
                where status_aktif = "Yes"
                and kode_cabang = '.$_SESSION['kode_cabang'].'
                group by month(created_at)');
        }else{
            return $this->db->query('Select month(created_at) as bulan, count(*) as jumlah 
                from master_gangguan 
                where status_aktif = "Yes"
                and kode_cabang = '.$_SESSION['kode_cabang'].'
                and kode_user = '.$_SESSION['kode_user'].'
                group by month(created_at)');
        }
    }

    function get_unit_gangguan(){
        return $this->db->query('SELECT mul.`nama`, COUNT(mg.`kode_user`) as jumlah FROM master_user_login mul, master_gangguan mg
                WHERE mg.`kode_user` = mul.`kode_user`
                AND mg.`kode_cabang` = '.$_SESSION['kode_cabang'].'
                AND mg.`status_aktif` = "Yes"
                GROUP BY mg.`kode_user`');
    }
}
?>
