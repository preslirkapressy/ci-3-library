<div class="h2 mt-3 mb-3"><?php echo $title; ?></div>

<div class="container">
    <div class="d-flex flex-row-reverse mb-3">
        <a class="btn btn-primary" href="<?=site_url('pelanggan/add') ?>">Add Data</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pelanggan as $p) : ?>
            <tr>
                <th><?= $p->nama; ?></th>
                <th><?= $p->email; ?></th>
                <th><?= $p->telp; ?></th>
                <th class="d-flex justify-content-evenly">
                    <a class="btn btn-success" href="<?=site_url('pelanggan/edit/' .$p->id) ?>" style="width: 40px;"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="<?=site_url('pelanggan/delete/' .$p->id) ?>" style="width: 40px;"><i class="fas fa-trash"></i></a>
                </th>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>


</div>