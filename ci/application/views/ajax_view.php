<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FROM CI</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>
</head>

<body>
    <h1 class="text-center alert alert-dark">CRUD CI View</h1>
    <div class="container my-3 d-flex justify-content-end">
        <div id="success"></div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary add_user" data-bs-toggle="modal" data-bs-target="#iModal">
            Add User
        </button>

    </div>
    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="iModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group my-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group my-3">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group my-3">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group my-3">
                            <label for="phone">Upload</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" type="submit" id="btn_insert" class="btn btn-success">Add</button> -->
                        <input type="submit" class="btn btn-success" id="btn_insert" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of insert modal  -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <script>
        $(document).ready(function() {

            show_user();

            function show_user() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('ajax/select'); ?>",
                    dataType: "JSON",
                    success: function(data) {
                        var html = '';
                        var i;
                        var sn = 0;

                        for (i = 0; i < data.length; i++) {
                            sn++;
                            html += '<tr>' +
                                '<td>' + sn + '</td>' +
                                '<td>' + data[i].name + '</td>' +
                                '<td>' + data[i].age + '</td>' +
                                '<td>' + data[i].phone + '</td>' +
                                '<td>Image_td</td>' +
                                '<td>' +
                                '<a href="javascript:void(0);" class="btn btn-info user_edit" data-user_id="' + data[i].id + '" data-user_name="' + data[i].name + '" data-user_age="' + data[i].age + '" data-user_phone="' + data[i].phone + '">Edit</a>' +
                                '<a href="javascript:void(0);" class="btn btn-danger ms-2 user_delete" data-user_id="' + data[i].id + '">Delete</a>' +
                                '</td>' +
                                '</tr>';
                        }

                        $('#show_data').html(html);
                    }
                });
            }

            $('#btn_insert').on('click', function(e) {
                var name = $('#name').val();
                var age = $('#age').val();
                var phone = $('#phone').val();
                // var img = $('#img').val();
                e.preventDefault();
                if (name != "" && age != "" && phone != "") {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('ajax/insert'); ?>",
                        dataType: "JSON",
                        data: {
                            name: name,
                            age: age,
                            phone: phone
                        },
                        success: function(data) {
                            $('[name="name"]').val("");
                            $('[name="age"]').val("");
                            $('[name="phone"]').val("");
                            $('#iModal').modal('hide');
                            show_user();
                        }
                    });
                } else {
                    alert("Please Enter First");
                }
            });
        });
    </script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>