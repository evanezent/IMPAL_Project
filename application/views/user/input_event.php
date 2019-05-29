<body class="container-fluid">

    <div id="form-input" class="d-flex justify-content-center">
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

</html>
</body>