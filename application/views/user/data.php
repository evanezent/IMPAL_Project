<body class="container-fluid">
    <!-- INPUT -->
    <div id="input-event" class="justify-content-center" style="display: none;">
        <form>
            <div class="form-group">
                <label for="eventname">Nama Event</label>
                <input type="input" class="form-control" id="eventname">
            </div>
            <div class="form-group">
                <label for="contatperson">Contact Person</label>
                <input type="input" class="form-control" id="contatperson">
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select name="" class="form-control" id="category">
                    <option value="Music">Musik</option>
                    <option value="Party">Pesta</option>
                    <option value="Sport">Olahraga</option>
                    <option value="Education">Edukasi</option>
                    <option value="Charity">Amal</option>
                    <option value="Travel">Travel</option>
                    <option value="Art">Seni</option>
                    <option value="Seminar">Seminar & Workshop</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Tanggal Event</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="poster">Foto Event / Poster</label>
                <input type="file" class="form-control" id="date">
            </div>
            <div class="form-group">
                <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
                <button type="submit" class="btn mx-auto">Submit</button>
            </div>
        </form>
    </div>

    <div id="input-ticket" class="justify-content-center" style="display: none;">
        <form>
            <div class="form-group">
                <label for="ticketname">Nama Ticket</label>
                <input type="input" class="form-control" id="ticketname">
            </div>
            <div class="form-group">
                <label for="contatperson">Contact Person</label>
                <input type="input" class="form-control" id="contatperson">
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select name="" class="form-control" id="category">
                    <option value="Music">Musik</option>
                    <option value="Party">Pesta</option>
                    <option value="Sport">Olahraga</option>
                    <option value="Education">Edukasi</option>
                    <option value="Charity">Amal</option>
                    <option value="Travel">Travel</option>
                    <option value="Art">Seni</option>
                    <option value="Seminar">Seminar & Workshop</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Tanggal Ticket</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="poster">Foto Ticket / Poster</label>
                <input type="file" class="form-control" id="date">
            </div>
            <div class="form-group">
                <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
                <button type="submit" class="btn mx-auto">Submit</button>
            </div>
        </form>
    </div>

    <!-- KELOLA DATA -->
    <div id="kelola-event" class="" style="display: none;">
        <div id="baris" class="container">
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/event1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Event</label>
                    <label class="d-block">Judul Event</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/event1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Event</label>
                    <label class="d-block">Judul Event</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>

        </div>
        <div id="baris" class="container">
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/event1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Event</label>
                    <label class="d-block">Judul Event</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/event1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Event</label>
                    <label class="d-block">Judul Event</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>

        </div>
    </div>

    <div id="kelola-ticket" class="" style="display: none;">
        <div id="baris">
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/tick1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Ticket</label>
                    <label class="d-block">Judul Ticket</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/tick1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Ticket</label>
                    <label class="d-block">Judul Ticket</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
        </div>
        <div id="baris">
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/tick1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Ticket</label>
                    <label class="d-block">Judul Ticket</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <img class="card-img" src="<?php echo base_url(); ?>asset/tick1.png" alt="Card image cap">
                    <label class="d-block">Tanggal Ticket</label>
                    <label class="d-block">Judul Ticket</label>
                    <a class="btn" href="">Lihat Lengkap</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>