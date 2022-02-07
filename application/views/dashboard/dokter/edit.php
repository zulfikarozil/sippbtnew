<div class="col-8">
    <div class="card m-b-30">
        <div class="card-body">

            <h4 class="mt-0 header-title">Edit Data Dokter</h4>
            <form class="needs-validation" novalidate method="POST" action="<?= site_url('dokter/update') ?>">
                <input type="hidden" value="<?= $dokter->id_dokter ?>" name="id">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Nama Dokter</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="nama" value="<?= $dokter->nama ?>" id="example-text-input" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="nip" value="<?= $dokter->nip ?>" id="example-text-input" placeholder="NIP">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="alamat" value="<?= $dokter->alamat ?>" id="example-text-input" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="tmplahir" value="<?= $dokter->tmplahir ?>" id="example-text-input" placeholder="Tempat Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Tgl Lahir</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="date" name="tgllahir" value="<?= $dokter->tgllahir ?>" id="example-text-input" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select name="jenkel" id="jenkel" class="form-control">
                            <option value="L" <?php if ($dokter->jenkel == 'L') echo 'selected' ?>>Laki-Laki</option>
                            <option value="P" <?php if ($dokter->jenkel == 'P') echo 'selected' ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Spesialis</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="spesialis" value="<?= $dokter->spesialis ?>" id="example-text-input" placeholder="Spesialis">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Unit / Poli</label>
                    <div class="col-sm-9">
                        <?php $get_poli = $this->db->get_where('poli', array('hapus' => 1))->result(); ?>
                        <select name="poli_id" id="poli_id" class="form-control">
                            <!-- <option value="<?= $dokter->poli_id ?>"><?= $dokter->poli_id ?></option> -->
                            <?php foreach ($get_poli  as $obj) { ?>
                                <option value="<?= $obj->nama ?>" <?php if ($dokter->poli_id == $obj->nama) echo 'selected' ?>><?= $obj->nama; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <button class="btn btn-primary float-right ml-2" type="submit"><i class="fa fa-save"></i> Submit</button>
                <a class="btn btn-secondary float-right" href="<?= site_url('dokter') ?>"><i class="fa fa-arrow-left"></i> Cancel</a>
            </form>
        </div>
    </div>
</div> <!-- end col -->