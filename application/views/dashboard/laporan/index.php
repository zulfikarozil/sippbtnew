<style>
    .wrapper {
        display: inline;
        border: 1px solid lightgray;
        padding: 4px;
        box-shadow: inset 1px 1px 1px rgba(0, 0, 0, .1)
    }

    input {
        border: 0;
    }

    label {
        color: gray;
    }
</style>
<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <div class="row">
                <!-- <div class="form-group col-4">
                    <h6 class="text-muted fw-400">Date Range</h6>
                    <div>
                        <div class="input-daterange input-group" id="date-range">
                            <input id="tgl_mulai" type="text" class="form-control datepicker" name="tgl_awal" placeholder="Tanggal Awal" />
                            <input id="tgl_akhir" type="text" class="form-control datepicker" name="tgl_akhir" placeholder="Tanggal Akhir" />
                        </div>
                    </div>
                </div> -->
                <div class="form-group col-12">

                    <strong>Periode :</strong>
                    <form class="needs-validation" novalidate method="POST" action="<?= site_url('laporan/cetak') ?>">
                        <div class="wrapper mr-3">
                            <label for="from">Dari:</label>
                            <input type="text" id="from" name="awal" required>
                            <label for="to">Sampai:</label>
                            <input type="text" id="to" name="akhir" required>
                        </div>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-print"></i> Cetak Laporan</button>
                        <a href=""></a>
                    </form>
                </div>

            </div>
            <span><code>Pilih Tanggal Awal dan Tanggal Akhir untuk mencetak laporan</code></span>

            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Register</th>
                            <th>Nama</th>
                            <th>Tgl.Registrasi</th>
                            <th>Keluhan</th>
                            <th>Jenis Kelamin</th>
                            <th>Keputusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($pasien) && !empty($pasien)) :
                            $count = 1;
                            foreach ($pasien as $obj) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $obj->no_rekam ?></td>
                                    <td><?= $obj->nama ?></td>
                                    <td><?= $obj->date ?></td>
                                    <td><?= $obj->keluhan ?></td>
                                    <td><?= $obj->jenkel ?></td>
                                    <td><?= $obj->hasil ?></td>

                                    <td>

                                        <a target="blank" href="<?= site_url('pemeriksaan/cetak/' . $obj->id_pasien) ?>" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <!-- <i class="fa fa-trash"></i> -->
                                            </span>
                                            <span class="text">Cetak</span>
                                        </a>
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