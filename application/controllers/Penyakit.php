<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Penyakit';
        $data['penyakit'] = $this->penyakit->getPenyakit();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Penyakit';
        $data['kode'] = $this->penyakit->getKode();
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Penyakit';
        $data['penyakit'] = $this->penyakit->getPenyakitId($id);
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/ubah');
        $this->load->view('templates/footer');
    }

    public function gejala($id)
    {
        $data['title'] = 'Ubah Data Gejala';
        $data['penyakit'] = $this->penyakit->getPenyakitId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/gejala');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->penyakit->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('penyakit');
    }

    public function update($id)
    {
        $this->penyakit->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('penyakit');
    }

    public function delete($id)
    {
        $this->penyakit->delete($id);
        redirect('penyakit');
    }

    public function ubahRelasi()
    {
        $gejala_id = $this->input->post('gejalaId');
        $penyakit_id = $this->input->post('penyakitId');

        $data = [
            'penyakit_id' => $penyakit_id,
            'gejala_id' => $gejala_id
        ];

        $result = $this->db->get_where('relasi', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('relasi', $data);
        } else {
            $this->db->delete('relasi', $data);
        }
    }
}
