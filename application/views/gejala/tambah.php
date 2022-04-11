<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- <form class="mt-4" action="<?= base_url('gejala/simpan') ?>" method="POST">
                    <h5 class="card-title">Kode Gejala</h5>
                    <div class="form-group">
                        <input type="text" name="id" value="<?= $id; ?>" class="form-control" readonly>
                    </div> -->


                <form method="post" action="<?= base_url() ?>gejala/simpan" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Id Gejala</label>
                            <div class="col-sm-10">
                                <input type="text" name="id" value="<?= $id_gejala; ?>" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Kode Gejala</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode_gejala" value="<?= $kode_gejala; ?>" class="form-control" readonly>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Gejala</label>
                            <div class="col-sm-10">
                                <input type="text" name="gejala" class="form-control" placeholder="Gejala" required>
                            </div>
                        </div>



                        <div class="box-footer">

                            <a href="<?= base_url() ?>gejala" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary ">Simpan</button>
                        </div>
                </form>

            </div>
        </div>