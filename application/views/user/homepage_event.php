<body class="container-fluid">
    <div class="searchbar">
        <input class="search_input" type="text" name="keyword" placeholder="Search Event...">
        <a href="<?php echo base_url(); ?>User/searchEvent" class="search_icon"><i class="fas fa-search"></i></a>
    </div>

    <div id="event-slide">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <!-- start for i -->
                <?php $i = 0;
                foreach ($events as $ev) :
                    ?>
                    <?php if ($ev['Validasi'] == 1) { ?>
                        <li data-target="#demo" data-slide-to="<?php echo $i ?>" class="active"></li>

                    <?php $i++;
                        } ?>
                <?php endforeach ?>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner text-center">
                <!-- start foreach -->
                <!-- UDAH JALAN TP HARUS DI KASIH 1 DATA DEFAULT -->
                <div class="carousel-item active">
                    <div class="bg-carousel" style="background:url('<?php echo base_url(); ?>upload/event/event4.jpg') ;filter: blur(8px);-webkit-filter: blur(8px);">
                    </div>
                    <div class="img-carousel">
                        <img src="<?php echo base_url(); ?>upload/event/event4.jpg" alt="UNKNOWN" height="100%">
                    </div>
                </div>
                <?php foreach ($events as $ev) : ?>
                    <?php if ($ev['Validasi'] == 1) { ?>
                        <div class="carousel-item">
                            <div class="bg-carousel" style="background:url('<?php echo base_url(); ?>upload/event/<?php echo $ev['poster'] ?>');filter: blur(8px);-webkit-filter: blur(8px);">
                            </div>
                            <div class="img-carousel">
                                <img src="<?php echo base_url(); ?>upload/event/<?php echo $ev['poster'] ?>" alt="UNKNOWN" height="100%">
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach ?>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
    <div class="jumbotron text-center mt-2">
        <div class="title-section">
            <h3>Events</h3>
        </div>
    </div>
    <div id="list" class="container d-block">
        <!-- start foreach -->
        <?php for ($j = 0; $j < count($events, 0); $j = $j + 2) { ?>
            <div class="row">
                <?php foreach (array_slice($events, $j, 2) as $event) : ?>
                    <div class="card">
                        <div class="img-card">
                            <img class="card-img-top" src="<?php echo base_url(); ?>upload/event/<?php echo $event['poster'] ?>" alt="Card image cap">
                        </div>
                        <div class="card-title"><?= $event['namaEvent'] ?></div>
                        <div class="card-body text-center">
                            <a href="<?= base_url('Post/event/');
                                                echo $event['idEvent'] ?>" class="btn">Read More</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>