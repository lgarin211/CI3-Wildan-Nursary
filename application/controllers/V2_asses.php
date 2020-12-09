<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class V2_asses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('V2_asses_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'v2_asses/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'v2_asses/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'v2_asses/index.html';
            $config['first_url'] = base_url() . 'v2_asses/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->V2_asses_model->total_rows($q);
        $v2_asses = $this->V2_asses_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'v2_asses_data' => $v2_asses,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('v2_asses/V2_list', $data);
    }

    public function read($id) 
    {
        $row = $this->V2_asses_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'Json_data' => $row->Json_data,
		'ID_Shope' => $row->ID_Shope,
		'Link_Shopie' => $row->Link_Shopie,
	    );
            $this->load->view('v2_asses/V2_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('v2_asses/create_action'),
	    'id' => set_value('id'),
	    'Json_data' => set_value('Json_data'),
	    'ID_Shope' => set_value('ID_Shope'),
	    'Link_Shopie' => set_value('Link_Shopie'),
	);
        $this->load->view('v2_asses/V2_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Json_data' => $this->input->post('Json_data',TRUE),
		'ID_Shope' => $this->input->post('ID_Shope',TRUE),
		'Link_Shopie' => $this->input->post('Link_Shopie',TRUE),
	    );

            $this->V2_asses_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('v2_asses'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->V2_asses_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('v2_asses/update_action'),
		'id' => set_value('id', $row->id),
		'Json_data' => set_value('Json_data', $row->Json_data),
		'ID_Shope' => set_value('ID_Shope', $row->ID_Shope),
		'Link_Shopie' => set_value('Link_Shopie', $row->Link_Shopie),
	    );
            $this->load->view('v2_asses/V2_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'Json_data' => $this->input->post('Json_data',TRUE),
		'ID_Shope' => $this->input->post('ID_Shope',TRUE),
		'Link_Shopie' => $this->input->post('Link_Shopie',TRUE),
	    );

            $this->V2_asses_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('v2_asses'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->V2_asses_model->get_by_id($id);

        if ($row) {
            $this->V2_asses_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('v2_asses'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Json_data', 'json data', 'trim|required');
	$this->form_validation->set_rules('ID_Shope', 'id shope', 'trim|required');
	$this->form_validation->set_rules('Link_Shopie', 'link shopie', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "V2.xls";
        $judul = "V2";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Json Data");
	xlsWriteLabel($tablehead, $kolomhead++, "ID Shope");
	xlsWriteLabel($tablehead, $kolomhead++, "Link Shopie");

	foreach ($this->V2_asses_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Json_data);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ID_Shope);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Link_Shopie);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=V2.doc");

        $data = array(
            'V2_data' => $this->V2_asses_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('v2_asses/V2_doc',$data);
    }

}

/* End of file V2_asses.php */
/* Location: ./application/controllers/V2_asses.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-09 13:43:21 */
/* http://harviacode.com */