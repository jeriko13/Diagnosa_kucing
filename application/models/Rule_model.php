<?php

class Rule_model extends CI_model
{
    public function getKode()
    {
        $this->db->select_max('kode', 'kode');
        $query = $this->db->get('penyakit')->row_array();

        $data = $query['kode'];
        $noUrut = (int) substr($data, 1, 2);
        $noUrut++;

        $kode = 'G' . sprintf('%02s', $noUrut);
        return $kode;
    }

    public function getAllRule()
    {
        $this->db->select('*');
        $this->db->from('rule');
        $this->db->join('gejala', 'gejala.id_gejala = rule.gejala_id');
        return $this->db->get()->result_array();
    }

    public function getAllRuleId($id)
    {
        $this->db->select('*');
        $this->db->from('rule');
        $this->db->join('gejala', 'gejala.id_gejala = rule.gejala_id', 'left');
        $this->db->join('penyakit', 'penyakit.id_penyakit = rule.penyakit_id', 'left');
        $this->db->where('id', $id);

        return $this->db->get()->row_array();
    }

    public function getRule()
    {
        return $this->db->get('rule')->result_array();
    }

    public function getDataParent($kode_parent)
    {
        if ($kode_parent == NULL) {
            return 'Pilih Gejala';
        } else {
            $data = $this->db->get_where('gejala', array('kode_gejala' => $kode_parent))->row_array();
            return $data['kode_gejala'] . ' - ' . $data['gejala'];
        }
    }

    public function getDataYa($kode_ya)
    {
        if ($kode_ya == NULL) {
            return 'Pilih Gejala';
        } else {
            $data = $this->db->get_where('gejala', array('kode_gejala' => $kode_ya))->row_array();
            return $data['kode_gejala'] . ' - ' . $data['gejala'];
        }
    }

    public function getDataTidak($kode_tidak)
    {
        if ($kode_tidak == NULL) {
            return 'Pilih Gejala';
        } else {
            $data = $this->db->get_where('gejala', array('kode_gejala' => $kode_tidak))->row_array();
            return $data['kode_gejala'] . ' - ' . $data['gejala'];
        }
    }

    public function insert()
    {
        if ($this->input->post('gejala_parent') === "") {
            $gejala_parent = null;
        } else {
            $gejala_parent = $this->input->post('gejala_parent');
        }
        if ($this->input->post('gejala_ya') === "") {
            $gejala_ya = null;
        } else {
            $gejala_ya = $this->input->post('gejala_ya');
        }
        if ($this->input->post('gejala_tidak') === "") {
            $gejala_tidak = null;
        } else {
            $gejala_tidak = $this->input->post('gejala_tidak');
        }

        $data = [
            'gejala_id' => $this->input->post('gejala_id'),
            'parent' => $gejala_parent,
            'ya' => $gejala_ya,
            'tidak' => $gejala_tidak
        ];

        $this->db->insert('rule', $data);
    }

    public function update($id)
    {
        if ($this->input->post('gejala_parent') === "") {
            $gejala_parent = null;
        } else {
            $gejala_parent = $this->input->post('gejala_parent');
        }
        if ($this->input->post('gejala_ya') === "") {
            $gejala_ya = null;
        } else {
            $gejala_ya = $this->input->post('gejala_ya');
        }
        if ($this->input->post('gejala_tidak') === "") {
            $gejala_tidak = null;
        } else {
            $gejala_tidak = $this->input->post('gejala_tidak');
        }

        $data = [
            'gejala_id' => $this->input->post('gejala_id'),
            'parent' => $gejala_parent,
            'ya' => $gejala_ya,
            'tidak' => $gejala_tidak
        ];

        $this->db->update('rule', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('rule', ['id' => $id]);
    }
}
