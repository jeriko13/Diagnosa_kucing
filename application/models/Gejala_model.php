<?php

class Gejala_model extends CI_model
{
    public function getKode()
    {
        $this->db->select_max('kode_gejala', 'kode');
        $query = $this->db->get('gejala')->row_array();

        $data = $query['kode'];
        $noUrut = (int) substr($data, 1, 2);
        $noUrut++;

        $kode = 'G' . sprintf('%02s', $noUrut);
        return $kode;
    }

    public function getGejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getGejalaId($id)
    {
        return $this->db->get_where('gejala', array('id_gejala' => $id))->row_array();
    }

    public function getGejalaKode($kode)
    {
        return $this->db->get_where('gejala', array('kode_gejala' => $kode))->row_array();
    }

    public function getGejalaPenyakit($kode)
    {
        $this->db->select('*');
        $this->db->from('relasi');
        $this->db->join('penyakit', 'relasi.penyakit_id = penyakit.id_penyakit');
        $this->db->join('gejala', 'gejala.id_gejala = relasi.gejala_id');
        $this->db->where('penyakit.kode_penyakit', $kode);

        return $this->db->get()->result_array();
    }

    public function insert()
    {
        $data = [
            'kode_gejala' => $this->input->post('kode'),
            'gejala' => $this->input->post('gejala')
        ];

        $this->db->insert('gejala', $data);
    }

    public function update($id)
    {
        $data = [
            'gejala' => $this->input->post('gejala')
        ];

        $this->db->update('gejala', $data, ['id_gejala' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('gejala', ['id_gejala' => $id]);
    }
}
