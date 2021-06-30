<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="text-center">Register</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('register'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group my-3">
                                        <label for="">First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name') ?>">
                                        <small class="text-danger"><?php echo form_error('first_name'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-3">
                                        <label for="">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name') ?>">
                                        <small class="text-danger"><?php echo form_error('last_name'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-3">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>">
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group my-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <small class="text-danger"><?php echo form_error('password'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-3">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control">
                                        <small class="text-danger"><?php echo form_error('cpassword'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group my-3">
                                    <input type="submit" class="btn btn-primary px-4" name="" value="Register">
                                </div>
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