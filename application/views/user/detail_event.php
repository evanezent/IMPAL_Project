<body class="container-fluid">
    <!-- EVENT -->
    <!-- select where idEvent -->
    <div id="description">
        <div id="desc-header" class="text-center">
            <h3>DESCRIPTION</h3>
        </div>
        <div id="isi-data">
            <div id="desc">
                <div id="img-desc">
                    <img src="<?= base_url('upload/event/');
                                echo $events[0]['poster'] ?>" width="100%" height="100%" alt="UNKNOWN">
                </div>
                <div>
                    <table class="table d-flex justify-content-center">
                        <tbody>
                            <tr>
                                <td>
                                    <label>Nama of Event </label>
                                </td>
                                <td>:</td>
                                <td>
                                    <span id="namaEvent"><?php echo $events[0]['namaEvent'] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Date </label>
                                </td>
                                <td>:</td>
                                <td>
                                    <span id="tanggalEvent"><?php echo $events[0]['tanggalEvent'] ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="desc-footer" class="d-flex justify-content-center">
                    <button class="btn"><a href="<?= base_url(); ?>">Back</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>