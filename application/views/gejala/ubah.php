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
                <form class="mt-4" action="<?= base_url('gejala/update/') . $gejala['id_gejala'] ?>" method="POST">
                    <h5 class="card-title">Kode Gejala</h5>
                    <div class="form-group">
                        <input type="text" class="form-control col-sm-1" name="kode" id="kode" value="<?= $gejala['kode_gejala']; ?>" readonly>
                    </div>

                    <h5 class="card-title">Gejala</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="gejala" id="gejala" value="<?= $gejala['gejala']; ?>" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>