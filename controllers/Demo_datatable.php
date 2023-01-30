<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Demo_datatable extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('demo_datatable_model');
    }
    public function index()
    {
        $data['company']=$this->demo_datatable_model->get();
        $this->load->view('demo_datatable',$data);
    }
    public function table()
    {
        $select = [
            'name',
            'birthday',
            'gender',
            'dateadded'
        ];
        $where        = [];
        $aColumns     = $select;
        $sIndexColumn = 'id';
        $sTable       = db_prefix() . 'demo_staff';
        $join         = [];

        $result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, [
            'id',
            'name',
            'birthday',
            'gender',
            'dateadded'
        ]);

        $output  = $result['output'];
        $rResult = $result['rResult'];
        foreach ($rResult as $aRow) {
            $row = [];
            $row[] = $aRow['name'];
            $row[] = _d($aRow['birthday']);
            $row[] = $aRow['gender'];
            $row[] = _d($aRow['dateadded']);
            $output['aaData'][] = $row;
        }
        echo json_encode($output);
        die();
    }

}