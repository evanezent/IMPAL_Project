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
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>asset/event1.png" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>asset/event2.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>asset/event3.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>asset/event4.jpg" alt="UNKNOWN" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>asset/event5.jpg" alt="UNKNOWN" height="100%">
                </div>
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

    <div class="jumbotron text-center">
        <h3>Category</h3>
        <i class="fa fa-music" aria-hidden="true"></i>
        <i class="fas fa-basketball-ball"></i>
        <i class="fas fa-school"></i>
        <i class="fa fa-plane" aria-hidden="true"></i>
        <i class="fa fa-heart" aria-hidden="true"></i>
    </div>

    <div id="list" class="container d-block">
        <div class="row">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event1.png" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="<?= base_url('post'); ?>" class="btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url(); ?>asset/event2.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="row">
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
        </div>

    </div>
</body>

</html>