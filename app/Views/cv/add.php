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
                        <form action="<?= base_url(route_to('cv-store')) ?>" method="post" id="MyForm" enctype="multipart/form-data">
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

                                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                        <li class="nav-item">
                                            <a href="#personal-info" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Personal Info">
                                                    <i class="bx bxs-user-detail"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#education" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Education">
                                                    <i class="bx bx-book-bookmark"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#skills" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Skill">
                                                    <i class=" bx bxs-magic-wand"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#experience" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Experience">
                                                    <i class=" bx bx-briefcase"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="personal-info">
                                            <div class="text-center mb-4">
                                                <h5>Personal Information</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input" class="form-label">Full Name</label>
                                                        <input type="text" name="name" class="form-control" required placeholder="full name" id="basicpill-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input" class="form-label">Job Title</label>
                                                        <input type="text" name="title" class="form-control" required placeholder="job title" id="basicpill-lastname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                                        <input type="text" name="phone" class="form-control" required placeholder="phone number" id="basicpill-phoneno-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" required placeholder="email" id="basicpill-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input" class="form-label">Avatar</label>
                                                        <input type="file" name="photo" class="form-control" required placeholder="email" id="basicpill-email-input">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input" class="form-label">Address</label>
                                                        <textarea id="basicpill-address-input" name="address" required class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="education">
                                            <div class="text-center mb-4">
                                                <h5>Education</h5>
                                                <p class="card-title-desc">Add Education information</p>
                                            </div>
                                            <table class="table table-borderless tableEducation">
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td style="padding: 0px !important; padding-top: 15px !important;" align="right">
                                                            <div class="row">
                                                                <div class="col-md-2 offset-5">
                                                                    <button class="btn btn-sm btn-success addEducation" type="button" style="width: 100% !important;"><i class="bx bx-plus"></i> Add New Education</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="skills">
                                            <div class="text-center mb-4">
                                                <h5>Skill</h5>
                                                <p class="card-title-desc">Add Skill information</p>
                                            </div>
                                            <table class="table table-bordered table-striped tableSkill">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th width='5px'>No</th>
                                                        <th>Skill Name</th>
                                                        <th width='50px'><button class="btn btn-sm btn-success addSkill" type="button"><i class="bx bx-plus"></i></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- tab pane -->
                                        <div class="tab-pane" id="experience">
                                            <div class="text-center mb-4">
                                                <h5>Experience</h5>
                                                <p class="card-title-desc">Add Experience information</p>
                                            </div>
                                            <table class="table table-borderless tableFile">
                                                <tbody></tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td style="padding: 0px !important; padding-top: 15px !important;" align="right">
                                                            <div class="row">
                                                                <div class="col-md-2 offset-5">
                                                                    <button class="btn btn-sm btn-success addFile" type="button" style="width: 100% !important;"><i class="bx bx-plus"></i> Add New Experience</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                        Changes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end tab content -->
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <div class="mb-3">
                                                    <i class="bx bx-check-circle display-4 text-success"></i>
                                                </div>
                                                <h5>Confirm Save Changes</h5>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary w-md" data-bs-dismiss="modal">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->
                        </form>
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
    no = noEducation = noSkill = 0;
    $('body').on('click', '.addFile', function() {
        no++;
        html = '<tr>' +
            "<td style='padding: 0px;'>" +
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Company Name</label><input type="text" name="master_cv_experiences[' + no + '][company_name]" class="form-control" placeholder="Company Name" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Job Title</label><input type="text" name="master_cv_experiences[' + no + '][title]" class="form-control" placeholder="Job Title" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" name="master_cv_experiences[' + no + '][start_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" name="master_cv_experiences[' + no + '][end_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-lg-12"><div class="mb-3"><label for="basicpill-address-input" class="form-label">Description</label><textarea id="basicpill-address-input" name="master_cv_experiences[' + no + '][description]" class="form-control" rows="4"></textarea></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm dellFile" style="width: 100% !important"><span class="fas fa-times"></span> delete record</button></div></div>' +
            "</td>" +
            "</tr>";
        // console.log(html);
        $('.tableFile tbody').append(html);
    });

    $('body').on('click', '.addSkill', function() {
        noSkill++;
        html = '<tr>' +
            "<td class='number text-center'>" +
            noSkill +
            "</td>" +
            "<td>" +
            "<input type='number' data-name='name' name='master_cv_skills[" + noSkill + "][name]' class='form-control' required>" +
            "</td>" +
            "<td class='text-center'>" +
            '<button type="button" class="btn btn-danger btn-sm dellSkill"><span class="fas fa-times"></span></button>' +
            "</td>";
        // console.log(html);
        $('.tableSkill tbody').append(html);
    });

    $('body').on('click', '.addEducation', function() {
        noEducation++;
        html = '<tr>' +
            "<td style='padding: 0px;'>" +
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">University Name</label><input type="text" data-name="name" name="master_cv_educations[' + noEducation + '][name]" class="form-control" placeholder="Company Name" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label"> Title</label><input type="text" data-name="title" name="master_cv_educations[' + noEducation + '][title]" class="form-control" placeholder="Title" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" data-name="start_date" name="master_cv_educations[' + noEducation + '][start_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" data-name="end_date" name="master_cv_educations[' + noEducation + '][end_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm  " style="width: 100% !important"><span class="fas fa-times"></span> delete record</button></div></div>' +
            "</td>" +
            "</tr>";
        // console.log(html);
        $('.tableEducation tbody').append(html);
    });


    // click dell file
    $('body').on('click', '.dellFile', function() {
        var tr = $(this).closest("tr");
        tr.remove();

        $.each($(".tableFile tbody tr:not(.tr-input)"), function(e, item) {
            //ganti nomor per TR
            var no = e * 1 + 1;

            //NEANGAN INPUTAN PER TR
            $.each($(this).find("input"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_experiences[" + no + "][" + dataName + "]");
            })

            $.each($(this).find("textarea"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_experiences[" + no + "][" + dataName + "]");
            })
        })
        no = no - 1;
    });

    $('body').on('click', '.dellSkill', function() {
        var tr = $(this).closest("tr");
        tr.remove();

        $.each($(".tableSkill tbody tr:not(.tr-input)"), function(e, item) {
            //ganti nomor per TR
            var noSkill = e * 1 + 1;
            $(this).find(".number").html(noSkill);

            //NEANGAN INPUTAN PER TR
            $.each($(this).find("input"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_skills[" + noSkill + "][" + dataName + "]");
            });

            $.each($(this).find("textarea"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_skills[" + noSkill + "][" + dataName + "]");
            });
        })
        noSkill = noSkill - 1;
    });

    // click dell Skill
    $('body').on('click', '.dellEducation', function() {
        var tr = $(this).closest("tr");
        tr.remove();

        $.each($(".tableEducation tbody tr:not(.tr-input)"), function(e, item) {
            //ganti nomor per TR
            var no = e * 1 + 1;

            //NEANGAN INPUTAN PER TR
            $.each($(this).find("input"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_educations[" + no + "][" + dataName + "]");
            })

            $.each($(this).find("textarea"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_educations[" + no + "][" + dataName + "]");
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