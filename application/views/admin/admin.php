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
                        <img src="<?php base_url(); ?>upload/event/<?php echo $ev['poster'] ?>" alt="">
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
                        <?php if ($ev['Validasi'] != 1){ ?>
                        <button class="btn btn-sm btn-success"><a href="<?php echo base_url('Admin/validationAcceptEvent/');
                                                                            echo $ev['idEvent'] ?>">Accept</a></button>
                        <?php } ?>
                        <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('Admin/validationDeclineEvent/');
                                                                            echo $ev['idEvent'] ?>">Decline</a></button>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <!-- end for each -->


    <!-- TICKET -->
    <div id="admin-ticket" class="container" style="display:none;">
        <?php foreach ($tickets as $tc) : ?>
            <div class="row">
                <div class="col-md-4 gambar">
                    <div class="col-gambar">
                        <img src="<?php base_url(); ?>upload/ticket/<?php echo $tc['poster'] ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 penjelasan">
                    <ul>
                        <li>
                            <?php echo $tc['namaTicket'] ?>
                        </li>
                        <li>
                            <?php echo $tc['tanggalTicket'] ?>
                        </li>
                        <li>
                            <?php echo $tc['contactPerson'] ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 action">
                    <div class="btn-action">
                    <?php if ($tc['Validasi'] != 1){ ?>
                        <button class="btn btn-sm btn-success"><a href="<?php echo base_url('Admin/validationAcceptTicket/');
                                                                            echo $tc['idTicket'] ?>">Accept</a></button>
                    <?php } ?>
                        <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('Admin/validationDeclineTicket/');
                                                                            echo $tc['idTicket'] ?>">Decline</a></button>
                    </div>
                </div>
            </div>
            <!-- end for each -->
        <?php endforeach ?>
    </div>
</body>

</html>