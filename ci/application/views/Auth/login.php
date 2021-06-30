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
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <?php if ($this->session->flashdata('status')) : ?>
                    <div class='text-center alert alert-danger'>
                        <?php echo $this->session->flashdata('status'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('login'); ?>" method="POST">
                            <div class="form-group my-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
                                <small class="text-danger"><?php echo form_error('email') ?></small>
                            </div>
                            <div class="form-group my-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <small class="text-danger"><?php echo form_error('password') ?></small>
                            </div>
                            <div class="form-group my-4">
                                <input type="submit" name="submit" value="Login" class="btn btn-success px-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>