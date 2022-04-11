<?php

class User_model extends CI_model
{
    public function getHasil($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('penyakit', 'penyakit.kode_penyakit = user.penyakit_kode');
        $this->db->where('user.id', $id);
        return $this->db->get()->row_array();
    }

    public function getId()
    {
        $this->db->select_max('id', 'id');
        $query = $this->db->get('user')->row_array();

        $data = $query['id'];
        $kode = (int) substr($data, 0);
        $kode++;

        return $kode;
    }

    public function insert()
    {
        $id = $this->getId();

        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'jenis' => $this->input->post('jenis'),
            'namakucing' => $this->input->post('namakucing')
        ];

        $this->db->insert('user', $data);
    }

    public function update($id, $kode)
    {
        $data = [
            'penyakit_kode' => $kode
        ];

        $this->db->update('user', $data, ['id' => $id]);
    }
}
