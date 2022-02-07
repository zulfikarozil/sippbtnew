<!-- Column -->
<div class="col-md-6 col-lg-6 col-xl-3">
    <a href="<?= site_url('obat') ?>">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="col-9 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner"><?= $pasien ?></h5>
                            <p class="mb-0 text-muted">Pasien Baru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-md-6 col-lg-6 col-xl-3">
    <a href="<?= site_url('obat') ?>">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="col-9 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner"><?= $pasien_semua ?></h5>
                            <p class="mb-0 text-muted">Data Pasien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- Column -->
<div class="col-md-6 col-lg-6 col-xl-3">
    <a href="<?= site_url('dokter') ?>">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-9 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner"><?= $dokter ?></h5>
                            <p class="mb-0 text-muted">Data Dokter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-md-6 col-lg-6 col-xl-3">
    <a href="<?= site_url('obat') ?>">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="fa fa-medkit"></i>
                        </div>
                    </div>
                    <div class="col-9 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner"><?= $obat ?></h5>
                            <p class="mb-0 text-muted">Data Obat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- Column -->


<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <div class="mb-5">

                <h4>Pintasan Pemeriksaan Pasien Baru</h4>
            </div>

            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Register</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tgl.Registrasi</th>
                            <th>Jenis Kelamin</th>
                            <th>Keluhan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($pasien_baru) && !empty($pasien_baru)) :
                            $count = 1;
                            foreach ($pasien_baru as $obj) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $obj->no_rekam ?></td>
                                    <td><?= $obj->nama ?></td>
                                    <td><?= $obj->alamat ?></td>
                                    <td><?= $obj->date ?></td>
                                    <td><?= $obj->jenkel ?></td>
                                    <td><?= $obj->keluhan ?></td>

                                    <td>
                                        <a href="<?= site_url('pemeriksaan/periksa/' . $obj->id_pasien) ?>" class="btn btn-success btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <!-- <i class="fa fa-edit"></i> -->
                                            </span>
                                            <span class="text">Periksa</span>
                                        </a>
                                        <!-- <a href="<?= site_url('dokter/delete/' . $obj->id_pasien) ?>" class="btn btn-danger btn-icon-split btn-sm hapus">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a> -->
                                    </td>
                                </tr>
                        <?php }
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>