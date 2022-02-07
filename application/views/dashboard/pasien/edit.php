<div class="col-lg-6">
    <div class="card m-b-30">
        <div class="card-body">

            <h4 class="mt-0 ml-4 header-title text-center">Data Pasien</h4>


            <form class="needs-validation" novalidate method="POST" action="<?= site_url('pasien/update') ?>">
                <input type="hidden" name="pasien_id" value="<?= $pasien->id_pasien ?>">
                <div class="form-group">
                    <label>No. Register</label>
                    <input readonly type="text" value="<?= $pasien->no_rekam ?>" class="form-control col-4" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $pasien->nama ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?= $pasien->nik ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tmplahir" value="<?= $pasien->tmplahir ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Tgl.Lahir</label>
                    <input type="date" name="tgllahir" value="<?= $pasien->tgllahir ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?= $pasien->alamat ?>" class="form-control" required placeholder="Type something" />
                </div>
                <!-- <div class="form-group">
                    <label>Jenis Pelayanan</label>
                    <input type="text" value="Pelayanan <?= $pasien->layanan ?>" class="form-control" required placeholder="Type something" />
                </div> -->
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="form-control">
                        <option value="Laki-laki" <?php if ($pasien->jenkel == 'Laki-laki') echo 'selected' ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php if ($pasien->jenkel == 'Perempuan') echo 'selected' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Golongan Darah</label>
                    <input type="text" name="goldarah" value="<?= $pasien->goldarah ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" value="<?= $pasien->pekerjaan ?>" class="form-control" required placeholder="Type something" />
                </div>
                <div class="form-group">
                    <label>Status Pernikahan</label>
                    <select name="pernikahan" id="pernikahan" class="form-control">
                        <option value="Kawin" <?php if ($pasien->pernikahan == 'Kawin') echo 'selected' ?>>Kawin</option>
                        <option value="Belum Kawin" <?php if ($pasien->pernikahan == 'Belum Kawin') echo 'selected' ?>>Belum Kawin</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6 class="text-muted fw-400"><strong>Jenis Layanan</strong></h6>
                    <div class="col-md-9">
                        <div class="form-check-inline my-1">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="Umum" <?php if ($pasien->layanan == 'Umum') echo 'checked' ?> onclick="javascript:yesnoCheck();" name="layanan" id="noCheck" class="custom-control-input">
                                <label class="custom-control-label" for="noCheck">Umum</label>
                            </div>
                        </div>
                        <div class="form-check-inline my-1">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="BPJS" <?php if ($pasien->layanan == 'BPJS') echo 'checked' ?> onclick="javascript:yesnoCheck();" name="layanan" id="yesCheck" class="custom-control-input">
                                <label class="custom-control-label" for="yesCheck">BPJS</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>No. BPJS</label>
                    <small> Hapus No.BPJS jika memilih jenis layanan UMUM*</small>
                    <input type="text" name="nobpjs" value="<?= $pasien->nobpjs ?>" class="form-control" placeholder="Isi jika layanan BPJS" />
                </div>
                <!-- <div class="form-group">
                    <span id="ifYes" style="display:none"><strong> No BPJS</strong>
                        <div class="div mt-2">

                            <input type="text" name="nobpjs" size="45" class="form-control" value="<?= $pasien->nobpjs ?>" required />
                        </div>
                        <div id="result"></div>
                </div> -->


                <div class="form-group">
                    <label>Keluhan</label>
                    <div>
                        <textarea required name="keluhan" class="form-control" rows="5"><?= $pasien->keluhan ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button class="btn btn-primary float-right ml-2" type="submit"><i class="fa fa-save"></i> Submit</button>
                        <a href="<?= site_url('pasien') ?>" class="btn btn-secondary waves-effect m-l-5 float-right">
                            Cancel
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } else document.getElementById('ifYes').style.display = 'none';
    }
</script>