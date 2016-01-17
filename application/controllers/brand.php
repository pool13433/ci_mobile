<?php

class Brand extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->helper(array('form', 'url'));
        $this->load->library('myutil');
        $this->load->library('session');
        $this->load->database();

        $this->data['params'] = array(
            'param1' => '',
            'param2' => '',
            'param3' => '',
            'param4' => '',
            'param5' => '',
        );
    }

    public function index($id = null) {
        $this->load->model("datamodel");
        $this->datamodel->table_name = ' mbrand bb';
        $this->datamodel->field_name = "*";
        $this->datamodel->condition = ' ';
        $this->data['list_brand'] = $this->datamodel->list_data();

        if ($id != null) {
            $this->datamodel->field_name = "*";
            $this->datamodel->table_name = ' mbrand bb';
            $this->datamodel->condition = 'where bb.brand_id=' . $id;
            $this->datamodel->order = '';
            $this->data['data_brand'] = $this->datamodel->data();
        } else {
            $this->data['data_brand'] = (object) array(
                        'brand_id' => '',
                        'name_th' => '',
                        'name_en' => '',
                        'logo' => ''
            );
        }
        $this->load->view('header', $this->data);
        $this->load->view('/admin/brand', $this->data);
        $this->load->view('footer');
    }

    public function saveBrand() {
        $brand_id = $_POST['brand_id'];
        $nameTh = $_POST['name_th'];
        $nameEng = $_POST['name_eng'];
        $logo = '';
        $this->data = array(
            'name_th' => $nameTh,
            'name_en' => $nameEng,
            'logo' => $logo,
        );
        if (empty($brand_id)) {
            $exe = $this->db->insert('mbrand', $this->data);
        } else {
            $this->db->where('brand_id', $brand_id);
            $exe = $this->db->update('mbrand', $this->data);
        }
        redirect('brand/index', 'refresh');
    }

    public function deleteBrand($id) {
        $this->db->delete('mbrand', array('brand_id' => $id));
        redirect('brand/index', 'refresh');
    }

}
