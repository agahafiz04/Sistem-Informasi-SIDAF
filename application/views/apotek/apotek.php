<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } else if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } else if ($this->session->flashdata('warning')) { ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php } else if ($this->session->flashdata('info')) { ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>

    <div class="col-md-12">
        <a href="<?php echo base_url('ia/apotek/tambah_apotek'); ?>">
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
            <a href="<?php echo base_url() . 'download/download_apotek' ?>" class="btn btn-warning"><i class="fas fa-file-download"></i> Download Format Import</a>
            <a href="<?= site_url('import/apotekimport/create') ?>" class="btn btn-success"><i class="fas fa-file-upload"></i> Import</a>
            <a href="<?= site_url('export/apotekexport/export') ?>" class="btn btn-info"><i class="fas fa-file-export"></i> Export</a><br><br>
        </a>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Apotek</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Apotek</th>
                        <th>SIA</th>
                        <th>NIB</th>
                        <th>Tgl Daftar</th>
                        <th>Masa Berlaku</th>
                        <th>Alamat Apotek</th>
                        <th>APA</th>
                        <th>No.Telp APA</th>
                        <th>PSA</th>
                        <th>No.Telp PSA</th>
                        <th>SIPA</th>
                        <th>Masa Berlaku SIPA</th>
                        <th>Apoteker Pendamping</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>
                            <center>Aksi</center>
                        </th>
                    </tr>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data_apotek as $row) {
                        $no++;
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nm_apotek'] ?></td>
                            <td><?php echo $row['sia'] ?></td>
                            <td><?php echo $row['nib'] ?></td>
                            <td><?php echo date_indo($row['tgl_daftar']) ?></td>
                            <td><?php echo date_indo($row['masa_apotek']) ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['apa'] ?></td>
                            <td><?php echo $row['telp_apa'] ?></td>
                            <td><?php echo $row['psa'] ?></td>
                            <td><?php echo $row['telp_psa'] ?></td>
                            <td><?php echo $row['sipa'] ?></td>
                            <td><?php echo date_indo($row['masa_sipa']) ?></td>
                            <td><?php echo $row['apoteker_pendamping'] ?></td>
                            <td><?php echo $row['keterangan'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td>
                                <center>
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(''); ?>ia/apotek/edit_apotek/<?php echo $row['id_apotek']; ?>">
                                        <i class="fas fa-edit"></i> edit
                                    </a>
                                    <a href="<?php echo base_url(''); ?>ia/apotek/hapus_apotek/<?php echo $row['id_apotek']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> hapus
                                    </a>
                                </center>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->