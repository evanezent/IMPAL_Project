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
        <?php for ($i = 0; $i < count($events, 0); $i = $i + 2) { ?>
            <div class="row" id="ads">
                <?php foreach (array_slice($events, $i, 2) as $ev) : ?>
                    <div class="col-md-6 justify-content-center d-flex">
                        <div class="card rounded">
                            <div class="card-image" style="height: 20em!important;">
                                <img class="img-fluid" src="<?php base_url(); ?>upload/event/<?php echo $ev['poster'] ?>" alt="UNKNOWN" />
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5><?php echo $ev['namaEvent'] ?></h5>
                                    <h6><?php echo $ev['tanggalEvent'] ?></h6>

                                </div>
                                <div class="btn-action">
                                    <?php if ($ev['Validasi'] != 1) { ?>
                                        <button class="btn btn-sm btn-success"><a href="<?php echo base_url('Admin/validationAcceptEvent/');
                                                                                                    echo $ev['idEvent'] ?>">Accept</a></button>
                                    <?php } ?>
                                    <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('Admin/validationDeclineEvent/');
                                                                                            echo $ev['idEvent'] ?>">Decline</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- NYOBA =============================================================== -->

            </div>
        <?php } ?>
    </div>
    <!-- end for each -->


    <!-- TICKET -->
    <div id="admin-ticket" class="container" style="display:none;">
        <?php for ($i = 0; $i < count($tickets, 0); $i = $i + 2) { ?>
            <div class="row" id="ads">
                <?php foreach (array_slice($tickets, $i, 2) as $tc) : ?>
                    <div class="col-md-6 justify-content-center d-flex">
                        <div class="card rounded">
                            <div class="card-image">
                                <img class="img-fluid" style="height: 12em!important" src="<?php base_url(); ?>upload/ticket/<?php echo $tc['poster'] ?>" alt="UNKNOWN" />
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5><?php echo $tc['namaTicket'] ?></h5>
                                    <h6><?php echo $tc['tanggalTicket'] ?></h6>
                                    <h6><?php echo $tc['contactPerson'] ?></h6>

                                </div>
                                <div class="btn-action">
                                    <?php if ($tc['Validasi'] != 1) { ?>
                                        <button class="btn btn-sm btn-success"><a href="<?php echo base_url('Admin/validationAcceptTicket/');
                                                                                                    echo $tc['idTicket'] ?>">Accept</a></button>
                                    <?php } ?>
                                    <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('Admin/validationDeclineTicket/');
                                                                                            echo $tc['idTicket'] ?>">Decline</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- NYOBA =============================================================== -->
            </div>
        <?php } ?>


    </div>
</body>

</html>