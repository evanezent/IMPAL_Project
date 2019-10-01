<body class="container-fluid">
    <div class="searchbar">
        <input class="search_input" type="text" name="" placeholder="Search...">
        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
    </div>

    <div id="event-slide">
        <h3 id="judul-slide"> EVENT </h3>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <!-- start for i -->
                <?php for ($i=0; $i < 5; $i++) { ?>
                <li data-target="#demo" data-slide-to="<?php echo $i ?>" class="active"></li>
                <!-- end for i -->
                <?php } ?>
                <!-- <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li> -->
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner text-center">
                <!-- start foreach -->
                <?php foreach ($events as $ev) : ?>
                <div class="carousel-item active" data-ride="false">
                    <div class="bg-carousel" style="background:url('<?php echo base_url(); ?>asset/<?php echo $ev['poster'] ?>');filter: blur(8px);-webkit-filter: blur(8px);">
                    </div>
                    <div class="img-carousel">
                        <img src="<?php echo base_url(); ?>asset/<?php echo $ev['poster'] ?>" alt="UNKNOWN" height="100%">
                    </div>
                </div>
                <?php endforeach ?>
                
                <!-- end foreach -->
                <!-- <div class="carousel-item" data-ride="false">
                    <img src="<?php echo base_url(); ?>asset/event2.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item" data-ride="false">
                    <img src="<?php echo base_url(); ?>asset/event3.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item" data-ride="false">
                    <img src="<?php echo base_url(); ?>asset/event4.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item" data-ride="false">
                    <img src="<?php echo base_url(); ?>asset/event5.jpg" alt="UNKNOWN" height="100%">
                </div> -->
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
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
        <?php for ($i=0; $i < count($events,0); $i = $i+2) { ?>
        <div class="row">
            <?php foreach (array_slice($events,$i,2) as $ev) : ?>
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url(); ?>asset/<?php echo $ev['poster'] ?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <a href="<?= base_url('post/event/');
                                        echo $ev['idEvent'] ?>" class="btn">Read More</a>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
        <?php } ?>
        <!-- end foreach -->
        <!-- <div class="row">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event3.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event4.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event5.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event6.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div> -->

    </div>
</body>

</html>