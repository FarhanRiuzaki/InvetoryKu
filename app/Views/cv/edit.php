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
                        <form action="<?= base_url(route_to('cv-update')) ?>" method="post" id="MyForm" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $record['id'] ?>">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h4 class="me-2"><b>New Record</b></h4>

                                <div class="ms-auto">
                                    <div>
                                        <a href="#" class="btn btn-sm btn-soft-warning" onclick="history.back();">
                                            <i class=" dripicons-chevron-left"></i>
                                            Back</a>
                                        <!-- <button type="submit" class="hide"></button> -->
                                    </div>
                                </div>
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
                                            <a href="#experience" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Work History">
                                                    <i class=" bx bx-briefcase"></i>
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
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Skills">
                                                    <i class=" bx bxs-magic-wand"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="personal-info">
                                            <div class="mb-4">
                                                <h5>What’s the best way for employers to contact you?</h5>
                                                <p class="card-title-desc">We suggest including an email and phone number.</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input" class="form-label">Full Name</label>
                                                        <input type="text" name="name" value="<?= $record['name'] ?>" class="form-control" required placeholder="e.g. Farhan" id="basicpill-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input" class="form-label">Profession</label>
                                                        <input type="text" name="title" value="<?= $record['title'] ?>" class="form-control" required placeholder="e.g. Software Developer" id="basicpill-lastname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                                        <input type="text" name="phone" value="<?= $record['phone'] ?>" class="form-control" required placeholder="e.g. +6282208220524" id="basicpill-phoneno-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                                        <input type="email" name="email" value="<?= $record['email'] ?>" class="form-control" required placeholder="e.g. farhan@mail.com" id="basicpill-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input" class="form-label">Address</label>
                                                        <textarea id="basicpill-address-input" name="address" placeholder="Jakarta, IND" required class="form-control" rows="3"><?= $record['address'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input" class="form-label">About Me</label>
                                                        <textarea id="basicpill-address-input" name="description" placeholder="describe yourself and experience" required class="form-control" rows="5"><?= $record['description'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="education">
                                            <div class=" mb-4">
                                                <h5>Tell us about your education</h5>
                                                <p class="card-title-desc">Include every school, even if you're still there or didn't graduate.</p>
                                            </div>
                                            <table class="table table-borderless tableEducation">
                                                <tbody>
                                                    <?php
                                                    $noEducation = 0;
                                                    foreach ($education as $key => $value) :
                                                        $noEducation++; ?>
                                                        <tr>
                                                            <td style='padding: 0px;'>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3"><label for="basicpill-email-input" class="form-label">School Name</label><input type="text" data-name="name" name="master_cv_educations[<?= $noEducation ?>][name]" value="<?= $value['name'] ?>" class="form-control" placeholder="e.g. Universitas Mercubuana" id="basicpill-email-input"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3"><label for="basicpill-email-input" class="form-label"> Field of Study</label><input type="text" data-name="title" name="master_cv_educations[<?= $noEducation ?>][title]" value="<?= $value['title'] ?>" class="form-control" placeholder="e.g. Information Technology" id="basicpill-email-input"></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" data-name="start_date" name="master_cv_educations[<?= $noEducation ?>][start_date]" value="<?= $value['start_date'] ?>" type="date" value="2022-06-11" id="example-date-input"></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" data-name="end_date" name="master_cv_educations[<?= $noEducation ?>][end_date]" value="<?= $value['end_date'] ?>" type="date" value="2022-06-11" id="example-date-input"></div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <hr>
                                                                    </div>
                                                                    <div class="col-md-2"><button type="button" class="btn btn-danger btn-sm  dellEducation" style="float: right;"><span class=" bx bx-trash-alt"></span></button></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td style="padding: 0px !important; padding-top: 15px !important;" align="right">
                                                            <div class="row">
                                                                <div class="col-md-2 offset-5">
                                                                    <button class="btn btn-sm btn-success addEducation" type="button" style="width: 100% !important;"><i class="bx bx-plus"></i> Add Another Education</button>
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
                                            <div class="mb-4">
                                                <h5>What skills would you like to highlight?</h5>
                                                <p class="card-title-desc">Add Skill information</p>
                                            </div>
                                            <table class="table table-bordered table-striped tableSkill">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th width='5px'>No</th>
                                                        <th>Title, industry, keyword</th>
                                                        <th width='50px'><button class="btn btn-sm btn-success addSkill" type="button"><i class="bx bx-plus"></i></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $noSkill = 0;
                                                    foreach ($skill as $key => $value) :
                                                        $noSkill++; ?>
                                                        <tr>
                                                            <td class='number text-center'><?= $noSkill ?></td>
                                                            <td><input type='text' data-name='name' placeholder='Ex: Cashier' name='master_cv_skills[<?= $noSkill ?>][name]' value="<?= $value['name'] ?>" class='form-control' required></td>
                                                            <td class='text-center'><button type="button" class="btn btn-danger btn-sm dellSkill"><span class=" bx bx-trash-alt"></span></button></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                        Changes</a></li>
                                            </ul>
                                        </div>
                                        <!-- tab pane -->
                                        <div class="tab-pane" id="experience">
                                            <div class="mb-4">
                                                <h5>Tell us about your most recent job</h5>
                                                <p class="card-title-desc">We’ll start there and work backward.</p>
                                            </div>
                                            <table class="table table-borderless tableFile">
                                                <tbody>
                                                    <?php
                                                    $noExperience = 0;
                                                    foreach ($experience as $key => $value) :
                                                        $noExperience++; ?>
                                                        <tr>
                                                            <td style='padding: 0px;'>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3"><label for="basicpill-email-input" class="form-label">Company Name</label><input type="text" name="master_cv_experiences[<?= $noExperience ?>][company_name]" value="<?= $value['company_name'] ?>" data-name="company_name" class="form-control" placeholder="Company Name" id="basicpill-email-input"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3"><label for="basicpill-email-input" class="form-label">Job Title</label><input type="text" name="master_cv_experiences[<?= $noExperience ?>][title]" value="<?= $value['title'] ?>" data-name="title" class="form-control" placeholder="Job Title" id="basicpill-email-input"></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" name="master_cv_experiences[<?= $noExperience ?>][start_date]" value="<?= $value['start_date'] ?>" data-name="start_date" type="date" value="2022-06-11" id="example-date-input"></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" name="master_cv_experiences[<?= $noExperience ?>][end_date]" value="<?= $value['end_date'] ?>" data-name="end_date" type="date" value="2022-06-11" id="example-date-input"></div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3"><label for="basicpill-address-input" class="form-label">Description</label><textarea id="editor<?= $noExperience ?>" name="master_cv_experiences[<?= $noExperience ?>][description]" data-name=" description" class="form-control" rows="2"><?= $value['description'] ?></textarea></div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <hr>
                                                                    </div>
                                                                    <div class="col-md-2"><button type="button" class="btn btn-danger btn-sm dellFile" style="float: right;"><span class=" bx bx-trash-alt"></span></button></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td style="padding: 0px !important; padding-top: 15px !important;" align="right">
                                                            <div class="row">
                                                                <div class="col-md-2 offset-5">
                                                                    <button class="btn btn-sm btn-success addFile" type="button" style="width: 100% !important;"><i class="bx bx-plus"></i> Add Another Position</button>
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
    no = <?= $noExperience ?>;
    noEducation = <?= $noEducation ?>;
    noSkill = <?= $noSkill ?>;

    for (let index = 1; index <= no; index++) {
        // console.log(index);
        ClassicEditor
            .create(document.querySelector('#editor' + index), {
                placeholder: 'Type your achievments and responsibilities here.'
            })
            .then(function(editor) {
                editor.ui.view.editable.element.style.height = '100px';
            })
            .catch(function(error) {
                console.error(error);
            });
    }
    $('body').on('click', '.addFile', function() {
        no++;
        html = '<tr>' +
            "<td style='padding: 0px;'>" +
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Company Name</label><input type="text" name="master_cv_experiences[' + no + '][company_name]" data-name="company_name" class="form-control" placeholder="Company Name" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">Job Title</label><input type="text" name="master_cv_experiences[' + no + '][title]" data-name="title" class="form-control" placeholder="Job Title" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" name="master_cv_experiences[' + no + '][start_date]" data-name="start_date" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" name="master_cv_experiences[' + no + '][end_date]" data-name="end_date" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-lg-12"><div class="mb-3"><label for="basicpill-address-input" class="form-label">Description</label><textarea id="editor' + no + '" name="master_cv_experiences[' + no + '][description]" data-name="description" class="form-control" rows="2"></textarea></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm dellFile" style="float: right;"><span class=" bx bx-trash-alt"></span></button></div></div>' +
            "</td>" +
            "</tr>";
        // console.log(html);
        $('.tableFile tbody').append(html);

        ClassicEditor
            .create(document.querySelector('#editor' + no), {
                placeholder: 'Type your achievments and responsibilities here.'
            })
            .then(function(editor) {
                editor.ui.view.editable.element.style.height = '100px';
            })
            .catch(function(error) {
                console.error(error);
            });

    });

    $('body').on('click', '.addSkill', function() {
        noSkill++;
        html = '<tr>' +
            "<td class='number text-center'>" +
            noSkill +
            "</td>" +
            "<td>" +
            "<input type='text' data-name='name' placeholder='Ex: Cashier' name='master_cv_skills[" + noSkill + "][name]' class='form-control' required>" +
            "</td>" +
            "<td class='text-center'>" +
            '<button type="button" class="btn btn-danger btn-sm dellSkill"><span class=" bx bx-trash-alt"></span></button>' +
            "</td></tr>";
        // console.log(html);
        $('.tableSkill tbody').append(html);
    });

    $('body').on('click', '.addEducation', function() {
        noEducation++;
        html = '<tr>' +
            "<td style='padding: 0px;'>" +
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">School Name</label><input type="text" data-name="name" name="master_cv_educations[' + noEducation + '][name]" class="form-control" placeholder="e.g. Universitas Mercubuana" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label"> Field of Study</label><input type="text" data-name="title" name="master_cv_educations[' + noEducation + '][title]" class="form-control" placeholder="e.g. Information Technology" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" data-name="start_date" name="master_cv_educations[' + noEducation + '][start_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" data-name="end_date" name="master_cv_educations[' + noEducation + '][end_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm  dellEducation" style="float: right;"><span class=" bx bx-trash-alt"></span></button></div></div>' +
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
            var noEducation = e * 1 + 1;

            //NEANGAN INPUTAN PER TR
            $.each($(this).find("input"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_educations[" + noEducation + "][" + dataName + "]");
            })

            $.each($(this).find("textarea"), function(s, f) {
                var dataName = $(this).data("name");
                $(this).attr("name", "master_cv_educations[" + noEducation + "][" + dataName + "]");
            })
        })
        noEducation = noEducation - 1;
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