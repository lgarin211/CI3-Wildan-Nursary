<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user_menu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user_menu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user_menu/index.html';
            $config['first_url'] = base_url() . 'user_menu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_menu_model->total_rows($q);
        $user_menu = $this->User_menu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_menu_data' => $user_menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user_menu/user_menu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'menu' => $row->menu,
	    );
            $this->load->view('user_menu/user_menu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_menu/create_action'),
	    'id' => set_value('id'),
	    'menu' => set_value('menu'),
	);
        $this->load->view('user_menu/user_menu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'menu' => $this->input->post('menu',TRUE),
	    );

            $this->User_menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_menu/update_action'),
		'id' => set_value('id', $row->id),
		'menu' => set_value('menu', $row->menu),
	    );
            $this->load->view('user_menu/user_menu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'menu' => $this->input->post('menu',TRUE),
	    );

            $this->User_menu_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_menu_model->get_by_id($id);

        if ($row) {
            $this->User_menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('menu', 'menu', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user_menu.xls";
        $judul = "user_menu";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Menu");

	foreach ($this->User_menu_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->menu);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=user_menu.doc");

        $data = array(
            'user_menu_data' => $this->User_menu_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user_menu/user_menu_doc',$data);
    }

}

/* End of file User_menu.php */
/* Location: ./application/controllers/User_menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */