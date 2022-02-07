<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <a href="<?= site_url('dokter/add') ?>" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Data</a>

            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NIP</th>
                            <th>Alamat</th>
                            <th>Tmp,Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Spesialis</th>
                            <th>Unit Poli</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php if (isset($dokter) && !empty($dokter)) :
                            $count = 1;
                            foreach ($dokter as $obj) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $obj->nama ?></td>
                                    <td><?= $obj->nip ?></td>
                                    <td><?= $obj->alamat ?></td>
                                    <td><?= $obj->tmplahir ?>,<?= $obj->tgllahir ?></td>
                                    <td><?= $obj->jenkel ?></td>
                                    <td><?= $obj->spesialis ?></td>
                                    <td><?= $obj->poli_id ?></td>

                                    <td>
                                        <a href="<?= site_url('dokter/edit/' . $obj->id_dokter) ?>" class="btn btn-success btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                        <a href="<?= site_url('dokter/delete/' . $obj->id_dokter) ?>" class="btn btn-danger btn-icon-split btn-sm hapus">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
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