<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pesan_Hotel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('M_hotel');
    }

    function index()
    {
        $data['data']= $this->M_hotel->get();
        $this->load->view('view_pesan_hotel', $data);
    }

    function add() 
    {
        $pesan = array(
            'nama_pemesan' => $this->input->post('inputNama_pemesan'),
            'jenis_kelamin' => $this->input->post('inputJenis_kelamin'),
            'nomor_identitas' => $this->input->post('inputNomor_identitas'),
            'tipe_kamar' => $this->input->post('inputTipe_kamar'),
            'harga' => $this->input->post('inputHarga'),
            'tanggal_pesan' => $this->input->post('tanggal_pesan'),
            'durasi_menginap' => $this->input->post('durasi_menginap'),
            'breakfast' => $this->input->post('breakfast'),
            'total_bayar' => $this->input->post('total_bayar')
        );

        $this->M_hotel->add($pesan);
        echo "<script>alert('Hotel berhasil dipesan!!'); window.location.href = '" . base_url('Home') . "';</script>";

    }
}
