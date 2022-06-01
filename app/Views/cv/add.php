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

                            <!-- isi content  -->
                            <div class="col-md-12">
                                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                        <li class="nav-item">
                                            <a href="#seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Personal Information">
                                                    <i class="bx bxs-user-detail"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                                    <i class="bx bx-book-bookmark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                                    <i class="bx bxs-bank"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="seller-details">
                                            <div class="text-center mb-4">
                                                <h5>Personal Information</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <form>
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
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input" class="form-label">Address</label>
                                                            <textarea id="basicpill-address-input" name="address" class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- tab pane -->
                                        <div class="tab-pane" id="company-document">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Company Document</h5>
                                                    <p class="card-title-desc">Fill all information below</p>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-pancard-input" class="form-label">PAN Card</label>
                                                                <input type="text" class="form-control" id="basicpill-pancard-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-vatno-input" class="form-label">VAT/TIN No.</label>
                                                                <input type="text" class="form-control" id="basicpill-vatno-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cstno-input" class="form-label">CST No.</label>
                                                                <input type="text" class="form-control" id="basicpill-cstno-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-servicetax-input" class="form-label">Service Tax No.</label>
                                                                <input type="text" class="form-control" id="basicpill-servicetax-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-companyuin-input" class="form-label">Company UIN</label>
                                                                <input type="text" class="form-control" id="basicpill-companyuin-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input" class="form-label">Declaration</label>
                                                                <input type="text" class="form-control" id="basicpill-declaration-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- tab pane -->
                                        <div class="tab-pane" id="bank-detail">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>Bank Details</h5>
                                                    <p class="card-title-desc">Fill all information below</p>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-namecard-input" class="form-label">Name on Card</label>
                                                                <input type="text" class="form-control" id="basicpill-namecard-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Credit Card Type</label>
                                                                <select class="form-select">
                                                                    <option selected>Select Card Type</option>
                                                                    <option value="AE">American Express</option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cardno-input" class="form-label">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="basicpill-cardno-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-card-verification-input" class="form-label">Card Verification Number</label>
                                                                <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-expiration-input" class="form-label">Expiration Date</label>
                                                                <input type="text" class="form-control" id="basicpill-expiration-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                            Changes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Detail Barang</h6>
                                <table class="table table-bordered table-striped tableFile">
                                    <thead>
                                        <tr>
                                            <th width='5px'>No</th>
                                            <th>Produk</th>
                                            <th width='250px'>Qty</th>
                                            <th width='50px'><button class="btn btn-sm btn-success addFile" type="button"><i class="bx bx-plus"></i></button></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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
            "<td class='number text-center'>" +
            no +
            "</td>" +
            "<td>ok" +
            "</td>" +
            "<td>" +
            "<input type='number' data-name='qty' name='stock_details[" + no + "][qty]' class='form-control' required>" +
            "</td>" +
            "<td class='text-center'>" +
            '<button type="button" class="btn btn-danger btn-sm dellFile"><span class="fas fa-times"></span></button>' +
            "</td>";
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