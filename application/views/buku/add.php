<div class="h2 mt-3"><?php echo $title; ?></div>
        <?=form_open('buku/add'); ?>
        <div class="container">
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtJudul">Judul :</label>
                <input type="text" class="form-control" placeholder="Judul" id="txtjudul" name="judul">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtPengarang">Pengarang :</label>
                <input type="text" class="form-control" placeholder="Pengarang" id="txtPengarang" name="pengarang">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtPenerbit">Penerbit :</label>
                <input type="text" class="form-control" placeholder="Penerbit" id="txtPenerbit" name="penerbit">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtTanggalTerbit">Tanggal Terbit :</label>
                <input type="date" class="form-control" placeholder="Tanggal Terbit" id="inputDefault" name="tglTerbit" >
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtIsbn">ISBN :</label>
                <input type="text" class="form-control" placeholder="ISBN" id="inputDefault" name="isbn" >
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtUserId">User ID :</label>
                <input type="text" class="form-control" placeholder="User ID" id="txtUserId" name="userid" >
            </div>
    
            <div class="mt-5 mb-5">
                <button type="submit" class="btn btn-primary me-3">Save</button>
                <button class="btn btn-outline-warning">Cancel</button>
            </div>
        </div>
        <?=form_close(); ?>