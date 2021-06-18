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
    <h1 class="text-center alert alert-dark">CRUD CI View</h1>
    <div class="container my-3 d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#iModal">
            Add User
        </button>

    </div>
    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user_details as $users) : ?>
                    <tr>
                        <td><?php echo $users->name; ?></td>
                        <td><?php echo $users->age; ?></td>
                        <td><?php echo $users->phone; ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo base_url(); ?>crud/editUser/<?php echo $users->id; ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>crud/deleteUser/<?php echo $users->id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="iModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?php echo base_url(); ?>crud/addUser" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="insert" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of insert modal  -->

    <?php if ($this->session->flashdata('error')) : ?>
        <div class='text-center alert alert-danger'>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('inserted')) : ?>
        <div class='text-center alert alert-success'>
            <?php echo $this->session->flashdata('inserted'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('deleted')) : ?>
        <div class='text-center alert alert-success'>
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('updated')) : ?>
        <div class='text-center alert alert-success'>
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
    <?php endif; ?>



    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>