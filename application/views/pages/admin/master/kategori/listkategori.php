<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Kategori</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?php echo base_url() ?>listkategori">Kategori</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <?= $this->session->flashdata('message'); ?>
          <div class="card">
            <div class="card-header">

              <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>tambahdatakategori"> <i class="text-info fas fa-fw fa-plus"></i> Tambah Data Kategori</h6></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Image</th>
                      <th>Pengaturan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                    ?>
                      <tr>
                        <td align="center"><?php echo $no ?></td>
                        <td><?php echo $data->nama_kategori ?></td>
                        <td><img height="50px" src="<?= base_url('assets/img/kategori/') . $data->image ?>"></td>
                        <td width="20%">
                          <a href="<?= base_url('editdatakategori/' . $data->id); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Ubah </a>
                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'admin/deletekategori')" class="btn btn-sm btn-danger" role="button" title="Hapus"> Hapus </a>
                        </td>
                      </tr>
                    <?php
                      $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>