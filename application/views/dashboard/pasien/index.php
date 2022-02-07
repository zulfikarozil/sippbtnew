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
                            <th>Keluhan</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl.Registrasi</th>
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
                                    <td><?= $obj->keluhan ?></td>
                                    <td><?= $obj->jenkel ?></td>
                                    <td><?= $obj->date ?></td>

                                    <td>
                                        <a href="<?= site_url('pasien/edit/' . $obj->id_pasien) ?>" class="btn btn-success btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                            <!-- <span class="text">Cetak</span> -->
                                        </a>
                                        <a href="<?= site_url('pasien/delete/' . $obj->id_pasien) ?>" class="btn btn-danger btn-icon-split btn-sm hapus">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                            <!-- <span class="text">Hapus</span> -->
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