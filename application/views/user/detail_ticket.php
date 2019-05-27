<body class="container-fluid">
    <!-- TICKET -->
    <!-- select where idTicket -->
    <div id="description">
        <div id="desc-header" class="text-center">
            <h3>DESCRIPTION</h3>
        </div>

        <div id="img-desc">
            <img src="<?= base_url('asset/event1.png'); ?>" width="100%" height="100%" alt="UNKNOWN">
        </div>

        <div id="desc">
            <table class="table d-flex justify-content-center">
                <tbody>
                    <tr>
                        <td>
                            <label>Name of Event </label>
                        </td>
                        <td>:</td>
                        <td>
                            <span id="namaEvent"> VANS World Cup of Surfing</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Date </label>
                        </td>
                        <td>:</td>
                        <td>
                            <span id="tanggalEvent"> August, 15th 2020</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Person </label>
                        </td>
                        <td>:</td>
                        <td>
                            <span id="cpEvent"> +6282 226 651 838 (Rey)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Place </label>
                        </td>
                        <td>:</td>
                        <td>
                            <span id="placeEvent">Sunset Beach HAWAI</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="desc-footer" class="d-flex justify-content-center">
                <button class="btn"><a href="<?= base_url(); ?>">Back</a></button>
            </div>
        </div>
    </div>
</body>

</html>