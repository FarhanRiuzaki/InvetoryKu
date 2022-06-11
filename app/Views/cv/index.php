<?= $this->extend('layout/main-layout') ?>

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
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h4 class="me-2"><b>List Curriculum Vitae</b></h4>
                            <div class="ms-auto">
                                <div>
                                    <a href="<?= base_url(route_to('cv-add')) ?>" class="btn btn-soft-primary">
                                        <i class="mdi mdi-checkbox-multiple-blank-circle"></i>
                                        <b>New Record</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end header  -->
                        <div class="table-responsive mb-0">
                            <table aria-describedby="user-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="th" width="5px">#</th>
                                        <th scope="th">Name</th>
                                        <th scope="th">Job Title</th>
                                        <?php if (session()->get('role') == 'Admin') { ?>
                                            <th scope="th" width="150px">Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($records as $key => $val) { ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $val['name'] ?></td>
                                            <td><?= $val['title'] ?></td>

                                            <?php if (session()->get('role') == 'Admin') { ?>
                                                <td class="text-center">
                                                    <a href="<?= base_url(route_to('cv-pdf', $val['id'])) ?>" class="btn btn-success btn-sm" target="_BLANK">
                                                        <i class="bx bxs-file-pdf"></i>
                                                    </a>
                                                    <a href="<?= base_url(route_to('cv-edit', $val['id'])) ?>" class="btn btn-warning btn-sm">
                                                        <i class="bx bx-pencil"></i>
                                                    </a>
                                                    <button class="delete btn btn-danger btn-sm" onclick="deleteCategory(<?= $val['id'] ?>)">
                                                        <i class=" bx bx-trash"></i>
                                                    </button>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php
                                        $no++;
                                    } ?>

                                    <?php if ($no == 0) : ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Data tidak tersedia</td>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    <script>
        function deleteCategory(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#2ab57d",
                cancelButtonColor: "#fd625e",
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    window.location.href = '<?= base_url(route_to('cv-delete')) ?>' + '?id=' + id
                }
            });
        }
    </script>

    <?= $this->endSection() ?>