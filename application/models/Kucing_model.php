<?php

class Kucing_model extends CI_model
{
    public function getJenis()
    {
        return $this->db->get('jenis')->result_array();
    }

    public function getKucing()
    {
        return $this->db->get('namakucing')->result_array();
    }

    public function insert($parameter)
    {
        if ($parameter == 1) {
        } else {
        }
    }
    public function addJenis()
    {
        $this->db->select_max('nama', 'jenis');
        $query = $this->db->get('jenis')->row_array();

        $data = $query['jenis'];
        $noUrut = (int) substr($data, 1, 2);
        $noUrut++;

        $jenis = 'j' . sprintf('%02s', $noUrut);
        return $jenis;
    }

    public function id_jenis()
    {
        $this->db->select('RIGHT(jenis.id,3) as kode', FALSE);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('jenis');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "M" . $kodemax;
        return $kodejadi;
    }
    public function id_namakucing()
    {
        $this->db->select('RIGHT(namakucing.id,3) as kode', FALSE);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('namakucing');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "S" . $kodemax;
        return $kodejadi;
    }
}
