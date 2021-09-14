<div class="h2 mt-3"><?php echo $title; ?></div>
        <?= form_open('buku/update/'. $buku->id); ?>
        <div class="container">
            <div class="form-group">
                <input type="hidden" class="form-control" id="txtId" value="<?=$buku->id; ?>" name="id">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtJudul">Judul :</label>
                <input type="text" class="form-control" placeholder="Judul" id="txtjudul" value="<?=$buku->judul; ?>" name="judul">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtPengarang">Pengarang :</label>
                <input type="text" class="form-control" placeholder="Pengarang" id="txtPengarang" value="<?=$buku->pengarang; ?>" name="pengarang">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtPenerbit">Penerbit :</label>
                <input type="text" class="form-control" placeholder="Penerbit" id="txtPenerbit" value="<?=$buku->penerbit; ?>" name="penerbit">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtTanggalTerbit">Tanggal Terbit :</label>
                <input type="date" class="form-control" placeholder="Tanggal Terbit" id="inputDefault" value="<?=$buku->tglterbit; ?>" name="tglTerbit">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtIsbn">ISBN :</label>
                <input type="text" class="form-control" placeholder="ISBN" id="inputDefault" value="<?=$buku->isbn; ?>" name="isbn">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtUserId">User ID :</label>
                <input type="text" class="form-control" placeholder="User ID" id="txtUserId" value="<?=$buku->userid; ?>" name="userId">
            </div>
    
            <div class="mt-5 mb-5">
                <button type="submit" class="btn btn-primary me-3">Save</button>
                <button class="btn btn-outline-warning">Cancel</button>
            </div>
        </div>
        <?= form_close(); ?>