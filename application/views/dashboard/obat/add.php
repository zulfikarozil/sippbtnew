<div class="col-8">
    <div class="card m-b-30">
        <div class="card-body">

            <h4 class="mt-0 header-title">Data Obat</h4>

            <form class="needs-validation" novalidate method="POST" action="<?= site_url('obat/simpan') ?>">

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Nama Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="nama" id="nama" type="text" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>" id="example-text-input" placeholder="Nama" required>
                        <div class="help-block"><?php echo form_error('nama'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Golongan Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="golongan" id="golongan" type="text" value="<?= isset($_POST['golongan']) ? $_POST['golongan'] : '' ?>" id="example-text-input" placeholder="golongan" required>
                        <div class="help-block"><?php echo form_error('golongan'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Jenis Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="jenis" id="jenis" type="text" value="<?= isset($_POST['jenis']) ? $_POST['jenis'] : '' ?>" id="example-text-input" placeholder="jenis" required>
                        <div class="help-block"><?php echo form_error('jenis'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Kategori Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="kategori" id="kategori" type="text" value="<?= isset($_POST['kategori']) ? $_POST['kategori'] : '' ?>" id="example-text-input" placeholder="kategori" required>
                        <div class="help-block"><?php echo form_error('kategori'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Kegunaan Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="kegunaan" id="kegunaan" type="text" value="<?= isset($_POST['kegunaan']) ? $_POST['kegunaan'] : '' ?>" id="example-text-input" placeholder="kegunaan" required>
                        <div class="help-block"><?php echo form_error('kegunaan'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Satuan Obat</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="satuan" id="satuan" type="text" value="<?= isset($_POST['satuan']) ? $_POST['satuan'] : '' ?>" id="example-text-input" placeholder="satuan" required>
                        <div class="help-block"><?php echo form_error('satuan'); ?></div>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="kategori" id="kategori" value="<?= isset($_POST['kategori']) ? $_POST['kategori'] : '' ?>" cols="30" rows="10"></textarea>
                    </div>
                </div> -->
                <button class="btn btn-primary float-right ml-2" type="submit"><i class="fa fa-save"></i> Submit</button>
                <a class="btn btn-secondary float-right" href="<?= site_url('obat') ?>"><i class="fa fa-arrow-left"></i> Cancel</a>
            </form>
        </div>
    </div>
</div> <!-- end col -->