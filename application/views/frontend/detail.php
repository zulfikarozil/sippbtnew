<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Detail Data Diri</h2>
        </div>

        <div class="row">
            <!-- <div class="col-lg-4">
                <img src="<?= base_url() ?>assets/frontend/img/profile-img.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat !</strong> Pendaftaran Check Up Anda Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php if ($this->session->flashdata('msg')) { ?>
                <div class="success success-alert" role="success">
                    <strong><?= $this->session->flashdata('error') ?></strong>
                </div>
            <?php } ?>
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Berikut detail data diri Anda</h3>
                <p class="font-italic">

                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <!-- <?php if (isset($pasien) && !empty($pasien)) :
                                        $count = 1;
                                        foreach ($pasien as $obj) { ?>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nama</strong><?= $obj->nama ?></li>
                            <?php }
                                    endif;
                            ?> -->
                            <li><i class="icofont-rounded-right"></i> <strong>NO.Register :</strong> <strong><?= $pasien->no_rekam ?></strong></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Nama :</strong> <?= $pasien->nama ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>NIK:</strong> <?= $pasien->nik ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Tempat, Tgl.lahir : </strong> <?= $pasien->tmplahir ?>, <?= $pasien->tgllahir ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Alamat:</strong> <?= $pasien->alamat ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Jenis Kelamin:</strong> <?= $pasien->jenkel ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Golongan Darah :</strong> <?= $pasien->goldarah ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Pekerjaan :</strong> <?= $pasien->pekerjaan ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Status Pernikahan :</strong> <?= $pasien->pernikahan ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Jenis Layanan :</strong> <?= $pasien->layanan ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>No. BPJS:</strong> <?= $pasien->nobpjs ?></li>
                            <li><i class="icofont-rounded-right"></i> <strong>Keluhan:</strong> <?= $pasien->keluhan ?></li>
                        </ul>
                    </div>
                </div>
                <p>
                    Anda dapat menekan tombol cetak dibawah untuk menyimpan data diri anda, sebagai bukti registrasi check up !
                </p>
                <a target="blank" href="<?= base_url('daftar/cetak/' . $pasien->no_rekam) ?>" class="btn btn-warning "><i class="bx bx-printer"></i> Cetak</a>
            </div>
        </div>

    </div>
</section><!-- End About Section -->