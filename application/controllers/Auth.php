<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->load->view('auth/login');
    }
    public function dashboard()
    {
        $this->load->view('auth/dashboard');
    }
    public function khs()
    {
        $this->load->view('auth/khs');
    }
    public function semester1()
    {
        $this->load->view('auth/semester1');
    }
    public function semester2()
    {
        $this->load->view('auth/semester2');
    }
    public function semester3()
    {
        $this->load->view('auth/semester3');
    }
    public function blank()
    {
        $this->load->view('auth/blank');
    }
    public function logout()
    {
        redirect('auth');
    }
}
