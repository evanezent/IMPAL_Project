<div id="edit-ticket">
        <?php echo form_open_multipart('member/editTicketHandle'); ?>
        <input type="hidden" value="<?= $tickets[0]['idTicket'] ?>" name="idticket">
        <div class="form-group">
            <label for="ticketname">Nama Ticket</label>
            <input type="input" class="form-control" name="ticketname" value="<?= $tickets[0]['namaTicket'] ?>">
        </div>
        <div class="form-group">
            <label for="contatperson">Contact Person</label>
            <input type="input" class="form-control" name="contactperson" value="<?= $tickets[0]['contactPerson'] ?>">
        </div>
        <div class="form-group">
            <label for="date">Tanggal Ticket</label>
            <input type="date" class="form-control" name="date" value="<?= $tickets[0]['tanggalTicket'] ?>">
        </div>
        <div class="form-group">
            <label for="poster">Foto Ticket / Poster</label>
            <input type="file" class="form-control" name="poster" value="<?= $tickets[0]['poster'] ?>">
        </div>
        <div class="form-group">
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Submit</button>
        </div>
        </form>
    </div>