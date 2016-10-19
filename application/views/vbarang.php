<?php include('header.php');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Daftar Pegawai</b></div>
  <div class="panel-body">
    
      <a href="<?=base_url()?>barang/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
      <form action="<?=base_url()?>/barang/search" method="GET" class="col-md-4 pull-right"><input type="text" class="form-control pull-right col-md-2" name="keyword"><button class="btn btn-success pull-right">Search</button></form>
       <table class="table table-striped">
        <thead>
         <tr>
         <th>Id</th>
         <th>Nama</th>
         <th>No Telepon</th>
         <th>Kota</th>
         <th>Jenis Kelamin</th>
         <th>Posisi</th>
         <th>Status</th>
         <th></th>
         </tr>
        </thead>
        <tbody>
        <?php
        
        if(empty($qbarang)){ ?>
         <tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>
        <?php }else{
          $no=0;
          foreach($qbarang as $rowbarang){ $no++; ?>
         <tr>
          <td><?php echo $rowbarang->id_pegawai?></td>
          <td><?php echo $rowbarang->nama_peg; ?></td>
          <td><?php echo $rowbarang->no_telp; ?></td>
          <td><?php echo $rowbarang->nama_kota;?></td>
          <td><?php echo $rowbarang->nama_kel;?></td>
          <td><?php echo $rowbarang->nama_posisi;?></td>
          <?php if($rowbarang->status==0) {?>
          <td>Sudah Kawin</td>
          <?php }else{ ?>
            <td>Belum Kawin</td>
<?php
          } 
          ?>
           
        <td><a href="<?=base_url()?>barang/hapus/<?= $rowbarang->id_pegawai?>" class='btn btn-danger'>Delete</a></td>
        <td><a href='<?=base_url()?>barang/form/edit/<?= $rowbarang->id_pegawai?>' class='btn btn-primary'>Edit</a></td>

         </tr>

        <?php } }
        ?>

        </tbody>
       </table>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<?php include('footer.php');