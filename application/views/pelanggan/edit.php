<div class="h2 mt-3"><?php echo $title; ?></div>
        <?= form_open('pelanggan/update/'. $pelanggan->id); ?>
        <div class="container">
            <div class="form-group">
                <input type="hidden" class="form-control" id="txtId" value="<?=$pelanggan->id; ?>" name="id">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtKodePelanggan">Kode Pelanggan :</label>
                <input type="text" class="form-control" placeholder="KodePelanggan" id="txtKodePelanggan" value="<?=$pelanggan->kodepel; ?>" name="kodepel">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtNama">Nama :</label>
                <input type="text" class="form-control" placeholder="Nama" id="txtNama" value="<?=$pelanggan->nama; ?>" name="nama">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtEmail">Email :</label>
                <input type="text" class="form-control" placeholder="Email" id="txtEmail" value="<?=$pelanggan->email; ?>" name="email">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtTelpon">Telpon :</label>
                <input type="text" class="form-control" placeholder="Telpon" id="txtTelpon" value="<?=$pelanggan->telp; ?>" name="telp">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtJenisKelamin">Jenis Kelamin :</label>
                <input type="text" class="form-control" placeholder="JenisKelamin" id="inputDefault" value="<?=$pelanggan->jk; ?>" name="jk">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="txtAlamat">Alamat :</label>
                <input type="text" class="form-control" placeholder="Alamat" id="txtAlamat" value="<?=$pelanggan->alamat; ?>" name="alamat">
            </div>
    
            <div class="mt-5 mb-5">
                <button type="submit" class="btn btn-primary me-3">Save</button>
                <button class="btn btn-outline-warning">Cancel</button>
            </div>
        </div>
        <?= form_close(); ?>