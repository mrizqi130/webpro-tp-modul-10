<div class="modal-body">

                <form class="needs-validation" action="<?= base_url() ?>/buku/tambah" method="POST" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <?= form_label('Kode') ?>
                            <?= form_input(['name' => 'kode', 'class' => 'form-control', 'required']) ?>
                            <!-- <label for="validationCustom01">Kode</label>
                            <input type="text" class="form-control" name="kode" id="kode" placeholder="First name" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-4 mb-3">
                            <?= form_label('judul') ?>
                            <?= form_input(['name' => 'judul', 'class' => 'form-control', 'required']) ?>
                            <!-- <label for="validationCustom02">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Last name" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-4 mb-3">
                            <?= form_label('penulis') ?>
                            <?= form_input(['name' => 'penulis', 'class' => 'form-control', 'required']) ?>
                            <!-- <label for="validationCustomUsername">Penulis</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div> -->
                        </div>
                    </div>