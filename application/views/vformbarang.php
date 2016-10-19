<?php $this->load->view('header');?>
<?php
if($aksi=='aksi_add'){
    $id="";
    $nama="";
    $telp="";
    $kota="";
    $kelamin="";
    $posisi="";
}else{
  foreach($qdata as $rowdata){
    $id=$rowdata->id_pegawai;
    $nama=$rowdata->nama;
    $telp=$rowdata->no_telp;
    $kota=$rowdata->kota;
    $kelamin=$rowdata->kelamin;
    $posisi=$rowdata->id_posisi;
    }
}

?>
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Barang</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>barang/form/<?=$aksi?>" method="post">
       <table class="table table-striped">

         <tr>
          <td style="width:15%;">ID</td>
          <td>
            <div class="col-sm-2">
                <input type="text" name="id" class="form-control" value="<?=$id?>" disabled>
            </div>
            </td>
         </tr>
         <tr>
          <td>Nama</td>
          <td>
          <div class="col-sm-4">
            <input type="text" name="nama" class="form-control" value="<?=$nama?>">
          </div>
          </td>
         </tr>
       <tr>
          <td>No Telp</td>
          <td>
           <div class="col-sm-4">
            <input type="text" name="telp" class="form-control" value="<?=$telp?>">
            </div>
           </td>
         </tr>
         <tr>
          <td>Kota</td><?=$kota?>
          <td>
            <div class="col-sm-2">
              <select name="kota">
              <option value="1" <?php if($kota=="1")echo "selected='selected'"?>>Malang</option>
              <option value="2" <?php if($kota=="2")echo "selected='selected'"?>>Nganjuk</option>
              <option value="3" <?php if($kota=="3")echo "selected='selected'"?>>Blitar</option>
              <option value="4" <?php if($kota=="4")echo "selected='selected'"?>>Tulungagung</option>
              <option value="5" <?php if($kota=="5")echo "selected='selected'"?>>Surabaya</option>
            </select>
            </div>
            </td>
         </tr>
         <tr>
          <td>Kelamin</td>
          <td>
           <div class="col-sm-6">
            <select name="jenis_kelamin">
              <option value="1">Laki-Laki</option>
              <option value="2">Perempuan</option>
            </select>
           </div>
            </td>
         </tr>
         <tr>
         <tr>
          <td>Posisi</td>
          <td>
           <div class="col-sm-6">
            <select name="posisi">
              <option value="1">IT</option>
              <option value="2">HRD</option>
              <option value="3">Keuangan</option>
              <option value="4">Product</option>
              <option value="5">Marketing</option>
            </select>
           </div>
            </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<?php $this->load->view('footer');?>