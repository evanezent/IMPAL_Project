<body class="container-fluid">
    <!-- Check session -->
    <?php
    if (!$_SESSION['user']) {
        redirect('User/forbiden');
    }
    ?>
    <!-- EVENT -->
    <div id="admin-event" class="container">
        <!-- Perulangan for each -->
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/event1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        VANS "World Cup of Surfing"
                    </li>
                    <li>
                        August, 15th 2020
                    </li>
                    <li>
                        Sunset Beach HAWAI
                    </li>
                    <li>
                        +6282 226 651 838 (Rey)
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
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/event2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        Seminar "Born to be Developer"
                    </li>
                    <li>
                        April, 26th 2015
                    </li>
                    <li>
                        Universitas Atma Jaya
                    </li>
                    <li>
                        +6283 216 071 118 (Roy)
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
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/event3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        Freestyle ON JAM
                    </li>
                    <li>
                        November, 11th 2012
                    </li>
                    <li>
                        Pantai Wisata Tanjung Pendam
                    </li>
                    <li>
                        +6282 226 651 838 (Rey)
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
    </div>

    <!-- TICKET -->

    <div id="admin-ticket" class="container" style="display: none">
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/tick1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        JUDUL
                    </li>
                    <li>
                        TANGGAL
                    </li>
                    <li>
                        TEMPAT
                    </li>
                    <li>
                        CP
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
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/tick1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        JUDUL
                    </li>
                    <li>
                        TANGGAL
                    </li>
                    <li>
                        TEMPAT
                    </li>
                    <li>
                        CP
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
        <div class="row">
            <div class="col-md-4 gambar">
                <div class="col-gambar">
                    <img src="<?php base_url(); ?>asset/tick1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 penjelasan">
                <ul>
                    <li>
                        JUDUL
                    </li>
                    <li>
                        TANGGAL
                    </li>
                    <li>
                        TEMPAT
                    </li>
                    <li>
                        CP
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
    </div>
</body>

</html>