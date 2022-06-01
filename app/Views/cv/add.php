<?= $this->extend('layout/main-layout') ?>
<link rel="stylesheet" href="<?= base_url('assets/libs/twitter-bootstrap-wizard/prettify.css') ?>">

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <?= $page_title ?>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- header  -->
                        <form action="<?= base_url(route_to('cv-store')) ?>" method="post" id="MyForm">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h4 class="me-2"><b>New Record</b></h4>
                                <!-- <div class="ms-auto">
                                    <div>
                                        <a href="#" class="btn btn-sm btn-soft-warning" onclick="history.back();">
                                            <i class=" dripicons-chevron-left"></i>
                                            Back</a>
                                        <button type="submit" class="btn btn-success btn-sm btnSubmit">Submit</button>
                                    </div>
                                </div> -->
                            </div>
                            <!-- end header  -->
                            <div class="col-md-12">
                                <div class="tab-pane" id="seller-details">
                                    <div class="text-center mb-4">
                                        <h5>Personal Information</h5>
                                        <p class="card-title-desc">Fill all information below</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="full name" id="basicpill-firstname-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-lastname-input" class="form-label">Job Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="job title" id="basicpill-lastname-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone number" id="basicpill-phoneno-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-email-input" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="email" id="basicpill-email-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-email-input" class="form-label">Avatar</label>
                                                <input type="file" name="photo" class="form-control" placeholder="email" id="basicpill-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-address-input" class="form-label">Address</label>
                                                <textarea id="basicpill-address-input" name="address" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center mb-4">
                                        <h5>Educaton</h5>
                                        <p class="card-title-desc">Add Education information</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-borderless tableFile">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-email-input" class="form-label">Company Name</label>
                                                                        <input type="email" name="email" class="form-control" placeholder="email" id="basicpill-email-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-email-input" class="form-label">Job Title</label>
                                                                        <input type="email" name="email" class="form-control" placeholder="email" id="basicpill-email-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-date-input" class="form-label">Start Date</label>
                                                                        <input class="form-control" name="date" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-date-input" class="form-label">End Date</label>
                                                                        <input class="form-control" name="date" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-address-input" class="form-label">Description</label>
                                                                        <textarea id="basicpill-address-input" name="address" class="form-control" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td style="padding-top: 0px !important;" align="right">
                                                            <div class="row">
                                                                <div class="col-md-2 offset-10">
                                                                    <button class="btn btn-sm btn-success addFile" type="button" style="width: 100% !important;"><i class="bx bx-plus"></i> Add New Education</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end isi content  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>

<!-- twitter-bootstrap-wizard js -->
<script src="<?= base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<!-- form wizard init -->
<script src="<?= base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<script>
    no = 0;
    $('body').on('click', '.addFile', function() {
        no++;
        html = '<tr>' +
            "<td>" +
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Company Name</label><input type="email" name="email" class="form-control" placeholder="email" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Job Title</label><input type="email" name="email" class="form-control" placeholder="email" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" name="date" type="date" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" name="date" type="date" id="example-date-input"></div></div><div class="col-lg-12"><div class="mb-3"><label for="basicpill-address-input" class="form-label">Description</label><textarea id="basicpill-address-input" name="address" class="form-control" rows="4"></textarea></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm dellFile" style="width: 100% !important"><span class="fas fa-times"></span> delete record</button></div></div>' +
            "</td>" +
            "</tr>";
        console.log(html);
        $('.tableFile tbody').append(html);
    });


    // click dell file
    $('body').on('click', '.dellFile', function() {
        var tr = $(this).closest("tr");
        tr.remove();

        $.each($(".tableFile tbody tr:not(.tr-input)"), function(e, item) {
            //ganti nomor per TR
            var no = e * 1 + 1;
            $(this).find(".number").html(no);

            //NEANGAN INPUTAN PER TR
            $.each($(this).find("input"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "stock_details[" + no + "][" + dataName + "]");
            })

            $.each($(this).find("select"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "stock_details[" + no + "][" + dataName + "]");
            })
        })
        no = no - 1;
    });

    $('body').on('click', '.btnSubmit', function() {
        validate = true;
        if (no == 0) {
            msg = "Tambahkan barang terlebih dahulu.";
            validate = false;
            $('.addFile').trigger('click');
        }

        // celk validation 
        if (validate) {
            var isValid = $(e.target).parents('form').isValid();
            if (!isValid) {
                e.preventDefault(); //prevent the default action
            } else {
                $('#MyForm').submit();
            }
        } else {
            swal.fire('Oops', msg, 'error');
        }

    })
</script>
<?= $this->endSection() ?>