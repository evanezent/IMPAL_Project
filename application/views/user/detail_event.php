<body class="container-fluid">
    <!-- EVENT -->
    <!-- select where idEvent -->
    <?php foreach ($events as $ev) :?>
    <div id="description">
        <div id="desc-header" class="text-center">
            <h3>DESCRIPTION</h3>
        </div>
        <div id="isi-data">
            <div id="img-desc">
                <img src="<?= base_url('asset/'); echo $ev['poster'] ?>" width="100%" height="100%" alt="UNKNOWN">
            </div>
            <div id="desc">
                
                <table class="table d-flex justify-content-center">
                    <tbody>
                        <tr>
                            <td>
                                <label>Nama of Event </label>
                            </td>
                            <td>:</td>
                            <td>
                                <span id="namaEvent"><?php echo $ev['namaEvent'] ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date </label>
                            </td>
                            <td>:</td>
                            <td>
                                <span id="tanggalEvent"><?php echo $ev['tanggalEvent'] ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Contact Person </label>
                            </td>
                            <td>:</td>
                            <td>
                                <span id="cpEvent"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Place </label>
                            </td>
                            <td>:</td>
                            <td>
                                <span id="placeEvent"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php endforeach ?>
                <div id="desc-footer" class="d-flex justify-content-center">
                    <button class="btn"><a href="<?= base_url(); ?>">Back</a></button>
                </div>
            </div>
        </div>

    </div>
</body>

</html>