<body class="container-fluid">
    <div id="payment-menu" class="text-center mt-5 mb-5">
        <div id="jenisPublikasi" class="mb-5">
            <label for="publication" class="label mr-3">Jenis Publikasi</label>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenisPublikasi" value="g">Gold
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenisPublikasi" value="s">Silver
                </label>
            </div>
            <div class="form-check-inline disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenisPublikasi" value="f">Free
                </label>
            </div>
        </div>
        <div id="totalPembayaran" class="mb-5">
            <label for="pembayaran" class="label">Total Harga </label>
            <h4 id="biaya"><b>xxx</b></h4>
            <p></p>
        </div>
        <div id="transfer" class="mb-5">
            <h4><b>Transfer Pada Rekening Berikut</b></h4>
            <h5><i>123 - 4363 - 11 - 53445</i></h5>
            <h4><b>Atas Nama</b></h4>
            <h5><i>EVANUE</i></h5>
        </div>
        <div id="payment-btn">
            <button class="btn" type="button"><a href="Back">Previous</a></button>
            <button class="btn" type="submit">Submit</button>
        </div>
    </div>
</body>

</html>
<script>
$('input[type=radio][name=jenisPublikasi]').change(function() {
    if (this.value == 'g') {
        $("#biaya").text("IDR 150.000");
        $("p").text("Penjelasan publikasi 'GOLD', event dengan jenis publikasi tersebut akan mendapat sebuah keuntungan yaitu, Event tersebut akan tampil di image slide show pada halaman homepage selama 10 hari");
    }
    else if (this.value == 's') {
        $("#biaya").text("IDR 100.000");
        $("p").text("Penjelasan publikasi 'SILVER', event dengan jenis publikasi tersebut akan mendapat sebuah keuntungan yaitu, Event tersebut akan tampil di image slide show pada halaman homepage selama 7 hari");
    }
    else{
        $("#biaya").text("Thank You :) !");
        $("p").text("");
    }
});
</script>