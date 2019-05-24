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

<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>user">evanue</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <div class="form-group d-flex">
                        <select class="form-control" id="sel1">
                            <option selected>pilih menu</option>
                            <option><a href="event">Event</a></option>
                            <option><a href="ticket">Ticket</a></option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="user_button">
                <a href="#" class="btn btn-sm" role="button" data-toggle="modal" data-target="#modalLogin">Login</a>
                <a href="#" class="btn btn-sm" role="button">Register</a>
            </div>
        </div>
    </nav>
</header>

<body>
    <!-- <div id="background-register">
        <img src="<?= base_url(); ?>asset/background_register.jpg" alt="UNKNOWN" width="100%">
    </div> -->

    <div id="form-register" class="container">
        <form>
            <div class="row">
                <div class="col">
                    <h6>Nama Lengkap</h6>
                </div>
                <div class="col">
                    <input type="input" class="form-control" id="fullname">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h6>Email</h6>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h6>Alamat</h6>
                </div>
                <div class="col">
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>Nomor HP</h6>
                </div>
                <div class="col">
                    <input type="input" class="form-control" id="phone">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>Username</h6>
                </div>
                <div class="col">
                    <input type="input" class="form-control" id="username">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>Password</h6>
                </div>
                <div class="col">
                    <input type="password" class="form-control" id="password">
                </div>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Register</button>
        </form>
    </div>

</html>
</body>
