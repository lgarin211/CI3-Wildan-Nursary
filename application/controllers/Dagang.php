<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dagang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $san = '';
        if ($_SESSION['semi_id'] > 2000) {
            $san = 'Dasboard';
        } else {
            $san = 'login';
        }
        $this->load->library('form_validation');
        $ceksesi = $this->db->get_where('chart', array('id_user' => $_SESSION['semi_id']))->result();
        $banyak = 0;
        foreach ($ceksesi as $key => $i) {
            $banyak = $banyak + $i->quantity;
        }
        $data['keranjang'] = $banyak;
        $data['san'] = $san;
        $this->load->view('dagangan/head', $data);
    }
    public function index()
    {
        redirect('/');
    }



    public function cone()
    {
        $kategori = $this->db->get('view_kategori')->result();
        $data['kategori'] = $kategori;
        $ting['title'] = 'Dashboard';
        $ting['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $ting);
        $this->load->view('templates/sidebar', $ting);
        $this->load->view('templates/topbar', $ting);
        $this->cek();
        if (!$_POST == null) {
            $data = $_POST;
            $text = '';
            foreach ($kategori as $key => $value) {
                if ($_POST['ktr' . $value->id] == true) {
                    $text = $text . ',' . $_POST['ktr' . $value->id];
                } else {
                    $text = $text . ',0';
                }
            }
            $paket = array(
                'nama_produk' => $data['name'],
                'banyak_produk' => $data['banyak'],
                'deskripsi' => $data['deskripsi'],
                'harga' => $data['harga'],
                'img_link' => 'oxana_janerova.jpg',
                'kategory' => $text
            );
            $this->db->insert('barang', $paket);
            redirect('dagang/cone');
        } else {
            $this->load->view('dagangan/new_produk', $data);
        }
        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }



    public function kirim()

    {

        # code...
    }
    public function beli()
    {

        if ($_POST == null) {
            $id = $_GET['id'];
            $query1 = $this->db->get_where('barang', array('id' => $id))->result();
            $query = $this->db->get_where('barang', array('id' => $id))->num_rows();
            $data['one'] = $query;
            $data['two'] = $query1;
            $this->load->view('dagangan/cekout', $data);
        } else {
            $link = $_POST;
            $data['link'] = $link;

            $this->load->view('dagangan/cekout2', $data);
        }

        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }

    public function cek()
    {
        $query = $this->db->get('barang')->result();

        foreach ($query as $row) {
            $data['one'] = $row;
            $img = $row->img_link;
            if ($img == 'oxana_janerova.jpg') {
                $this->load->view('dagangan/img_p', $data);
            }
        }
    }

    public function manycek()
    {
        $heko = '';
        if (!$_GET == null) {
            $i = 0;
            foreach ($_GET as $key => $d) {
                $ping[$key] = $isi = $this->db->get_where('barang', array('id' => $d))->result();
                foreach ($ping as $key1 => $pas) {
                    $link[$key1] = $this->db->get_where('chart', array('item' => $pas[0]->id))->result();
                    $tag[$key1] = $link[$key1][0]->quantity;
                }
                $i++;
            }

            $data['one'] = $i;
            $data['isi'] = $ping;
            $data['link'] = $tag;

            $this->session->set_userdata('cekout', $data['isi']);
            $this->load->view('dagangan/cekout4', $data);
            $data['asesoris'] = $this->nams();
            $this->load->view('dagangan/footer', $data);
            // var_dump($data['assesoris']);
        }

        if (!$_POST == null) {
            $a = $_SESSION['cekout'];
            $link = $_POST;
            $data['link'] = $link;
            $data['p'] = $a;
            $i = 0;
            foreach ($a as $key => $nam) {
                $ping[$key] = $this->db->get_where('chart', array('item' => $nam[0]->id))->result();
                $produk[$key] = $nam[0]->nama_produk;
                foreach ($ping as $key => $ran) {
                    $banyak[$key] = $ran[0]->quantity;
                }
            }
            $data['nan'] = $produk;
            $data['ran'] = $banyak;
            foreach ($data['nan'] as $key => $man) {
                $heko = $heko . '>>produk ' . $man . ' sebanyak ' . $data['ran'][$key] . ',';
            }
            $text = 'saya ' . $link['namapembeli'] . '>>akan membeli : ' . $heko . '>> dengan total harga Rp ' . $link['total'] . '000,00 ,>>dan  keterangan *>>alamat -' . $link['alamat'] . ',>>nomor -' . $link['telp'] . '>>dan pesan -' . $link['pesan'] . '*';
            $text = str_replace(" ", "%20", $text);
            $text = str_replace(">>", "%0A", $text);
            $data['text'] = $text;
            $data['no_admin'] = '628888360409';
            $this->load->view('dagangan/cekout5', $data);
            $data['asesoris'] = $this->nams();
            $this->load->view('dagangan/footer', $data);
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
        if ($isi == null) {
            redirect('/');
        } else {

            foreach ($isi as $key => $i) {
                $ping[$key] = $this->db->get_where('barang', array('id' => $i->item))->result();
                $dist[$key] = $i->quantity;
            }
            $data['isi'] = $ping;
            $data['link_p'] = $dist;
            $this->load->view('dagangan/kall', $data);
            $data['asesoris'] = $this->nams();
            $this->load->view('dagangan/footer', $data);
        }
    }
    public function setse()
    {

        if ($_SESSION['semi_id'] == null) {
            $dam = $this->db->get('asess')->num_rows();
            if ($dam == 0) {
                $this->session->set_userdata('semi_id', 1);
            } else {
                $this->session->set_userdata('semi_id', $dam + 1);
            }
            redirect('/');
        } else {
            redirect('/');
        }
    }
    public function rtree()
    {

        $get = $_GET['val'];
        $data = $this->db->get('barang')->result_array();
        $data2 = [];
        foreach ($data as $key1 => $k) {
            $a = $k['kategory'];
            $b = explode(',', $a);
            foreach ($b as $key2 => $lang) {
                $no1 = $lang;
                $no2 = $get;
                if ($no1 == $no2) {
                    $data2[$key1] = $k;
                }
            }
        }
        $l['gas'] = $data2;
        $this->load->view('dagangan/gal', $l);
        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }
    public function Rone()
    {
        $data['asesoris'] = $this->nams();
        $kategori = $this->db->get('view_kategori')->result();
        $data['kategori'] = $kategori;
        if ($_SESSION['semi_id'] == null) {
            redirect('dagang/setse');
        }
        $data['sas'] = $_SESSION['semi_id'];
        if (!$_POST == null) {
            $ceksemi = $this->db->get_where('asess', array('id_user_main' => $_POST['sesi']))->num_rows();
            if ($ceksemi == 0) {
                $d = array('id_user_main' => $_POST['sesi']);
                $this->db->insert('asess', $d);
            }
            $ceknam = $this->db->get_where('chart', array('item' => $_POST['idbarang'], 'id_user' => $_SESSION['semi_id']))->num_rows();
            $nam = $this->db->get_where('chart', array('item' => $_POST['idbarang'], 'id_user' => $_SESSION['semi_id']))->result();
            if ($ceknam > 0) {
                $now = $nam[0]->quantity + $_POST['quantity'];
                $this->db->set('quantity', $now);
                $this->db->where('id_user', $_SESSION['semi_id']);
                $this->db->where('item', $_POST['idbarang']);
                $this->db->update('chart');
            }
            if ($ceknam == 0) {
                $reg = array(
                    'item' => $_POST['idbarang'],
                    'quantity' => $_POST['quantity'],
                    'id_user' => $_POST['sesi']
                );
                $this->db->insert('chart', $reg);
            }
            redirect('/');
        }

        $query = array_reverse($this->db->get('barang')->result_array());
        if (!$query == null) {
            # code...

            foreach ($query as $key => $l) {
                if ($key == 20) {
                    break;
                }
                $query2[$key] = $l;
            }
            $data['one'] = $query2;

            foreach ($query as $key => $l) {
                if ($key == 3) {
                    break;
                }
                $query3[$key] = $l;
            }
            $data['gas'] = $query3;
        }
        // var_dump($data['asesoris'][2]);die;
        $this->load->view('dagangan/list', $data);
        $this->load->view('dagangan/ketlist', $data);
        $this->load->view('dagangan/list3', $data);
        $this->load->view('dagangan/footer', $data);
    }

    public function gales()
    {
        $query = array_reverse($this->db->get('barang')->result_array());
        $data['gas'] = $query;
        $this->load->view('dagangan/gal', $data);
        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }

    public function Rtwo()
    {
        $id = $_GET['id'];
        $query = $this->db->get_where('barang', array('id' => $id))->result();
        $query2 = $this->db->get('barang', 10)->result();
        $ping = array_reverse($query2);
        $data['one'] = $query;
        $data['two'] = $ping;
        $this->load->view('dagangan/suc', $data);
        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }

    public function nams()
    {
        $data[1] = $this->db->get_where('text-assis', array('id' => 1))->result();
        $masl = $this->db->get_where('text-assis', array('id' => 2))->result();
        $data[2] = explode('|', $masl[0]->img);
        $data[3] = $this->db->get_where('text-assis', array('id' => 3))->result();
        $data[4] = $this->db->get_where('text-assis', array('id' => 4))->result();

        return $data;
    }

    public function Uone()
    {
        $id = $_POST['id'];
        $config['upload_path']          = './assets/img/dam/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100 * 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            echo $error;
            // $this->load->view('dagangan/new_produk', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $new_image = $this->upload->data('file_name');

            $link = array('img_link' => $new_image);
            $this->db->where('id', $id);
            $this->db->update('barang', $link);
            redirect('dagang/cone');
        }
    }


    public function done()
    {
        $this->load->view('dagangan/suc');
        $data['asesoris'] = $this->nams();
        $this->load->view('dagangan/footer', $data);
    }
}
