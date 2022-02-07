<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Check Up</h2>
            <!-- <p>Silahkan isikan data diri anda dengan benar</p> -->
        </div>

        <div class="row mt-1">

            <div class="col-lg-2 mt-5 mt-lg-0">
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                <form class="needs-validation" novalidate method="POST" action="<?= base_url('daftar/daftar') ?>">
                    <input type="hidden" value="<?= $pasien->kodeTerbesar ?>" name="no_rekam">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Nama Lengkap</strong>
                            </div>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>NIK</strong>
                            </div>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Tempat Lahir</strong>
                            </div>
                            <input type="text" class="form-control" name="tmplahir" id="tmplahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Tanggal Lahir</strong>
                            </div>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir" placeholder="Tanggal Lahir">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Pekerjaan</strong>
                            </div>
                            <input type="text" class="form-control" name="pekerjaan" id="pernikahan" placeholder="">
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Alamat Lengkap</strong>
                            </div>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Lengkap">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <div class="div mb-2">
                                <strong>Jenis Kelamin</strong>
                            </div>
                            <select name="jenkel" id="jenkel" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="div mb-2">
                                <strong>Status Pernikahan</strong>
                            </div>
                            <select name="pernikahan" id="pernikahan" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="div mb-2">
                                <strong>Golongan Darah</strong>
                            </div>
                            <input type="text" class="form-control" name="goldarah" id="goldarah" placeholder="Golongan Darah">
                        </div>

                    </div>
                    <div class="row" id="form-input">
                        <div class="col-md-6 mt-3">
                            <div class="div mb-2">
                                <strong>Jenis Layanan</strong>
                            </div>
                            <div class="div mt-3">

                                <input type="radio" value="Umum" class="form-check-input" onclick="javascript:yesnoCheck();" name="layanan" id="noCheck" checked><strong> Umum</strong>
                                <input type="radio" value="BPJS" class="form-check-input" onclick="javascript:yesnoCheck();" name="layanan" id="yesCheck"><strong> BPJS</strong>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">

                            <span id="ifYes" style="display:none"><strong> No BPJS</strong>
                                <div class="div mt-2">

                                    <input type="text" name="nobpjs" size="45" class="form-control" required />
                                </div>
                                <div id="result"></div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="div mb-2">
                            <strong>Keluhan</strong>
                        </div>
                        <small>Silahkan masukkan keluhan-keluhan yang Anda rasakan</small>
                        <textarea class="form-control" name="keluhan" id="keluhan" cols="10" rows="5"></textarea>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary float-left ml-2" type="submit"><i class="bx bx-save"></i> Daftar</button>
                        <a class="btn btn-secondary float-right" href="<?= site_url('home') ?>"><i class="fa fa-arrow-left"></i> Cancel</a>
                    </div>
                    <!-- <p><?php
                            echo "Hari ini Tanggal " . date("Y/m/d") . "<br>";
                            echo "Hari ini Tanggal " . date("Y.m.d") . "<br>";
                            echo "Hari ini Tanggal " . date("Y-m-d") . "<br>";
                            echo "Hari ini adalah hari" . date("l");
                            ?>
                    </p> -->

                </form>

            </div>
            <div class="col-lg-2 mt-5 mt-lg-0">
            </div>

        </div>

    </div>
</section>

<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } else document.getElementById('ifYes').style.display = 'none';
    }
</script>