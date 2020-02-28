<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $is_login   = $this->session->userdata('is_login');
        $this->id   = $this->session->userdata('id');
        // jika belum login akan diarahkan ke halaman home
        if (!$is_login) {
            redirect(base_url());
            return;
        }
    }

    public function index()
    {
        $data['title']      = 'Profile';
        $data['content']    = $this->profile->where('id', $this->id)->first();
        $data['page']       = 'pages/profile/index';

        return $this->view($data);
    }
}

/* End of file Profile.php */
