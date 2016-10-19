<?php
class Mbarang extends CI_Model {

    var $tabel = 'pegawai';

    function __construct() {
        parent::__construct();
    }
	function get_allbarang() {
        return $this->db->query("SELECT status,pegawai.nama as nama_peg, kota.nama as nama_kota, kelamin.nama as nama_kel, posisi.nama as nama_posisi, id_pegawai, no_telp FROM pegawai,kota,kelamin,posisi where kota.id = pegawai.kota and kelamin.id=pegawai.kelamin and posisi.id_posisi=pegawai.id_posisi ")->result();
	}

    function get_barang_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('id_pegawai', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

    function get_update($id,$data) {

        $this->db->where('kode_brg', $id);
        $this->db->update($this->tabel, $data);

        return TRUE;
    }
    function del_barang($id) {
        $this->db->where('kode_brg', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }
}
?>
