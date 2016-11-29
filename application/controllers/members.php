<?php

class Members extends CI_Controller
{
    public function index()
    {
        $data['main_view'] = 'members/members_view';
        $this->load->view('layout/main', $data);
    }
}