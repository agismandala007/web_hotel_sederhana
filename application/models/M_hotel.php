<?php
class M_hotel extends CI_Model
{
    function get()
    {
        $query = $this->db->get('kamar');
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('pesan_kamar', $data);
    }

    function getTamu()
    {
        $query = $this->db->get('pesan_kamar');
        return $query->result();
    }
}
