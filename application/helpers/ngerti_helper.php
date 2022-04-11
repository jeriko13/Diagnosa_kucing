<?php

function check_relasi($penyakit_id, $gejala_id)
{
    $ci = get_instance();

    $ci->db->where('penyakit_id', $penyakit_id);
    $ci->db->where('gejala_id', $gejala_id);
    $result = $ci->db->get('relasi');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
