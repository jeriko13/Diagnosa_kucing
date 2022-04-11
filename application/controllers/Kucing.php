<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kucing extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Kucing';
        $data['jenis'] = $this->kucing->getJenis();
        $data['namakucing'] = $this->kucing->getKucing();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kucing/index');
        $this->load->view('templates/footer');
    }

    public function insert($parameter)
    {
        $this->kucing->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('smarthphone');
    }

    public function update($id)
    {
        $this->smarthphone->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('kucing');
    }

    public function delete($id)
    {
        $this->kucing->delete($id);
        redirect('kucing');
    }
    public function tambah_namakucing()
    {
        $data['title'] = 'Tambah Data Kucing';
        $data['id']     = $this->kucing->id_namakucing();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kucing/tambah_namakucing');
        $this->load->view('templates/footer');
    }
    public function tambah_jenis()
    {
        $data['title'] = 'Tambah Data Jenis';
        $data['id']     = $this->kucing->id_jenis();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kucing/tambah_jenis');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'id'     => $this->input->post('id'),
            'nama'     => $this->input->post('nama')

        );
        $query = $this->db->insert('jenis', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('kucing');
        }
    }

    public function simpan2()
    {
        $data = array(
            'id'     => $this->input->post('id'),
            'nama'     => $this->input->post('nama'),
            'jenis_id'     => $this->input->post('jenis_id')

        );
        $query = $this->db->insert('seri', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('kucing');
        }
    }
}
