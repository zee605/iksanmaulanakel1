<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- font custom google font-->
      <!-- viga -->
      <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
      <!-- poppins -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- my css -->
    <link rel="stylesheet" href="http://localhost/vaccinego/assets/css/index.css">
    
    <title>Go Vaccine</title>
  
</head>
  <body>
      <!-- CONTAINER LOGO -->
        <div class="container-fluid">
        <center>
          <a class="navbar-brand mt-2" href="#">GO VACCINE</a>
        </center>
        </div>
        <br>
      <!-- CONTAINER  -->
      <div class="containerx jc d-flex shadow p-3 mb-5 bg-white rounded">
      <!-- FORM -->
      <form action="<?php echo base_url().'Vcontroller/update_data_faskes';?>" method="post">
            <div class="form-group">
              <h3 class="text-center fotn">Form Ubah Data Faskes Penyedia Vaksin Covid-19</h3>
              <!-- 1 -->
              <label for="">Kode Faskes</label>
              <input type="text" class="form-control" name="kf" readonly value="<?php echo $datafaskes->kodefaskes ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <!-- 2 -->
              <label for="">Nama Faskes</label>
              <input type="text" class="form-control" name="nf" value="<?php echo $datafaskes->namafaskes ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <!-- 3 -->
              <label for="">Alamat Faskes</label>
              <input type="text" class="form-control" name="af" value="<?php echo $datafaskes->alamatfaskes ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <!-- 4 -->
              <label for="">Nama Pic</label>
              <input type="text" class="form-control" name="np" value="<?php echo $datafaskes->namapic ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <!-- 5 -->
              <label for="">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="<?php echo $datafaskes->date ;?>" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default" Required>
              <!-- 8 -->
              <label for="">Jenis Vaksin yang tersedia</label>
              <input type="text" class="form-control" name="jv" value="<?php echo $datafaskes->jenisvaksin ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <!-- 9 -->
              <label for="">Sisa Kuota</label>
              <input type="text" class="form-control" name="sk" value="<?php echo $datafaskes->sisakuota ;?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" Required>
              <br><br>
              <center>
                <div class="container d-flex justify-content-around">
                <button type="button" class="btn btn-danger"> <?php echo anchor(base_url().'Vcontroller/page_admin','Kembali'); ?></button>
                <button type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
              </center>
        </form>
        
        </div>



















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>