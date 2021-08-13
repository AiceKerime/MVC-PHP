<?php 

class Siswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['mhs'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['mhs'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }
}