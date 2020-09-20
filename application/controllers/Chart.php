<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_model');
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
            $config['base_url'] = base_url() . 'chart/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'chart/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'chart/index.html';
            $config['first_url'] = base_url() . 'chart/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Chart_model->total_rows($q);
        $chart = $this->Chart_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'chart_data' => $chart,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('chart/chart_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Chart_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'item' => $row->item,
		'id_user' => $row->id_user,
		'quantity' => $row->quantity,
	    );
            $this->load->view('chart/chart_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chart'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('chart/create_action'),
	    'id' => set_value('id'),
	    'item' => set_value('item'),
	    'id_user' => set_value('id_user'),
	    'quantity' => set_value('quantity'),
	);
        $this->load->view('chart/chart_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'item' => $this->input->post('item',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'quantity' => $this->input->post('quantity',TRUE),
	    );

            $this->Chart_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('chart'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Chart_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('chart/update_action'),
		'id' => set_value('id', $row->id),
		'item' => set_value('item', $row->item),
		'id_user' => set_value('id_user', $row->id_user),
		'quantity' => set_value('quantity', $row->quantity),
	    );
            $this->load->view('chart/chart_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chart'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'item' => $this->input->post('item',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'quantity' => $this->input->post('quantity',TRUE),
	    );

            $this->Chart_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('chart'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Chart_model->get_by_id($id);

        if ($row) {
            $this->Chart_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('chart'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('chart'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('item', 'item', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('quantity', 'quantity', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "chart.xls";
        $judul = "chart";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Item");
	xlsWriteLabel($tablehead, $kolomhead++, "Id User");
	xlsWriteLabel($tablehead, $kolomhead++, "Quantity");

	foreach ($this->Chart_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->item);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_user);
	    xlsWriteNumber($tablebody, $kolombody++, $data->quantity);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=chart.doc");

        $data = array(
            'chart_data' => $this->Chart_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('chart/chart_doc',$data);
    }

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-09-19 09:16:54 */
/* http://harviacode.com */