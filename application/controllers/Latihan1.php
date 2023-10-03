<?php
Class Latihan1 extends CI_Controller{
    public function index(){
        echo "Halo";
    }

    public function penjumlahan($n1, $n2){
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlan dari " .$n1. "+".$n2. "=".$hasil;
    }
}