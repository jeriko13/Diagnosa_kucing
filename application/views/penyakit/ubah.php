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
                <form class="mt-4" action="<?= base_url('penyakit/update/') . $penyakit['id_penyakit'] ?>" method="POST">
                    <h5 class="card-title">Kode Penyakit</h5>
                    <div class="form-group">
                        <input type="text" class="form-control col-sm-1" name="kode" id="kode" value="<?= $penyakit['kode_penyakit']; ?>" readonly>
                    </div>

                    <h5 class="card-title">Penyakit</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="penyakit" id="penyakit" value="<?= $penyakit['penyakit']; ?>" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>

                    <h5 class="card-title">Solusi</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="solusi" id="solusi" value="<?= $penyakit['solusi']; ?>" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>

                    <h5 class="card-title">Gejala</h5>

                    <?php foreach ($gejala as $g) { ?>
                        <fieldset class="checkbox">
                            <label>
                                <input class="check-input mr-2" type="checkbox" name="gejala[]" data-penyakit="<?= $penyakit['id_penyakit']; ?>" data-gejala="<?= $g['id_gejala']; ?>" value="<?= $g['id_gejala'] ?>" <?= check_relasi($penyakit['id_penyakit'], $g['id_gejala']); ?>> <?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?>
                            </label>
                        </fieldset>
                    <?php } ?>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>