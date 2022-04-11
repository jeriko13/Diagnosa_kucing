<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Jenis Kucing</h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right form-inline">
                            <form action="<?= base_url('kucing/tambah_jenis/') ?>" method="POST">
                                <input type="text" class="form-control mr-2" name="jenis">
                                <button class="btn btn-primary"> Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <table class="table table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th class="text-center" width="1%">No</th>
                            <th class="text-center" width="10%">Nama</th>
                            <th class="text-center" width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($jenis as $m) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('gejala/ubah/') . $m['id'] ?>" class="btn btn-sm btn-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                    <a href="<?= base_url('gejala/delete/') . $m['id'] ?>" class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Nama Kucing</h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right form-inline">
                            <form action="<?= base_url('kucing/tambah_namakucing') ?>" method="POST">
                                <input type="text" class="form-control mr-2" name="namakucing">
                                <button class="btn btn-primary"> Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th class="text-center" width="1%">No</th>
                            <th class="text-center" width="10%">Nama</th>
                            <th class="text-center" width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($namakucing as $s) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?= $s['nama'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('gejala/ubah/') . $s['id'] ?>" class="btn btn-sm btn-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                    <a href="<?= base_url('gejala/delete/') . $s['id'] ?>" class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>