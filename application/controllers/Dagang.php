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

        $this->load->view('v2/head', $data);
    }
    private function Vup($mil, $update = [])
    {
        if ($mil == 1) {
            # code...
        } else {
            $this->load->view('v2/admin');
        }
    }
    public function Vpdate()
    {
        if (!$_POST == null) {
            $this->db->set('Json_data', $_POST['json']);
            $this->db->where('ID_Shope', '331253719');
            $this->db->update('V2');
            return redirect('admin');
        } else {
            $this->Vup(2);
        }
    }
    public function artikelv2($case)
    {
        $options  = array(
            'http' =>
            array(
                'ignore_errors' => true,
                'header' =>
                array(
                    0 => 'authorization: Bearer TIp29KsRs6XLS1%kYk96Qn$X5%MUI4jKPQlEA2r5U*Zkz8ifn&C@@%Bm#sI)hqkj',
                ),
            ),
        );
        if ($case == 'a1') {
            $context  = stream_context_create($options);
            $eas='10';
            $response = file_get_contents(
                'https://public-api.wordpress.com/rest/v1.1/sites/agustinus211.wordpress.com/posts/?number='.$eas,
                false,
                $context
            );
            $response = json_decode($response);
            $data['total'] = $response->found;
            $data['artikel'] = $response->posts;
        }
        // var_dump($data);die;
        return $data;
    }
    public function jsondata()
    {
        $apidata = [];
        $da = array_reverse($this->db->get('V2')->result());
        $json = $da[0]->Json_data;
        $item = json_decode($json);
        $data['keyId'] = $da[0]->ID_Shope;
        $data['keyurl'] = $da[0]->Link_Shopie;
        foreach ($item->items as $key => $value) {
            $apidata[$key]['detail'] = $this->GetAPIOn($value->itemid, $data['keyId']);
            $apidata[$key]['image'] = $value->image;
            $apidata[$key]['image2'] = $value->images;
            $apidata[$key]['image'] = $value->image;
            $apidata[$key]['terjual'] = $value->cmt_count;
            $apidata[$key]['dilihat'] = $value->view_count;
            $apidata[$key]['harga'] = $value->price;
            $apidata[$key]['stok'] = $value->stock;
        }
        $data['apidata'] = $apidata;
        $data['itm_total'] = count($item->items);
        $data['toko_detail'] = $this->GetAPIOn2($data['keyId']);
        return $data;
    }
    public function GetAPIOn2($id = null, $acesBase_link = 'wildan_nursery')
    {
        $data = [];
        // start get detail
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://shopee.co.id/api/v4/shop/get_shop_detail?username=" . $acesBase_link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "access-control-allow-credentials: true",
                "cache-control: no-cache",
                "postman-token: 39a44fc6-5f46-4808-fb85-6f76d45a9e56"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data['identi'] = json_decode($response);
        }
        // end get detail

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://shopee.co.id/api/v2/shop/get_categories?limit=20&offset=0&shopid=" . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "access-control-allow-credentials: true",
                "cache-control: no-cache",
                "postman-token: d1c02e25-cf82-60d5-b0fe-37f0d5b51d1c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data['Kategori'] = json_decode($response);
        }
        // var_dump($data); die;
        return $data;
    }
    public function GetAPIOn($id, $toko = '331253719')
    {
        $curl = curl_init();
        $url = 'https://shopee.co.id/api/v2/item/get?itemid=' . $id . '&shopid=' . $toko;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 81718e9c-ff7a-80b9-e63b-9dffb78800a5"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            die;
        } else {
            return json_decode($response);
        }
    }
    public function v2()
    {
        $data = $this->Rone('the key is the parameter');
        $data['apidata'] = $this->jsondata();
        // var_dump($data['cos']);die;
        foreach ($data['cos'] as $key => $value) {
            $data['cos1'][$key] = count($value);
        }
        $data['artikelv2'] = $this->artikelv2("a1");
        foreach ($data['artikelv2'] as $key => $value) {
            $data['contentv2'][$key] = $value;
        }

        if (!empty($_GET['bagian'])) {
            // $id=$_GET['id'];
            $list = $data['contentv2'];
            // var_dump($list['artikel']);
            // die;
            foreach ($list['artikel'] as $key => $value) {
                if ($value->ID == $_GET['id']) {
                    $write = $value;
                }
            }
            $data['isi']=$write;
            $this->load->view('v2/site', $data);
            $this->load->view('v2/artikel', $data);
        }else{
            $this->load->view('v2/slide', $data);
            $this->load->view('v2/site', $data);
            $this->load->view('v2/produk', $data);
            $this->load->view('v2/fslide', $data);
   
    }
        $this->load->view('v2/foot', $data);
    }
    public function index()
    {
        $this->Rone('noknok');
    }
    public function cone()
    {
        $kategori = $this->db->get('view_kategori')->result();
        $data['kategori'] = $kategori;
        $ting['title'] = 'Dashboard';
        //ahisyomis
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
    public function rtreev2($fall = 'cas')
    {
        $pal = $fall;
        $data = $this->db->get('barang')->result_array();
        $data2 = [];
        foreach ($data as $key1 => $k) {
            $a = $k['kategory'];
            $b = explode(',', $a);
            foreach ($b as $key2 => $lang) {
                $no1 = $lang;
                $no2 = $pal;
                if ($no1 == $no2) {
                    $data2[$key1] = $k;
                }
            }
        }
        $l['gas'] = $data2;
        $data['asesoris'] = $this->nams();
        if ($fall == 'cas') {
            $this->load->view('dagangan/gal', $l);
            $this->load->view('dagangan/footer', $data);
        } else {
            return $data2;
        }
    }
    public function rtree($fall = 'cas')
    {
        $pal = $_GET['val'];
        $data = $this->db->get('barang')->result_array();
        $data2 = [];
        foreach ($data as $key1 => $k) {
            $a = $k['kategory'];
            $b = explode(',', $a);
            foreach ($b as $key2 => $lang) {
                $no1 = $lang;
                $no2 = $pal;
                if ($no1 == $no2) {
                    $data2[$key1] = $k;
                }
            }
        }
        $l['gas'] = $data2;
        $data['asesoris'] = $this->nams();
        if ($fall == 'cas') {
            $this->load->view('dagangan/gal', $l);
            $this->load->view('dagangan/footer', $data);
        } else {
            return $data;
        }
    }
    public function Rone($parameter1 = 1)
    {
        if ($_SESSION['semi_id'] == null) {
            redirect('dagang/setse');
        }
        $parameter2 = "the key is the parameter";
        $data['active'] = '<style>.ding1{color:red;}</style>';
        $data['asesoris'] = $this->nams();
        $kategori = array_reverse($this->db->get('view_kategori')->result());
        $data['pasing'] = $kategori;
        $arti = $this->db->get('view_artikel')->result();
        $data['artikel'] = array_reverse($arti);

        $i = 0;
        $ii = 0;
        foreach ($kategori as $key => $value) {

            if ($i < 5) {
                # code...
                $unkate[1][$i] = $value;
            } else {

                $unkate[2][$ii] = $value;
                $ii++;
            }
            $i++;
        }
        $data['kategori'] = $unkate;
        foreach ($data['pasing'] as $key => $kate) {
            foreach ($kate as $key2 => $value) {
                $plank['past'][$key][$key2] = $this->rtreev2($value);
            }
        }
        foreach ($plank['past'] as $key => $value) {
            $data['cos'][$key] = $value['id'];
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
        $bongkar = $data['artikel'];
        foreach ($bongkar as $key => $value) {
            $paket_judul[$key] = $value->judul;
            $paket_head[$key] = $value->head;
            $paket_I_H[$key] = $value->isi_head;
            $ID[$key] = $value->id;
        }
        $paket['judul'] = $paket_judul;
        $paket['head'] = $paket_head;
        $paket['isi'] = $paket_I_H;
        $paket['ids'] = $ID;
        $data['paket'] = $paket;


        if ($parameter1 == $parameter2) {
            return $data;
        } else {
            // var_dump($data['asesoris'][2]);die;
            $this->load->view('dagangan/list', $data);
            $this->load->view('dagangan/list3', $data);
            $this->load->view('dagangan/artikel', $data);
            $this->load->view('dagangan/footer', $data);
        }
    }
    public function artikel($par1 = "not")
    {
        $data = $this->Rone("the key is the parameter");
        $data['tulis'] = array_reverse($this->db->get_where('view_artikel', array('id' => $_GET['id']))->result());

        $this->load->view('dagangan/artikel_base', $data);
        $par2 = "this the key";
        if ($par2 == $par1) {
            $this->load->view('dagangan/list_artikel', $data);
        } else {
            $this->load->view('dagangan/footer', $data);
        }
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
        $masl2 = $this->db->get_where('text-assis', array('id' => 5))->result();
        $data[5][0] = explode('|', $masl2[0]->img);
        $data[5][1] = explode('|', $masl2[0]->link);
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
