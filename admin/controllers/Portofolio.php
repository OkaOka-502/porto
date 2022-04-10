<?php 
class Portofolio extends Controller {
    public  function index() 
    {
    // tampung method getProfile() dari portofoliomodwl.php di $data
        $data['profile'] = $this->model('PortofolioModel')->getProfile();

    // tampung method getAbout kedalam $data['about']
        $data['about'] = $this->model('PortofolioModel')->getAbout();

    // tampug method getProject kedalam $data['project']
        $data['project'] = $this->model('PortofolioModel')->getProject();

    // kirim parameter ke method model() yang ada di core/Cotroller.php
        $this->view('portofolio/index', $data); 
    }
    public function pesan()
    {
        if ($this->model('PortofolioModel')->tampungPesan($_POST) > 0) {
            echo "
            <script>
            alert('Data Berhasil Dikirim')
            window.location.href= 'http://localhost:8080/portofolio_cici/public/'
            </script>
            ";
        } else{
            echo "Gagal Terkirim window.location.href='http://localhost:8080/portofolio_cici/public/'
            ";
        }
    }
}

