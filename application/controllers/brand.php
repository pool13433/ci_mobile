<?php

class Brand extends CI_Controller {

    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->helper(array('form', 'url'));
        $this->load->library('myutil');
        $this->load->library('session');
        $this->load->database();
    }

    public function index($id = null) {
        $this->load->model("datamodel");
        $this->datamodel->table_name = ' mbrand bb';
        $this->datamodel->field_name = "*";
        $this->datamodel->condition = ' ';
        $data['list_brand'] = $this->datamodel->list_data();

        if ($id != null) {
            $this->datamodel->field_name = "*";
            $this->datamodel->table_name = ' mbrand bb';
            $this->datamodel->condition = 'where bb.brand_id=' . $id;
            $this->datamodel->order = '';
            $data['data_brand'] = $this->datamodel->data();
        } else {
            $data['data_brand'] = (object) array(
                        'brand_id' => '',
                        'name_th' => '',
                        'name_en' => '',
                        'logo' => ''
            );
        }
        $this->load->view('header');
        $this->load->view('/admin/brand', $data);
        $this->load->view('footer');
    }

    public function saveBrand() {
        $brand_id = $_POST['brand_id'];
        $nameTh = $_POST['name_th'];
        $nameEng = $_POST['name_eng'];
        $logo = '';
        $data = array(            
            'name_th' => $nameTh,
            'name_en' => $nameEng,
            'logo' => $logo,
        );
        if(empty($brand_id)){
            $exe = $this->db->insert('mbrand', $data);
        }else{
            $this->db->where('brand_id',$brand_id);
            $exe = $this->db->update('mbrand', $data);
        }
        redirect('brand/index', 'refresh');
    }

    public function deleteBrand($id) {
        $this->db->delete('mbrand', array('brand_id' => $id));
        redirect('brand/index', 'refresh');
    }

}
