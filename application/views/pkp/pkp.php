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
        <a href="<?php echo base_url('pirt/pkp/tambah_pkp'); ?>">
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah PKP</button>
        </a>
        <a href="<?php echo base_url() . 'download/download_pkp' ?>" class="btn btn-warning"><i class="fas fa-file-download"></i> Download Format Import</a>
        <a href="<?= site_url('import/pkpimport/create') ?>" class="btn btn-success"><i class="fas fa-file-upload"></i> Import</a><br><br>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data PKP</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Penanggungjawab</th>
                        <th>NIK</th>
                        <th>Tanggal Penyuluhan</th>
                        <th>Tanggal Cetak</th>
                        <th>Sertifikat</th>
                        <th>Status</th>
                        <th>
                            <center>Aksi</center>
                        </th>
                    </tr>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data_pkp as $row) {
                        $no++;
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama_pj'] ?></td>
                            <td><?php echo $row['nik'] ?></td>
                            <td><?php echo date_indo($row['tgl_penyuluhan']) ?></td>
                            <td><?php echo date_indo($row['tgl_cetak']) ?></td>
                            <td><?php echo $row['sertifikat'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td>
                                <center>
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(''); ?>pirt/pkp/edit_pkp/<?php echo $row['id_pkp']; ?>">
                                        <i class="fas fa-edit"></i> edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ?')" href="<?php echo base_url(''); ?>pirt/pkp/hapus_pkp/<?php echo $row['id_pkp']; ?>">
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