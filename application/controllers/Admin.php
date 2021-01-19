<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function wp_get_token()
    {
        
        $curl = curl_init('https://public-api.wordpress.com/oauth2/token');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
            'client_id' => your_client_id,
            'redirect_uri' => your_redirect_url,
            'client_secret' => your_client_secret_key,
            'code' => $_GET['code'], // The code from the previous request
            'grant_type' => 'authorization_code'
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $auth = curl_exec($curl);
        $secret = json_decode($auth);
        $access_key = $secret->access_token;
    }
    public function index()
    {

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function has()
    {

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['has'] = $this->db->get('has')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ot/dbsn', $data);
        $this->load->view('templates/footer');
    }
    public function Vpdate()
    {
        $data['title'] = 'API Shopie Control';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        if (!empty($_POST)) {
            $this->db->set('Json_data', $_POST['json']);
            $this->db->where('ID_Shope', '331253719');
            $this->db->update('V2');
            $_SESSION['dokan'] = 'Berhasil Update';
        }
        $this->load->view('v2/admin');
        $this->load->view('templates/footer');
    }
    public function Setting()
    {
        $data['title'] = 'API Shopie Control';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!empty($_POST)) {
            $this->db->set('Value', $_POST['value']);
            $this->db->where('id', $_POST['id']);
            $this->db->where('Dock', $_POST['dos']);
            $this->db->update('v2_call_required');
            $data['sel'] = 'Berhasil Mengupdate ' . $_POST['dos'];
        }
        $das['all'] = $this->db->get('v2_call_required')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dasm', $das);
        $this->load->view('templates/footer');
    }
    public function Wpconfig()
    {
        $this->load->view('WP/WPifream');
    }
    public function role()
    {

        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {

        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
