<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Gejala';
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Gejala';
        $data['kode'] = $this->gejala->getKode();
        $data['id_gejala'] = $this->gejala->getKode();
        $data['kode_gejala'] = $this->gejala->getKode();
        $data['id']     = $this->gejala->getKode();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Gejala';
        $data['gejala'] = $this->gejala->getGejalaId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {

        $data = array(
            'id_gejala'     => $this->input->post('id_gejala'),
            'kode_gejala'     => $this->input->post('kode_gejala'),
            'gejala'         => $this->input->post('gejala')

        );
        $query = $this->db->insert('gejala', $data);
        if ($query = true) {

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
            role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
            redirect('gejala');
        }
    }

    public function update($id)
    {
        $this->gejala->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('gejala');
    }

    public function delete($id)
    {
        $this->gejala->delete($id);
        redirect('gejala');
    }



    public function simpan()
    {
        $data = array(
            'id_gejala'     => $this->input->post('id_gejala'),
            'kode_gejala'     => $this->input->post('kode_gejala'),
            'gejala'     => $this->input->post('gejala')


        );
        $query = $this->db->insert('gejala', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('gejala');
        }
    }
}
