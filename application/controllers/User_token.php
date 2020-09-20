<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_token extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_token_model');
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
            $config['base_url'] = base_url() . 'user_token/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user_token/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user_token/index.html';
            $config['first_url'] = base_url() . 'user_token/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_token_model->total_rows($q);
        $user_token = $this->User_token_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_token_data' => $user_token,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user_token/user_token_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_token_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'email' => $row->email,
		'token' => $row->token,
		'date_created' => $row->date_created,
	    );
            $this->load->view('user_token/user_token_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_token'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_token/create_action'),
	    'id' => set_value('id'),
	    'email' => set_value('email'),
	    'token' => set_value('token'),
	    'date_created' => set_value('date_created'),
	);
        $this->load->view('user_token/user_token_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'token' => $this->input->post('token',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
	    );

            $this->User_token_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_token'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_token_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_token/update_action'),
		'id' => set_value('id', $row->id),
		'email' => set_value('email', $row->email),
		'token' => set_value('token', $row->token),
		'date_created' => set_value('date_created', $row->date_created),
	    );
            $this->load->view('user_token/user_token_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_token'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'token' => $this->input->post('token',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
	    );

            $this->User_token_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_token'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_token_model->get_by_id($id);

        if ($row) {
            $this->User_token_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_token'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_token'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('token', 'token', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user_token.xls";
        $judul = "user_token";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Token");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Created");

	foreach ($this->User_token_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->token);
	    xlsWriteNumber($tablebody, $kolombody++, $data->date_created);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user_token.doc");

        $data = array(
            'user_token_data' => $this->User_token_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_token/user_token_doc',$data);
    }

}

/* End of file User_token.php */
/* Location: ./application/controllers/User_token.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */