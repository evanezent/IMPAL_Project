<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evanue</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/homepage_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/regis_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body class="container-fluid">

    <div id="form-register" class="d-flex justify-content-center">
        <form action="register_db" method="post">
            <div class="form-group">
                <label for="fullname">Nama Lengkap</label>
                <input type="input" class="form-control" id="fullname" name="fullname" required>
                <!-- <?= form_error("fullname", '<small class="text-danger pl-3">', '</small>'); ?>    -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                <?= form_error("email", '<small class="text-danger pl-3">', '</small>'); ?> 
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" rows="3" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Nomor HP</label>
                <input type="input" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="input" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="button" class="btn mx-auto"><a href="<?= base_url();?>">Back</a></button>
                <button type="submit" class="btn mx-auto">Register</button>
            </div>
        </form>
    </div>

</html>
</body>