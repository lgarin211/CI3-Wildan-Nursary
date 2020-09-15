<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dagang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');	
	}

	


    // Create    
    public function cone()
    { 	$ting['title'] = 'Dashboard';
		$ting['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $ting);
        $this->load->view('templates/sidebar', $ting);
        $this->load->view('templates/topbar', $ting);
        // $this->load->view('admin/index', $ting);
        $this->cek();
        if (!$_POST==null) {
            // var_dump($_POST);die;
            $data=$_POST;
            $paket = array(
                'nama_produk' => $data['name'],
                'banyak_produk' => $data['banyak'],
                'deskripsi' => $data['deskripsi'],
                'harga' => $data['harga'],
                'img_link' => 'oxana_janerova.jpg'
                );
                
            $this->db->insert('barang', $paket);
            // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
            // $this->load->view('welcome_message');
            redirect('dagang/cone');
        } else {
            $this->load->view('dagangan/new_produk');
            // $this->load->view('templates/footer');
		}
		
        $this->load->view('templates/footer');
    
    }

    public function ctwo()
    {
        $this->load->view('welcome_message');
    }


    // Read
    public function kirim()
    {

        // var_dump($link);
        # code...
    }
    public function beli()
    {

        if ($_POST==null) {
            $id=$_GET['id'];
            $query1 = $this->db->get_where('barang', array('id' => $id))->result();
            $query = $this->db->get_where('barang', array('id' => $id))->num_rows();
            $data['one']=$query;
            $data['two']=$query1;
            $this->load->view('dagangan/cekout',$data);
        }else {
            $link=$_POST;
            $data['link']=$link;
            $i=0;
            foreach ($link as $key => $tg) {
                // $img[$key]=
                // $tg[]
                // echo $tg;
                // var_dump($tg);
            }
            // echo $link['gambarid0'];
            // var_dump($link);
            // die;
            $this->load->view('templates/header', $data);
            $this->load->view('dagangan/cekout2',$data);
            $this->load->view('templates/footer');
        }


    }

    public function cek()
    {
        $query = $this->db->get('barang')->result();
        
        foreach ($query as $row) {
			$data['one']=$row;
			$img=$row->img_link;
            if ($img=='oxana_janerova.jpg') {
                $this->load->view('dagangan/img_p', $data);
                // break;
            }
        }
    }

    public function manycek()
    {
       if (!$_GET==null) {
            # code...
            $i=0;
            foreach ($_GET as $key => $d) {
               // var_dump($d);
               $ping[$key]=$isi = $this->db->get_where('barang', array('id' => $d))->result();
               $i++;
            }
            $data['one']=$i;
            $data['isi']=$ping;
            // $['isi']=$ping;
            $this->session->set_userdata('cekout', $ping);
           $this->load->view('dagangan/cekout4', $data, FALSE);
        }

        // var_dump($data);
        if (!$_POST==null) {
            $a=$_SESSION['cekout'];
            $link=$_POST;
            $data['link']=$link;
            $data['p']=$a;
            $i=0;
            // foreach ($link as $key => $tg) {
            //     // $img[$key]=
            //     // $tg[]
            //     echo $tg;
            //     // var_dump($tg);
            // }
            // echo $link['gambarid0'];
            // var_dump($link);
            // die;
            $this->load->view('templates/header', $data);
            $this->load->view('dagangan/cekout5',$data);
            $this->load->view('templates/footer');
        } 
    }
        public function hapus()
        {
            $this->db->where('item', $_GET['idbarang']);
            $this->db->where('id_user', $_GET['sesi']);
            $this->db->delete('chart');
            redirect('/dagang/keranjang');
        }

    public function keranjang()
    {
        $isi = $this->db->get_where('chart', array('id_user' => $_SESSION['semi_id']))->result();
     if ($isi==null) {
        redirect('/');
     }else{
         foreach ($isi as $key => $i) {
             $ping[$key]=$isi = $this->db->get_where('barang', array('id' => $i->item))->result();
         }
        

         $data['isi']=$ping;
         // echo $data;
        //  var_dump($data);die;
         $this->load->view('dagangan/kall', $data);
     }

    }
    public function setse()
    { 

        if ($_SESSION['semi_id']==null) {
        $dam = $this->db->get('asess')->num_rows();
        // var_dump($dam);die;
        if ($dam==0) {
            // $data['sas']=0;    
            $this->session->set_userdata('semi_id', 1);
        }else{
            $this->session->set_userdata('semi_id', $dam+1);}
            redirect('/');        
        }else{
            redirect('/');        
            // var_dump($_SESSION['semi_id']);die;

        }


    }
    public function rtree($get)
    {
        
        $data=$this->db->get('barang')->result_array();
        $data2=[];
        foreach ($data as $key1 => $k) {
            // var_dump($k);
            $a=$k['kategory'];
            $b=explode(',',$a);
           foreach ($b as $key2 => $lang) {
               $no1=$lang;
               $no2=$get;
               if ($no1==$no2) {
                   $data2[$key1]=$k;
               }
           }
        }
        // var_dump($data2);die;
     
return $data2;

    }
    public function Rone()
    {       
// $this->session->semiid($dam);
if ($_SESSION['semi_id']==null) {
    // var_dump($_SESSION);die;
    redirect('dagang/setse');
}
$data['sas']=$_SESSION['semi_id'];

if (!$_POST==null) {
    $ceksemi = $this->db->get_where('asess', array('id_user_main' => $_POST['sesi']))->num_rows();
    if ($ceksemi==0) {
        $d=array('id_user_main'=>$_POST['sesi']);
        $this->db->insert('asess',$d);    
    }
    $reg = array(
                'item' => $_POST['idbarang'],
                'id_user' => $_POST['sesi']);
                $this->db->insert('chart', $reg);  
         }

// $this->db->select_max('id');
$query =array_reverse($this->db->get('barang')->result_array());
$ceksesi = $this->db->get_where('chart', array('id_user' => $_SESSION['semi_id']))->num_rows();
$data['keranjang']=$ceksesi;
// var_dump($data);
// var_dump($query);die;

        $data['one'] = $query;
        if (!$_GET==null) {
            $data2=$this->rtree($_GET['val']);
        $data['one']=$data2;
        }
         
        $this->load->view('dagangan/list', $data);
        $this->load->view('templates/footer');
        
    }

    public function Rtwo()
    {
        $id=$_GET['id'];
        $query = $this->db->get_where('barang', array('id' => $id))->result();
        // var_dump($query);
        $query2 = $this->db->get('barang',10)->result();
        $ping=array_reverse($query2);
        // var_dump($ping);die;
        $data['one']=$query;$data['two']=$ping;

        $this->load->view('dagangan/suc',$data);
        $this->load->view('templates/footer');


    }

    // Update
    public function Uone()
    {
		$id=$_POST['id'];
        $config['upload_path']          = './assets/img/dam/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100*10;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('dagangan/new_produk', $error);
        } else {
			$data = array('upload_data' => $this->upload->data());
			$new_image = $this->upload->data('file_name');
			
			$link = array('img_link' => $new_image);
				// var_dump($id);die;
		$this->db->where('id', $id);
		$this->db->update('barang', $link);
			
			// var_dump($_POST);die;
			// $this->load->view('dagangan/suc', $data);
			redirect('dagang/cone');
        }
    }


	// Dellet
	public function done()
	{
	$this->load->view('dagangan/suc');
	}
	}
