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
<!-- kotak login -->
<div class="container "> 
    <?php foreach($dataadmin as $da) {
    $uadm=$da->username;
    $padm=$da->password;}
    ;?>
    <form action="<?php echo base_url().'Vcontroller/validasi';?>" method="post">
    <div id="login "class="text-center">
    <h5>Login</h5>
    <br>
    <input type="hidden" name="uadmin" value="<?php echo $uadm ?>">
    <label>Username</label>
    <input type="text" name="name">
    <br><br>
    <label>Password</label>
    <input type="password" name="pw">
    <input type="hidden" name="pwadmin" value="<?php echo $padm ?>">
    <br><br>
    <button type="submit" class="btn btn-success" >Masuk</button>
    </div>
    </form>
            
</div>











     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- extra js -->
    <script src="js/index.js"></script>
</body>
</html>