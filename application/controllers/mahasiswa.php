<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data Mahasiswa
    function index_get() {
        $id = $this->get('nim');
        if ($id == '') {
            $Mahasiswa = $this->db->get('Mahasiswa')->result();
        } 
        else {
            $this->db->where('NIM', $id);
            $Mahasiswa = $this->db->get('Mahasiswa')->result();
        }
        $this->response($Mahasiswa, 200);
    }
   //Mengirim atau menambah data Mahasiswa baru
   function index_post() {
        $data = array(
                    'NIM'     => $this->post('nim'),
                    'NamaMahasiswa'     => $this->post('namamahasiswa'),
                    'NoTelpMahasiswa'   => $this->post('notelp'));
        $insert = $this->db->insert('Mahasiswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put() {
        $id = $this->put('nim');
        $data = array(
                    'NIM'               => $this->put('nimbaru'),
                    'NamaMahasiswa'     => $this->put('namamahasiswa'),
                    'NoTelpMahasiswa'   => $this->put('notelp'));
        $this->db->where('NIM', $id);
        $update = $this->db->update('Mahasiswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete() {
        $id = $this->delete('nim');
        $this->db->where('NIM', $id);
        $delete = $this->db->delete('Mahasiswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>