<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_access_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_access_menu_model');
        $this->load->library('form_validation');
        $this->load->library('form_validation');	
        $ceksesi = $this->db->get_where('chart', array('id_user' => $_SESSION['semi_id']))->result();
        $banyak=0;
        foreach ($ceksesi as $key => $i) {
        $banyak=$banyak+$i->quantity;
        }
        $data['keranjang']=$banyak;
        $this->load->view('dagangan/head',$data);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user_access_menu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user_access_menu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user_access_menu/index.html';
            $config['first_url'] = base_url() . 'user_access_menu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_access_menu_model->total_rows($q);
        $user_access_menu = $this->User_access_menu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_access_menu_data' => $user_access_menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user_access_menu/user_access_menu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_access_menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'role_id' => $row->role_id,
		'menu_id' => $row->menu_id,
	    );
            $this->load->view('user_access_menu/user_access_menu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_access_menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_access_menu/create_action'),
	    'id' => set_value('id'),
	    'role_id' => set_value('role_id'),
	    'menu_id' => set_value('menu_id'),
	);
        $this->load->view('user_access_menu/user_access_menu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'role_id' => $this->input->post('role_id',TRUE),
		'menu_id' => $this->input->post('menu_id',TRUE),
	    );

            $this->User_access_menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_access_menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_access_menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_access_menu/update_action'),
		'id' => set_value('id', $row->id),
		'role_id' => set_value('role_id', $row->role_id),
		'menu_id' => set_value('menu_id', $row->menu_id),
	    );
            $this->load->view('user_access_menu/user_access_menu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_access_menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'role_id' => $this->input->post('role_id',TRUE),
		'menu_id' => $this->input->post('menu_id',TRUE),
	    );

            $this->User_access_menu_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_access_menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_access_menu_model->get_by_id($id);

        if ($row) {
            $this->User_access_menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_access_menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_access_menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('role_id', 'role id', 'trim|required');
	$this->form_validation->set_rules('menu_id', 'menu id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user_access_menu.xls";
        $judul = "user_access_menu";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Role Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Menu Id");

	foreach ($this->User_access_menu_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->role_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->menu_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user_access_menu.doc");

        $data = array(
            'user_access_menu_data' => $this->User_access_menu_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_access_menu/user_access_menu_doc',$data);
    }

}

/* End of file User_access_menu.php */
/* Location: ./application/controllers/User_access_menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */