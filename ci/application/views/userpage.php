<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

    <?php if ($this->session->flashdata('status')) : ?>
        <div class='text-center alert alert-danger'>
            <?php echo $this->session->flashdata('status'); ?>
        </div>
    <?php endif; ?>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>