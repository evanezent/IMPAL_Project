<html>

<body class="container-fluid">
    <!-- Check session -->
    <?php
    if (!$_SESSION['user']) {
        redirect('admin/login');
    }
    ?>
    <!-- EVENT -->
    <div id="admin-event" class="container">
        <!-- Perulangan for each -->
        <?php foreach ($events as $ev) : ?>
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/<?php echo $ev['poster'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        <?php echo $ev['namaEvent'] ?>
                    </li>
                    <li>
                        <?php echo $ev['tanggalEvent'] ?>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 action">
                <div class="btn-action">
                    <button class="btn btn-sm btn-success"><a href="<?php echo base_url('Admin/validationAccept/');echo $ev['idEvent'] ?>">Accept</a></button>
                    <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('Admin/validationDecline/');echo $ev['idEvent'] ?>">Decline</a></button>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <!-- end for each -->
    

    <!-- TICKET -->
    <div id="admin-ticket" class="container" style="display: none">
        <?php foreach ($tickets as $tc) : ?>
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/<?php echo $tc['poster'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        <?php echo $tc['namaEvent'] ?>
                    </li>
                    <li>
                        <?php echo $tc['tanggalEvent'] ?>
                    </li>
                    <li>
                        <?php echo $tc['contactPerson'] ?>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 action">
                <div class="btn-action">
                    <button class="btn btn-sm btn-success"><a href="">Accept</a></button>
                    <button class="btn btn-sm btn-danger"><a href="">Decline</a></button>
                </div>
            </div>
        </div>
        <!-- end for each -->
    <?php endforeach ?>
    </div>
    </div>
</body>

</html>