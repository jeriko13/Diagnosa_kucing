<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <center>
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
                </center>
            </div>
        </div>
    </div>
    <form method="post" action="<?= base_url() ?>kucing/simpan" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Id Jenis</label>
                <div class="col-sm-10">
                    <input type="text" name="id" value="<?= $id; ?>" class="form-control" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kucing</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Jenis kucing" required>
                </div>
            </div>



            <div class="box-footer">

                <a href="<?= base_url() ?>kucing" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
    </form>

</div>
</div>