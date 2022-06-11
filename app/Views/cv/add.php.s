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
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
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
            "<input type='text' data-name='name' name='master_cv_skills[" + noSkill + "][name]' class='form-control' required>" +
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
            '<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label">University Name</label><input type="text" data-name="name" name="master_cv_educations[' + noEducation + '][name]" class="form-control" placeholder="Company Name" id="basicpill-email-input"></div></div><div class="col-lg-6"><div class="mb-3"><label for="basicpill-email-input" class="form-label"> Title</label><input type="text" data-name="title" name="master_cv_educations[' + noEducation + '][title]" class="form-control" placeholder="Title" id="basicpill-email-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">Start Date</label><input class="form-control" data-name="start_date" name="master_cv_educations[' + noEducation + '][start_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-6"><div class="mb-3"><label for="example-date-input" class="form-label">End Date</label><input class="form-control" data-name="end_date" name="master_cv_educations[' + noEducation + '][end_date]" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input"></div></div><div class="col-md-10"><hr></div><div class="col-md-2"><button type="button" class="btn btn-danger btn-sm  dellEducation" style="width: 100% !important"><span class="fas fa-times"></span> delete record</button></div></div>' +
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