<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- my css -->
    <link rel="stylesheet" href="http://localhost/vaccinego/assets/css/index.css">
    <title>Go Vaccine</title>
</head>
<body> 
<!-- nilai card -->
<?php  $vaksin1=0 ; $vaksin2=0 ;$vaksin3=0 ;?> 
   <?php     foreach($datauser as $du){
            $nilai=$du->vaksinke;
            if($nilai==1){
            $vaksin1+=1;
            }
            else if($nilai==2){
            $vaksin2+=1;
            }
            else if($nilai==3){
            $vaksin3+=1;
            }
  }?>
<!-- nav admin -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-white rounded fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GO VACCINE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <button type="button" class="btn btn-primary"> <?php echo anchor(base_url().'Vcontroller/index','Keluar'); ?></button>         
        </div>
    </nav>
    <br><br><br><br><br>

<!-- kotak info -->
<div class="container border d-flex justify-content-around ">
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header text-center">Jumlah Vaksinasi Pertama</div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo($vaksin1); ?></h5>
    <span class="card-text">Informasi Jumlah pasien yang telah mendapatkan vaksin pertama.</span>
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header text-center">Jumlah Vaksinasi Kedua</div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo($vaksin2); ?></h5>
    <span class="card-text">Informasi Jumlah pasien yang telah mendapatkan vaksin kedua.</span>
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header text-center">Jumlah Vaksinasi Ketiga</div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo($vaksin3); ?></h5>
    <span class="card-text">Informasi Jumlah pasien yang telah mendapatkan vaksin ketiga.</span>
  </div>
</div>          
</div>
<br><br>
<!-- table1 -->
<div class="container">
<h3 class="text-center fotn">Data Faskes</h3>
<table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th scope="col" class="table-danger text-dark">KodeFaskes</th>
      <th scope="col" class="table-danger text-dark">Nama Faskes</th>
      <th scope="col" class="table-danger text-dark">Alamat Faskes</th>
      <th scope="col" class="table-danger text-dark">Nama Pic</th>
      <th scope="col" class="table-danger text-dark">Date</th>
      <th scope="col" class="table-danger text-dark">Jenis Vaksin</th>
      <th scope="col" class="table-danger text-dark">Sisa Kuota</th>
      <th scope="col" class="table-danger text-dark">Ubah Data</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($datafaskes as $df){ ?>
    <tr>
      <th scope="row"><?php echo $df->kodefaskes ?></th>
      <td><?php echo ($df->namafaskes); ?></td>
      <td><?php echo ($df->alamatfaskes); ?></td>
      <td><?php echo ($df->namapic); ?></td>
      <td><?php echo ($df->date); ?></td>
      <td><?php echo ($df->jenisvaksin); ?></td>
      <td><?php echo ($df->sisakuota); ?></td>
      <td>
      <button type="button" class="btn btn-danger m-2"> <?php echo anchor(base_url()."Vcontroller/delete_data_faskes/$df->kodefaskes","Hapus"); ?></button>
      <button type="button" class="btn btn-success m-2"> <?php echo anchor(base_url()."Vcontroller/page_edit_faskes/$df->kodefaskes","Edit"); ?></button>
      </td>
    </tr>

    <?php } ?>
    <tr>
      <td colspan="8"><center><button type="button" class="btn btn-info m-2"> <?php echo anchor(base_url()."Vcontroller/page_add_faskes","Tambah Data"); ?></button></center></td>
    </tr>
  </tbody>
</table>
</div>
<br><br>
<!-- table2 -->
<div class="container">
<h3 class="text-center fotn">Data Pendaftar</h3>
<table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th scope="col" class="table-danger text-dark">NIK</th>
      <th scope="col" class="table-danger text-dark">Nama</th>
      <th scope="col" class="table-danger text-dark">Tempat Lahir</th>
      <th scope="col" class="table-danger text-dark">Jenis Kelamin</th>
      <th scope="col" class="table-danger text-dark">Tanggal Lahir</th>
      <th scope="col" class="table-danger text-dark">No.Telp</th>
      <th scope="col" class="table-danger text-dark">No.WA</th>
      <th scope="col" class="table-danger text-dark">Email</th>
      <th scope="col" class="table-danger text-dark">Pekerjaan</th>
      <th scope="col" class="table-danger text-dark">Vaksin Ke</th>
      <th scope="col" class="table-danger text-dark">Nama Faskes</th>
      <th scope="col" class="table-danger text-dark">Ubah Data</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datauser as $du){ ?>
  <tr>
      <th scope="row"><?php echo($du->nik);?></th>
      <td><?php echo($du->nama);?></td>
      <td><?php echo($du->tempatlahir);?></td>
      <td><?php echo($du->jeniskelamin);?></td>
      <td><?php echo($du->tanggallahir);?></td>
      <td><?php echo($du->notelp);?></td>
      <td><?php echo($du->nowa);?></td>
      <td><?php echo($du->email);?></td>
      <td><?php echo($du->pekerjaan);?></td>
      <td><?php echo($du->vaksinke);?></td>
      <td><?php echo($du->namafaskes);?></td>
      <td>
      <button type="button" class="btn btn-danger m-2"> <?php echo anchor(base_url()."Vcontroller/delete_data_user/$du->nik","Hapus"); ?></button>
      <button type="button" class="btn btn-success m-2"> <?php echo anchor(base_url()."Vcontroller/page_edit_user/$du->nik","Edit"); ?></button>
      </td>
      
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
<!-- footer -->
<div class="container-fluid border-top shadow smoke" id="kontak">
        <div class="card text-center border-0 ">
          <div class="card-body ">
            <p class="card-text">© Copyright <b class="text-secondary">Go Vaccine</b>. All Rights Reserved</p>
          </div>
        </div>
</div>









     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- extra js -->
    <script src="js/index.js"></script>
</body>
</html>