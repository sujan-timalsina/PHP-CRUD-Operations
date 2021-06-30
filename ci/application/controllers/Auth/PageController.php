<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function userpage()
    {
        $this->load->view('userpage');
    }
}
