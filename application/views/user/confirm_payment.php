<body class="container-fluid">
    <div id="notification" class="mt-4 container text-center">
        <strong>WARNING !!!</strong>
        <p><strong>Konfirmasi dilakukan 1x24 Jam, apabila lebih dari itu pembayaran akan dibatalkan dan otomatis menjadi publikasi tipe "FREE"</strong></p>
    </div>
    <div id="confirmation" class="d-flex justify-content-center">
        <form action="Member/upload" method="post">
            <div class="form-group">
                <label for="uploadFile">Upload your File</label>
                <input type="file" class="form-control" name="userfile">
            </div>
            <div id="payment">
                <button type="submit" class="btn">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>