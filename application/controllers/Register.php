<?php
class Register extends CI_Controller
{

  public function view($page = 'register')
  {
    if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }

    $data['title'] = ucfirst($page); // Make a string's first character uppercase
    $this->load->helper('url');
    // $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
  }
}
