<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Dosen extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data dosen
    function index_get() {
        $id = $this->get('IdDosen');
        if ($id == '') {
            $dosen = $this->db->get('Dosen')->result();
        } 
        else {
            $this->db->where('IdDosen', $id);
            $dosen = $this->db->get('Dosen')->result();
        }
        $this->response($dosen, 200);
    }
   //Mengirim atau menambah data dosen baru
   function index_post() {
        $data = array(
                    // 'IdDosen'       => $this->post('id'),
                    'NamaDosen'     => $this->post('namadosen'),
                    'NoTelpDosen'   => $this->post('notelp'));
        $insert = $this->db->insert('Dosen', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put() {
        $id = $this->put('iddosen');
        $data = array(
                    'NamaDosen'     => $this->put('namadosen'),
                    'NoTelpDosen'   => $this->put('notelp'));
        $this->db->where('IdDosen', $id);
        $update = $this->db->update('Dosen', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete() {
        $id = $this->delete('iddosen');
        $this->db->where('IdDosen', $id);
        $delete = $this->db->delete('dosen');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>