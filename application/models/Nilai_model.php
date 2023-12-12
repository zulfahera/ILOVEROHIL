<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nilai_model extends CI_Model
{
    public $table = 'nilai';
    public $id = 'nilai.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {    
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();    
        // $this->db->select('n.*,m.nama_mhs as mahasiswa');
        // $this->db->from('nilai n');
        // $this->db->join('mahasiswa m', 'n.id_mhs = m.id');
        // $query = $this->db->get();
        // return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);;
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
        // $this->db->select('n.*,m.nama_mhs as mahasiswa');
        // $this->db->from('nilai n');
        // $this->db->join('mahasiswa m', 'n.id_mhs = m.id');
        // $this->db->join('user r', 'n.id_user = r.id');
        // $this->db->where('n.id',$id);
        // $query = $this->db->get();
        // return $query->row_array();
    }
    public function update($where, $data)
    {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function getUser()
    {
        $this->db->select('n.*,r.nama as nama');
        $this->db->from('nilai n');
        $this->db->join('user r', 'n.id_user = r.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByUser()
    {
        $id = $this->session->userdata('id');
        $this->db->from($this->table);;
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}