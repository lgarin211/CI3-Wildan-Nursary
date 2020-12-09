<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_asses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_asses_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user_asses/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user_asses/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user_asses/index.html';
            $config['first_url'] = base_url() . 'user_asses/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_asses_model->total_rows($q);
        $user_asses = $this->User_asses_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_asses_data' => $user_asses,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user_asses/user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_asses_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'email' => $row->email,
		'image' => $row->image,
		'password' => $row->password,
		'role_id' => $row->role_id,
		'is_active' => $row->is_active,
		'date_created' => $row->date_created,
		'setsesion' => $row->setsesion,
	    );
            $this->load->view('user_asses/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_asses'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_asses/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'image' => set_value('image'),
	    'password' => set_value('password'),
	    'role_id' => set_value('role_id'),
	    'is_active' => set_value('is_active'),
	    'date_created' => set_value('date_created'),
	    'setsesion' => set_value('setsesion'),
	);
        $this->load->view('user_asses/user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'image' => $this->input->post('image',TRUE),
		'password' => $this->input->post('password',TRUE),
		'role_id' => $this->input->post('role_id',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'setsesion' => $this->input->post('setsesion',TRUE),
	    );

            $this->User_asses_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_asses'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_asses_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_asses/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'email' => set_value('email', $row->email),
		'image' => set_value('image', $row->image),
		'password' => set_value('password', $row->password),
		'role_id' => set_value('role_id', $row->role_id),
		'is_active' => set_value('is_active', $row->is_active),
		'date_created' => set_value('date_created', $row->date_created),
		'setsesion' => set_value('setsesion', $row->setsesion),
	    );
            $this->load->view('user_asses/user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_asses'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'image' => $this->input->post('image',TRUE),
		'password' => $this->input->post('password',TRUE),
		'role_id' => $this->input->post('role_id',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'setsesion' => $this->input->post('setsesion',TRUE),
	    );

            $this->User_asses_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_asses'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_asses_model->get_by_id($id);

        if ($row) {
            $this->User_asses_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_asses'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_asses'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('role_id', 'role id', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('setsesion', 'setsesion', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user.xls";
        $judul = "user";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Image");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Role Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Is Active");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Created");
	xlsWriteLabel($tablehead, $kolomhead++, "Setsesion");

	foreach ($this->User_asses_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->image);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteNumber($tablebody, $kolombody++, $data->role_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->is_active);
	    xlsWriteNumber($tablebody, $kolombody++, $data->date_created);
	    xlsWriteNumber($tablebody, $kolombody++, $data->setsesion);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user.doc");

        $data = array(
            'user_data' => $this->User_asses_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_asses/user_doc',$data);
    }

}

/* End of file User_asses.php */
/* Location: ./application/controllers/User_asses.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-09 13:44:35 */
/* http://harviacode.com */