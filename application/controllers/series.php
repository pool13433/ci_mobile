<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Series extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library('myutil');
        $this->load->database();
    }
    
    public function index($id = null) {
        $this->load->model("datamodel");
        $this->datamodel->table_name = ' mseries s,mbrand b';
        $this->datamodel->field_name = " s.series_id series_id,s.name_th series_name_th,s.name_en series_name_en,b.name_th brand_name_th ";
        $this->datamodel->condition = ' where b.brand_id = s.brand_id';
        $data['list_series'] = $this->datamodel->list_data_join();

        if ($id != null) {
            $this->datamodel->field_name = "*";
            $this->datamodel->table_name = ' mseries bb';
            $this->datamodel->condition = 'where bb.series_id=' . $id;
            $this->datamodel->order = '';
            $data['data_series'] = $this->datamodel->data();
        } else {
            $data['data_series'] = (object) array(
                        'series_id' => '',
                        'brand_id' => '',
                        'name_th' => '',
                        'name_en' => ''
            );
        }
        /*
         * Load BrandModel
         */
        $this->datamodel->field_name = ' * ';
        $this->datamodel->table_name = ' mbrand';
        $this->datamodel->condition = ' order by brand_id desc';
        $data['data_brand'] = $this->datamodel->list_data();
                
        $this->load->view('header');
        $this->load->view('/admin/series', $data);
        $this->load->view('footer');
    }

    public function saveSeries() {
        $series_id = $_POST['series_id'];
        $brand_id = $_POST['brand_id'];
        $nameTh = $_POST['name_th'];
        $nameEng = $_POST['name_eng'];        
        $data = array(            
            'name_th' => $nameTh,
            'name_en' => $nameEng,
            'brand_id' => $brand_id,
        );
        if(empty($series_id)){
            $exe = $this->db->insert('mseries', $data);
        }else{
            $this->db->where('series_id',$series_id);
            $exe = $this->db->update('mseries', $data);
        }
        redirect('series/index', 'refresh');
    }

    public function deleteSeries($id) {
        $this->db->delete('mseries', array('series_id' => $id));
        redirect('series/index', 'refresh');
    }
}
