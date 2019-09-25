<div id="input-event" class="justify-content-center" style="display: none;">
        <?php echo form_open_multipart('member/insert_event'); ?>
        <div class="form-group">
            <label for="eventname">Nama Event</label>
            <input type="input" class="form-control" name="eventname" required>
        </div>
        <!-- <div class="form-group">
                <label for="category">Kategori</label>
                <select name="" class="form-control" name="category">
                    <option value="Music">Musik</option>
                    <option value="Party">Pesta</option>
                    <option value="Sport">Olahraga</option>
                    <option value="Education">Edukasi</option>
                    <option value="Charity">Amal</option>
                    <option value="Travel">Travel</option>
                    <option value="Art">Seni</option>
                    <option value="Seminar">Seminar & Workshop</option>
                </select>
            </div> -->
        <div class="form-group">
            <label for="date">Tanggal Event</label>
            <input type="date" class="form-control" name="date" required>
        </div>
        <div class="form-group">
            <label for="poster">Foto Event / Poster</label>
            <input class="form-control" type="file" name="poster" required>
        </div>
        <div class="form-group">
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Submit</button>
        </div>
        </form>
    </div>