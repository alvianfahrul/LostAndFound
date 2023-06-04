<?php

class Barang extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('Barang_model')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Barang';
        $data['barang'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/detail', $data);
        $this->view('templates/footer');
    }

    public function upload() {
        if($this->model('Barang_model')->uploadDataBarang($_POST) > 0) {
            header('Location: ' . BASEURL . 'barang');
            exit;
        }
    }
}