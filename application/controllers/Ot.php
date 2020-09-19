<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ot extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');	
    //     $ceksesi = $this->db->get_where('chart', array('id_user' => $_SESSION['semi_id']))->result();
    //     $banyak=0;
    //     foreach ($ceksesi as $key => $i) {
    //     $banyak=$banyak+$i->quantity;
    //     }
    //     $data['keranjang']=$banyak;
    //     $this->load->view('dagangan/head',$data);
    // }
    
    public function index()
    {
        $db=$this->db->get('barang')->result();
        $data['db']=$db;
        $this->load->view('ot/galeri',$data);
        // $this->load->view('templates/footer');
    }

}