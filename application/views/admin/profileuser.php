<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Profile Saya
    </h1>

      <?php if ($this->session->flashdata('info')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i>Info</h4>
          Berhasi
        </div>
      <?php endif ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
  <div class="box box-solid box-default">
    <!-- box header -->
    <div class="box-header with-border">
      <h3 class="box-title">Detail Profile</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
        title="Collapse">
        <i class="fa fa-minus"></i></button>

      </div>
    </div>
    <!-- box body -->
    <div class="box-body">
      <form class="form-horizontal" action="<?php echo site_url('crud_user/update_profile')?>" method='post' enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" name="nama" class="form-control" value="<?=$nama?>" required="true">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="id_user" class="form-control" value="<?=$id_user?>" required="true">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Level</label>
    <div class="col-sm-8">
    <input type="text" name="nama" class="form-control" value="<?=$level?>" required="true" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">No.Telp</label>
    <div class="col-sm-8">
      <input type="text" name="no_telp" class="form-control" value="<?=$no_telp?>" required="true">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Foto Profile</label>
    <div class="col-sm-8">
      <input type="file" name="fotoprofile" value="<?=$foto?>" required="true">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 pull-right">
      <button type="submit" class="btn btn-primary" name="tambahuser">Simpan</button>
    </div>
  </div>
</form>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
