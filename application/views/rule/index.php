<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="<?= base_url('rule/tambah') ?>" class="btn btn-primary"><span><i class="fa fa-plus"></i> Tambah</span></a>
                        </div>
                    </div>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th class="text-center" width="5%">No</th>
                                <th class="text-center">Gejala</th>
                                <th class="text-center">Gejala sebelumnya</th>
                                <th class="text-center" width="5%">Ya</th>
                                <th class="text-center" width="5%">Tidak</th>
                                <th class="text-center" width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($rule as $r) : ?>
                                <tr>
                                    <td class="text-center align-middle"><?= $i ?></td>
                                    <td class="align-middle"><?= $r['kode_gejala'] . ' - ' . $r['gejala'] ?></td>
                                    <td class="text-center align-middle"><?= $r['parent'] ?></td>
                                    <td class="text-center align-middle"><?= $r['ya'] ?></td>
                                    <td class="text-center align-middle"><?= $r['tidak'] ?></td>
                                    <td class="text-center align-middle">
                                        <a href="<?= base_url('rule/ubah/') . $r['id'] ?>" class="btn btn-sm btn-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                        <a href="<?= base_url('rule/delete/') . $r['id'] ?>" class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>