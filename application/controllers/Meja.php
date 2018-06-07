<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja extends CI_Controller {
    function __construct(){
      parent:: __construct();
      $this->load->model('M_meja');
      $this->load->helper('url');
  }

    function index(){

      $this->load->model('M_meja');
      $data['meja']= $this->M_meja->tampil_meja();
      $this->load->view('v_meja', $data);
    }

    function tambah(){
      $this->load->view('v_meja');
    }

    function tambah_meja(){
      $data = $this->input->post('terisi');
      $where = array(
                  'no_meja' => $data
                 );
      $dataalamat = array(
                 'status' => 'terisi'
                   );
      $this->db->where($where);
     $this->db->update('meja', $dataalamat);
        redirect(site_url('login1'));
      }




}

?>
