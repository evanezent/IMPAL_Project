<div id="edit-event" class="justify-content-center">
        <?php echo form_open_multipart('member/editEventHandle'); ?>
        <input type="hidden" name="idevent" value="<?= $events[0]['idEvent'] ?>">
        <div class="form-group">
            <label for="eventname">Nama Event</label>
            <input type="input" class="form-control" name="eventname" value="<?= $events[0]['namaEvent'] ?>">
        </div>
        <div class="form-group">
            <label for="date">Tanggal Event</label>
            <input type="date" class="form-control" name="date" value="<?= $events[0]['tanggalEvent'] ?>">
        </div>
        <div class="form-group">
            <label for="poster">Foto Event / Poster</label>
            <input class="form-control" type="file" name="poster" value="<?= $events[0]['poster'] ?>">
        </div>
        <div class="form-group">
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Submit</button>
        </div>
        </form>
    </div>