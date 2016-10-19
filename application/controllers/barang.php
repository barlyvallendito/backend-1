<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	/*****
     | CRUD barang
     | controller barang view, create, update, delete
     | by g2tech
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('mbarang');
        $this->load->helper('form','url');
    }

	public function index()
	{
	    $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
	    $data['qbarang'] = $this->mbarang->get_allbarang(); //query model semua barang

		$this->load->view('vbarang',$data);

	}

    public function form(){
    	//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);
        //print $mau_ke;

		//ambil variabel
		$id     				= addslashes($this->input->post('id'));
		$nama					= addslashes($this->input->post('nama'));
		$telp					= addslashes($this->input->post('telp'));
		$kota					= addslashes($this->input->post('kota'));
		$kelamin				= addslashes($this->input->post('jenis_kelamin'));
		$posisi				    = addslashes($this->input->post('posisi'));
		

		if ($mau_ke == "add") {
		    $data['title'] = 'Tambah barang';
		    $data['aksi'] = 'aksi_add';
            $this->load->view('vformbarang',$data);
		} else if ($mau_ke == "edit") {
			$data['qdata']	= $this->mbarang->get_barang_byid($idu);
			$data['title'] = 'Edit barang';
		    $data['aksi'] = 'aksi_edit';
            $this->load->view('vformbarang',$data);
		} else if ($mau_ke == "aksi_add") {
            $id_peg = md5(time());
			$data = array(
                'id_pegawai'   => $id_peg,
                'nama'  => $nama,
                'no_telp' => $telp,
                'kota'=> $kota,
                'kelamin'    => $kelamin,
                'id_posisi'     => $posisi,
                'status'     => '1',
                
            );
            $this->mbarang->get_insert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>");
			redirect('barang');
        } else if ($mau_ke == "aksi_edit") {
          $data = array(
                'nama'  => $nama,
                'no_telp' => $telp,
                'kota'=> $kota,
                'kelamin'    => $kelamin,
                'id_posisi'     => $posisi,
                'status'  => '1',
            );
            $this->mbarang->get_update($id,$data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>");
			redirect('barang');
		}

    }
    // fungsi detail
    public function detail($id){
        $data['title'] = 'Detail Barang'; //judul title
	    $data['qbarang'] = $this->mbarang->get_barang_byid($id); //query model semua barang

		$this->load->view('vdetbarang',$data);
    }

    // fungsi hapus
    public function hapus($gid){

        $this->mbarang->del_barang($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Barang berhasil dihapus</div>");
        redirect('barang');
	}
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */