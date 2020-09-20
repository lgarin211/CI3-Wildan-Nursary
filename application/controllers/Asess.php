<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Asess extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Asess_model');
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
            $config['base_url'] = base_url() . 'asess/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'asess/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'asess/index.html';
            $config['first_url'] = base_url() . 'asess/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Asess_model->total_rows($q);
        $asess = $this->Asess_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'asess_data' => $asess,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('asess/asess_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Asess_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user_main' => $row->id_user_main,
	    );
            $this->load->view('asess/asess_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('asess'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('asess/create_action'),
	    'id_user_main' => set_value('id_user_main'),
	);
        $this->load->view('asess/asess_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
	    );

            $this->Asess_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('asess'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Asess_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('asess/update_action'),
		'id_user_main' => set_value('id_user_main', $row->id_user_main),
	    );
            $this->load->view('asess/asess_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('asess'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user_main', TRUE));
        } else {
            $data = array(
	    );

            $this->Asess_model->update($this->input->post('id_user_main', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('asess'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Asess_model->get_by_id($id);

        if ($row) {
            $this->Asess_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('asess'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('asess'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('id_user_main', 'id_user_main', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "asess.xls";
        $judul = "asess";
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

	foreach ($this->Asess_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=asess.doc");

        $data = array(
            'asess_data' => $this->Asess_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('asess/asess_doc',$data);
    }

}

/* End of file Asess.php */
/* Location: ./application/controllers/Asess.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */