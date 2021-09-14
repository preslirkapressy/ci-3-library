<div class="h2 mt-3"><?php echo $title; ?></div>
        <?=form_open('pelanggan/add'); ?>
        <div class="container">
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtKodePel">Kode Pelanggan :</label>
                <input type="text" class="form-control" placeholder="Kode Pelanggan" id="txtKodePel" name="kodepel">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtNamaPelanggan">Nama Pelanggan :</label>
                <input type="text" class="form-control" placeholder="Nama Pelanggan" id="txtNamaPelanggan" name="nama">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtEmail">Email :</label>
                <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="email">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtTelpon">Telpon :</label>
                <input type="text" class="form-control" placeholder="Telpon" id="txtTelpon" name="telp" >
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtJenisKelamin">Jenis Kelamin :</label>
                <input type="text" class="form-control" placeholder="Jenis Kelamin" id="txtJenisKelamin" name="jk" >
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtAlamat">Alamat :</label>
                <input type="text" class="form-control" placeholder="Alamat" id="txtAlamat" name="alamat" >
            </div>
    
            <div class="mt-5 mb-5">
                <button type="submit" class="btn btn-primary me-3">Save</button>
                <button class="btn btn-outline-warning">Cancel</button>
            </div>
        </div>
        <?=form_close(); ?>