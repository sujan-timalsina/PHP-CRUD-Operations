<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FROM CI</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center alert alert-dark">Login Page</h1>
    <div class="row justify-content-center">
        <div class="col-6">
            <h1><?php echo $title ?></h1>
            <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('message') ?>
                </div>
            <?php } ?>
            <?php echo form_open('users/login', array('id' => 'loginForm')) ?>
            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                <?php echo form_error('email', '<div class="error">', '</div>') ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <?php echo form_error('password', '<div class="error">', '</div>') ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login" class="btn btn-primary" />
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>