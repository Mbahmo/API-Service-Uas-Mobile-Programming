<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Dosen_android extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    //Menampilkan data dosen
    function index_get() { 
        $dosen = $this->db->get('Dosen')->result();
        $this->response(array("result" => $dosen, 200));
    }
}
?>