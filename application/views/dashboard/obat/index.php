<div class="col-lg-12 col-sm-12">
    <div class="card m-b-30">
        <div class="card-body table-responsive">
            <a href="<?= site_url('obat/add') ?>" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Tambah Data</a>

            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Golongan</th>
                            <th>Jenis</th>
                            <th>Kategori</th>
                            <th>Kegunaan</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php if (isset($obat) && !empty($obat)) :
                            $count = 1;
                            foreach ($obat as $obj) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $obj->nama ?></td>
                                    <td><?= $obj->golongan ?></td>
                                    <td><?= $obj->jenis ?></td>
                                    <td><?= $obj->kategori ?></td>
                                    <td><?= $obj->kegunaan ?></td>
                                    <td><?= $obj->satuan ?></td>

                                    <td>
                                        <a href="<?= site_url('obat/edit/' . $obj->id_obat) ?>" class="btn btn-success btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                        <a href="<?= site_url('obat/delete/' . $obj->id_obat) ?>" class="btn btn-danger btn-icon-split btn-sm hapus">
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