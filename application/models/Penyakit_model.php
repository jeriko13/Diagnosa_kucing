<?php

class Penyakit_model extends CI_model
{
    public function getKode()
    {
        $this->db->select_max('kode_penyakit', 'kode');
        $query = $this->db->get('penyakit')->row_array();

        $data = $query['kode'];
        $noUrut = (int) substr($data, 1, 2);
        $noUrut++;

        $kode = 'K' . sprintf('%02s', $noUrut);
        return $kode;
    }

    public function getPenyakit()
    {
        return $this->db->get('penyakit')->result_array();
    }

    public function getPenyakitId($id)
    {
        return $this->db->get_where('penyakit', array('id_penyakit' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'kode_penyakit' => $this->input->post('kode'),
            'penyakit' => $this->input->post('penyakit'),
            'solusi' => $this->input->post('solusi')
        ];

        $this->db->insert('penyakit', $data);

        $this->db->select_max('id_penyakit', 'id');
        $id = $this->db->get('penyakit')->row_array();

        $check = $this->input->post('gejala');
        foreach ($check as $object) {
            $data = [
                'penyakit_id' => $id['id'],
                'gejala_id' => $object
            ];
            $this->db->insert('relasi', $data);
        }
    }

    public function update($id)
    {
        $data = [
            'penyakit' => $this->input->post('penyakit'),
            'solusi' => $this->input->post('solusi')
        ];

        $this->db->update('penyakit', $data, ['id_penyakit' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('penyakit', ['id_penyakit' => $id]);
        $this->db->delete('relasi', ['penyakit_id' => $id]);
    }
}
