<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class View_galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('View_galeri_model');
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
            $config['base_url'] = base_url() . 'view_galeri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'view_galeri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'view_galeri/index.html';
            $config['first_url'] = base_url() . 'view_galeri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->View_galeri_model->total_rows($q);
        $view_galeri = $this->View_galeri_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'view_galeri_data' => $view_galeri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('view_galeri/view_galeri_list', $data);
    }

    public function read($id) 
    {
        $row = $this->View_galeri_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'text' => $row->text,
		'img' => $row->img,
	    );
            $this->load->view('view_galeri/view_galeri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('view_galeri'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('view_galeri/create_action'),
	    'id' => set_value('id'),
	    'text' => set_value('text'),
	    'img' => set_value('img'),
	);
        $this->load->view('view_galeri/view_galeri_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id' => $this->input->post('id',TRUE),
		'text' => $this->input->post('text',TRUE),
		'img' => $this->input->post('img',TRUE),
	    );

            $this->View_galeri_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('view_galeri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->View_galeri_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('view_galeri/update_action'),
		'id' => set_value('id', $row->id),
		'text' => set_value('text', $row->text),
		'img' => set_value('img', $row->img),
	    );
            $this->load->view('view_galeri/view_galeri_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('view_galeri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'id' => $this->input->post('id',TRUE),
		'text' => $this->input->post('text',TRUE),
		'img' => $this->input->post('img',TRUE),
	    );

            $this->View_galeri_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('view_galeri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->View_galeri_model->get_by_id($id);

        if ($row) {
            $this->View_galeri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('view_galeri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('view_galeri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id', 'id', 'trim|required');
	$this->form_validation->set_rules('text', 'text', 'trim|required');
	$this->form_validation->set_rules('img', 'img', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "view_galeri.xls";
        $judul = "view_galeri";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Text");
	xlsWriteLabel($tablehead, $kolomhead++, "Img");

	foreach ($this->View_galeri_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->text);
	    xlsWriteNumber($tablebody, $kolombody++, $data->img);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=view_galeri.doc");

        $data = array(
            'view_galeri_data' => $this->View_galeri_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('view_galeri/view_galeri_doc',$data);
    }

}

/* End of file View_galeri.php */
/* Location: ./application/controllers/View_galeri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */