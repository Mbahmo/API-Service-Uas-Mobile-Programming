<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Mahasiswa_android extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    //Menampilkan data Mahasiswa
    function index_get() { 
        $Mahasiswa = $this->db->get('Mahasiswa')->result();
        $this->response(array("result" => $Mahasiswa, 200));
    }
}
?>