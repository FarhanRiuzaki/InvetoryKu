<?= $this->extend('layout/main-layout') ?>

<?= $this->section('content') ?>
<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                            <table aria-describedby="user-table" class="table table-striped table-bordered dataTable">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="th" width="5px">#</th>
                                        <th scope="th">Name</th>
                                        <th scope="th">Job Title</th>
                                        <th scope="th">Phome</th>
                                        <th scope="th">Email</th>
                                        <?php if (session()->get('role') == 'Admin') { ?>
                                            <th scope="th" width="200px">Action</th>
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
                                            <td><?= $val['phone'] ?></td>
                                            <td><?= $val['email'] ?></td>
                                            <?php if (session()->get('role') == 'Admin') { ?>
                                                <td class="text-center">
                                                    <a href="<?= base_url(route_to('cv-pdf', $val['id'])) ?>" class="btn btn-warning btn-sm" target="_BLANK" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print View">
                                                        <i class="bx bxs-file-pdf"></i>
                                                    </a>
                                                    <a href="<?= base_url(route_to('cv-dom-pdf', $val['id'])) ?>" class="btn btn-success btn-sm" target="_BLANK" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Export PDF">
                                                        <i class="bx bxs-file-pdf"></i>
                                                    </a>
                                                    <a href="<?= base_url(route_to('cv-edit', $val['id'])) ?>" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                        <i class="bx bx-pencil"></i>
                                                    </a>
                                                    <button class="delete btn btn-danger btn-sm" onclick="deleteCategory(<?= $val['id'] ?>)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
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
    <?= $this->endSection() ?>

    <?= $this->section('script') ?>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script>
        $('.dataTable').DataTable();

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