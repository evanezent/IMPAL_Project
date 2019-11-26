<body class="container-fluid">
    <!-- TICKET -->
    <!-- select where idTicket -->
    <div id="description">
        <div id="desc-header" class="text-center">
            <h3>DESCRIPTION</h3>
        </div>
        <div id="isi-data">

            <div id="desc">
                <div id="img-desc">
                    <img src="<?= base_url('upload/ticket/');
                                echo $ticket[0]['poster'] ?>" width="100%" alt="UNKNOWN">
                </div>
                <div>
                    <table class="table d-flex justify-content-center">
                        <tbody>
                            <tr>
                                <td>
                                    <label>Name of Ticket </label>
                                </td>
                                <td>:</td>
                                <td>
                                    <span id="namaTicket"> <?php echo $ticket[0]['namaTicket'] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Date </label>
                                </td>
                                <td>:</td>
                                <td>
                                    <span id="tanggalTicket"> <?php echo $ticket[0]['tanggalTicket'] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Contact Person </label>
                                </td>
                                <td>:</td>
                                <td>
                                    <span id="cpTicket"> <?php echo $ticket[0]['contactPerson'] ?></span>
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