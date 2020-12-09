<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class V2_asses_call_required extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('V2_asses_call_required_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'v2_asses_call_required/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'v2_asses_call_required/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'v2_asses_call_required/index.html';
            $config['first_url'] = base_url() . 'v2_asses_call_required/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->V2_asses_call_required_model->total_rows($q);
        $v2_asses_call_required = $this->V2_asses_call_required_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'v2_asses_call_required_data' => $v2_asses_call_required,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('v2_asses_call_required/v2_call_required_list', $data);
    }

    public function read($id) 
    {
        $row = $this->V2_asses_call_required_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'Dock' => $row->Dock,
		'Value' => $row->Value,
	    );
            $this->load->view('v2_asses_call_required/v2_call_required_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses_call_required'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('v2_asses_call_required/create_action'),
	    'id' => set_value('id'),
	    'Dock' => set_value('Dock'),
	    'Value' => set_value('Value'),
	);
        $this->load->view('v2_asses_call_required/v2_call_required_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Dock' => $this->input->post('Dock',TRUE),
		'Value' => $this->input->post('Value',TRUE),
	    );

            $this->V2_asses_call_required_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('v2_asses_call_required'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->V2_asses_call_required_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('v2_asses_call_required/update_action'),
		'id' => set_value('id', $row->id),
		'Dock' => set_value('Dock', $row->Dock),
		'Value' => set_value('Value', $row->Value),
	    );
            $this->load->view('v2_asses_call_required/v2_call_required_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses_call_required'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'Dock' => $this->input->post('Dock',TRUE),
		'Value' => $this->input->post('Value',TRUE),
	    );

            $this->V2_asses_call_required_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('v2_asses_call_required'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->V2_asses_call_required_model->get_by_id($id);

        if ($row) {
            $this->V2_asses_call_required_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('v2_asses_call_required'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('v2_asses_call_required'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Dock', 'dock', 'trim|required');
	$this->form_validation->set_rules('Value', 'value', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "v2_call_required.xls";
        $judul = "v2_call_required";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Dock");
	xlsWriteLabel($tablehead, $kolomhead++, "Value");

	foreach ($this->V2_asses_call_required_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Dock);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Value);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=v2_call_required.doc");

        $data = array(
            'v2_call_required_data' => $this->V2_asses_call_required_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('v2_asses_call_required/v2_call_required_doc',$data);
    }

}

/* End of file V2_asses_call_required.php */
/* Location: ./application/controllers/V2_asses_call_required.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-09 13:45:07 */
/* http://harviacode.com */