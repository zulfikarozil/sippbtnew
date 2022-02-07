<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">


            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Register</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Hasil Periksa</th>
                            <th>Tgl.Registrasi</th>
                            <th>Tgl.Periksa</th>
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
                                    <td><?= $obj->dokter_id ?></td>
                                    <td><?= $obj->hasil ?></td>
                                    <td><?= $obj->date ?></td>
                                    <td><?= $obj->tgl ?></td>

                                    <td>
                                        <a href="<?= site_url('pemeriksaan/edit/' . $obj->id_pasien) ?>" class="btn btn-success btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <!-- <i class="fa fa-edit"></i> -->
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
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