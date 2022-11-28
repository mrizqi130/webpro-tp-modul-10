<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Buku <strong>berhasil</strong> <?php $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Data Buku</h3>
            <?php if (empty($buku)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan
                </div>
            <?php endif; ?>

            <table id="tabelku" class="table display">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE</th>
                        <th class="text-center" scope="col">JUDUL</th>
                        <th class="text-center" scope="col">PENULIS</th>
                        <th class="text-center" scope="col">PENERBIT</th>
                        <th class="text-center" scope="col">TAHUN</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $d):
                        $url = 'tp-modul-10/buku/hapus'.$d['kode'];
                    ?>
                    <tr>
                        <td class="text-center"><?php  $d['kode']?></td>
                        <td class="text-center"><?php  $d['judul']?></td>
                        <td class="text-center"><?php  $d['penulis']?></td>
                        <td class="text-center"><?php  $d['penerbit']?></td>
                        <td class="text-center"><?php  $d['tahun']?></td>

                        <td class="text-center">
                            <a href="" class="badge badge-success float-center" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>

                    <!-- Modal Edit -->

                    <!-- End Modal -->



                    <?php   endforeach 
                    ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah"> -->
                        Tambah Data Buku
                    </button>
                </div>
            </div>
            <!-- <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>ehe</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('buku/tambah') ?>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <?= form_label('Kode') ?>
                        <?= form_input(['name' => 'kode', 'class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= form_label('judul') ?>
                        <?= form_input(['name' => 'judul', 'class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <?= form_label('penulis') ?>
                        <?= form_input(['name' => 'penulis', 'class' => 'form-control', 'required']) ?>
                    </div>
                </div>
                <div class="form-row">
                    <?= form_label('penerbit') ?>
                    <?= form_input(['name' => 'penerbit', 'class' => 'form-control', 'required']) ?>
                    <?= form_label('tahun') ?>
                    <?= form_input(['name' => 'tahun', 'class' => 'form-control', 'required']) ?>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <?= form_close() ?>
                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script>

</script>