<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Konsultasi';
        $data['jenis'] = $this->kucing->getJenis();
        $data['namakucing'] = $this->kucing->getKucing();

        $this->load->view('konsultasi/index', $data);
    }

    public function add()
    {
        $awal = 'G01';

        $this->user->insert();
        redirect('konsultasi/pertanyaan/' . $awal);
    }

    public function pertanyaan($kode)
    {
        $this->db->select('*');
        $this->db->from('rule');
        $this->db->join('gejala', 'gejala.id_gejala = rule.gejala_id');
        $this->db->where('kode_gejala', $kode);

        $data['pertanyaan'] = $this->db->get()->row_array();

        $this->load->view('konsultasi/pertanyaan', $data);
    }
    public function olah()
    {
        $kode = $this->input->post('jawab');
        $huruf = substr($kode, 0, 1);
        $id = $this->user->getId() - 1;

        if ($huruf == 'P') {
            $this->user->update($id, $kode);
            redirect('konsultasi/hasil');
        } else {
            redirect('konsultasi/pertanyaan/' . $kode);
        }
    }
    public function hasil()
    {
        $data['title'] = 'hasil';
        $id = $this->user->getId() - 1;
        $data['hasil'] = $this->user->getHasil($id);
        $kode = $data['hasil']['kode_penyakit'];
        $data['gejala'] = $this->gejala->getGejalaPenyakit($kode);

        $this->load->view('konsultasi/hasil', $data);
    }
}
