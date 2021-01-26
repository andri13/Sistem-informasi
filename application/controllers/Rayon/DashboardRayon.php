<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardRayon extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $data = array(
                    'gardu' => $this->admin->cek_garduR()->result(),
                    'trafo' => $this->admin->cek_trafoR()->result(),
                    'pengukuran' => $this->admin->cek_pengukuranR()->result(),

            );

            $this->load->view("Rayon/dashboardRayon", $data);         

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
