<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="<?php echo base_url(); ?>crud/update/<?php echo $singleUser->id; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group my-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $singleUser->name; ?>">
            </div>
            <div class="form-group my-3">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $singleUser->age; ?>">
            </div>
            <div class="form-group my-3">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $singleUser->phone; ?>">
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-6">
                    <label>Change</label>
                    <?php echo form_upload(['name' => 'userfile']); ?>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo $singleUser->img_path; ?>" alt="img" height="100px" width="100px">
                </div>
            </div>
            <input type="submit" class="btn btn-info" name="edit" value="Edit">
        </form>
    </div>


    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>