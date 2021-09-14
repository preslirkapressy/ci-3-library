    <div class="h2 mt-3 mb-3"><?php echo $title; ?></div>
    
    
        <div class="container">
            <div class="d-flex flex-row-reverse mb-3">
                <a class="btn btn-primary" style="width: 105px;" href="<?=site_url('buku/add/')?>">Add Data</a>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>ISBN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                <?php foreach($buku as $item) : ?>
                    <tr>
                        <th><?= $item->judul; ?></th>
                        <th><?= $item->pengarang; ?></th>
                        <th><?= $item->isbn; ?></th>
                        <th>
                            <a href="<?=site_url('buku/edit/' .$item->id) ?>" class="btn btn-success" style="width: 40px;"><i class="fas fa-edit"></i></a>
                            <a href="<?=site_url('buku/delete/' .$item->id) ?>" class="btn btn-danger" style="width: 40px;"><i class="fas fa-trash"></i></a>
                        </th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
        
        <!-- <div class="card bg-light mb-3" style="max-width: 30rem;">
            <div class="card-header h4 d-flex justify-content-between">
                <a href="<?=site_url('buku/view/' . $item->id)?>"><?=$item->judul ?></a>
                <small><?=$item->pengarang ?></small>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <em>ISBN:</em> <span><?=$item->isbn ?></span>
                    </li>
                </ul>
            </div>
        </div> -->