<html>
    <head>
        <title><?= $title; ?></title>
        <!-- Bootswatch -->
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=site_url();?>">CI Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                    

                <div class="collapse navbar-collapse" id="navbarColor">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="<?=site_url();?>">Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?=site_url();?>buku">Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=site_url();?>pelanggan">Pelanggan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=site_url();?>sewa">Sewa</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Users</a>
                            <div class="dropdown-menu text-center">
                                <a class="dropdown-item" href="users">Data</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="userroles">Roles</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Bagian Header -->
    <div class="container">

        <!-- Flash Messages -->
        <div id="flash_messages">
            <?php if($this->session->flashdata('success')) : ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?=$this->session->flashdata('success');  ?>
                </div>
            <?php endif ?>

            <?php if($this->session->flashdata('error')) : ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif ?>

            <?php if($this->session->flashdata('warning')) : ?>
                <div class="alert alert-dismissible alert-warning">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $this->session->flashdata('warning'); ?>
                </div>
            <?php endif ?>

            <?php if($this->session->flashdata('info')) : ?>
                <div class="alert alert-dismissible alert-info">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $this->session->flashdata('info'); ?>
                </div>
            <?php endif ?>
        </div>

        <!-- Form Validation Error Message -->
        <?php if(!empty(validation_errors())) : ?>
            <div id="validation_message">
                <div class="alert alert-dismissible alert-warning">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= validation_errors(); ?>
                </div>
            </div>
        <?php endif ?>
