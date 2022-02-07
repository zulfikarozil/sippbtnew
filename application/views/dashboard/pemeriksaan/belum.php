<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">


            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Register</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Dokter</th>
                            <th>Poli</th>
                            <th>Tgl.Registrasi</th>
                            <th>Jenis Kelamin</th>
                            <th>Keluhan</th>
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
                                    <td><?= $obj->alamat ?></td>
                                    <td><?= $obj->dokter_id ?></td>
                                    <td><?= $obj->poli_id ?></td>
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