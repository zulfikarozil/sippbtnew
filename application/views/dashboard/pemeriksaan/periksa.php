<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title text-center"><strong>Data Pasien</strong></h4>

                <dl class="row">
                    <dt class="col-sm-4 mt-3">No. Registrasi</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->no_rekam ?></dd>
                    <dt class="col-sm-4 mt-3">Tanggal Registrasi</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->date ?></dd>
                    <dt class="col-sm-4 mt-3">Nama Lengkap</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->nama ?></dd>

                    <dt class="col-sm-4 mt-3">NIK</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->nik ?></dd>
                    <dt class="col-sm-4 mt-3">Tempat, Tgl.Lahir</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->tmplahir ?>, <?= $pasien->tgllahir ?></dd>

                    <dt class="col-sm-4 mt-3">Alamat</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->alamat ?></dd>
                    <dt class="col-sm-4 mt-3">Jenis Kelamin</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->jenkel ?></dd>

                    <dt class="col-sm-4 mt-3">Golongan Darah</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->goldarah ?></dd>
                    <dt class="col-sm-4 mt-3">Pekerjaan</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->pekerjaan ?></dd>
                    <dt class="col-sm-4 mt-3">Status Pernikahan</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->pernikahan ?></dd>

                    <dt class="col-sm-4 mt-3">Jenis Layanan</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->layanan ?></dd>
                    <dt class="col-sm-4 mt-3">No. BPJS</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->nobpjs ?></dd>
                    <dt class="col-sm-4 mt-3">Keluhan</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->keluhan ?></dd>
                    <dt class="col-sm-4 mt-3">Dokter</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->dokter_id ?></dd>
                    <dt class="col-sm-4 mt-3">Unit Poli</dt>
                    <dd class="col-sm-8 mt-3">: <?= $pasien->poli_id ?></dd>


                    <!-- <dt class="col-sm-3 mt-3">Nesting</dt>
                    <dd class="col-sm-9">
                        <dl class="row">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                    </dd> -->
                </dl>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-6">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title text-center">Data Pemeriksaan</h4>

                <form class="needs-validation" novalidate method="POST" action="<?= site_url('pemeriksaan/simpan') ?>">
                    <input type="hidden" name="pasien_id" value="<?= $pasien->id_pasien ?>">
                    <!-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Dokter</label>
                        <div class="col-sm-9">
                            <select name="dokter_id" id="dokter_id" class="form-control" required>
                                <option value="">-- Pilih -- </option>
                                <?php foreach ($dokter  as $obj) { ?>
                                    <option value="<?= $obj->nama ?>"><?= $obj->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Unit / Poli</label>
                        <div class="col-sm-9">
                            <select name="poli_id" id="poli_id" class="form-control" required>
                                <option value="">-- Pilih -- </option>
                                <?php foreach ($poli  as $obj) { ?>
                                    <option value="<?= $obj->nama ?>"><?= $obj->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Obat</label>
                        <div class="col-sm-9">
                            <select name="obat_id" id="obat_id" class="form-control">
                                <option value="">-- Pilih -- </option>
                                <?php foreach ($obat  as $obj) { ?>
                                    <option value="<?= $obj->nama ?>"><?= $obj->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Obat multiselect</label>
                        <div class="col-sm-9">
                            <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                <?php foreach ($obat  as $obj) { ?>
                                    <option value="<?= $obj->nama ?>"><?= $obj->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-md-3 my-1 control-label">Keputusan Pemeriksaan</label>
                        <div class="col-md-9">
                            <div class="form-check-inline my-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" value="Rujukan" id="customRadio4" name="hasil" class="custom-control-input" required>
                                    <label class="custom-control-label" for="customRadio4">Rujukan</label>
                                </div>
                            </div>
                            <div class="form-check-inline my-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" value="Rawat Jalan" id="customRadio5" name="hasil" class="custom-control-input" required>
                                    <label class="custom-control-label" for="customRadio5">Rawat Jalan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keterangan Pemeriksaan</label>
                        <div class="col-sm-9">
                            <textarea name="ket" id="ket" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <!--end row-->
                    <button class="btn btn-primary float-right ml-2 mt-4" type="submit"><i class="fa fa-save"></i> Submit</button>
                    <a class="btn btn-secondary float-right mt-4" href="<?= site_url('pemeriksaan/belum') ?>"><i class="fa fa-arrow-left"></i> Cancel</a>
                </form>
            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->


<!-- <div class="col-lg-6">
    <div class="card m-b-30">
        <div class="card-body">
            
            <h4 class="mt-0 ml-4 header-title text-center">Data Pasien</h4>


            <form class="needs-validation" novalidate method="POST" action="<?= site_url('pemeriksaan/simpan') ?>">
                <input type="hidden" name="pasien_id" value="<?= $pasien->id_pasien ?>">
                <div class="form-group">
                    <label>No. Register</label>
                    <input readonly type="text" value="<?= $pasien->no_rekam ?>" class="form-control col-4" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input readonly type="text" value="<?= $pasien->nama ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input readonly type="text" value="<?= $pasien->nik ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Tempat, Tgl.Lahir</label>
                    <input readonly type="text" value="<?= $pasien->tmplahir ?>, <?= $pasien->tgllahir ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Domisili</label>
                    <input readonly type="text" value="<?= $pasien->alamat ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Jenis Pelayanan</label>
                    <input readonly type="text" value="Pelayanan <?= $pasien->layanan ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>No BPJS</label>
                    <input readonly type="text" value="<?= $pasien->nobpjs ?>" class="form-control" required placeholder="Type something" />
                </div>


                <div class="form-group">
                    <label>Keluhan</label>
                    <div>
                        <textarea readonly required class="form-control" rows="5"><?= $pasien->keluhan ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>  -->
<!-- end col -->