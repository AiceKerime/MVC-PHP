<?php 

class About extends Controller{
    public function index($nama = 'Rafi Izzaturohman', $sekolah = 'SMK Yadika Soreang')
    {
        $data['nama'] = $nama;
        $data['sekolah'] = $sekolah;
        $data['judul'] = 'About Me';
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}