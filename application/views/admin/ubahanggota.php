<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Ubah Profile Anggota
    </h1>
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
      <form class="form-horizontal" action="<?php echo site_url('admin/anggota')?>" method='post' enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-8">
      <input type="text" name="nama" class="form-control"  value="<?=$detail['nama']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Usia</label>
    <div class="col-sm-5">
      <input type="text" name="usia" class="form-control"  value="<?=$detail['usia']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">No. HP</label>
    <div class="col-sm-8">
      <input type="text" name="no_telp" class="form-control"  value="<?=$detail['no_telp']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Kota Domisili</label>
    <div class="col-sm-6">
      <input type="text" name="domisili" class="form-control"  value="<?=$detail['kota_domisili']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-6">
      <input type="text" name="tmp_lahir" class="form-control"  value="<?=$detail['tempat_lahir']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-6">
      <input type="text" name="tgl_lahir" class="form-control"  value="<?=$detail['tgl_lahir']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tinggi Badan</label>
    <div class="col-sm-3">
      <input type="text" name="tinggibadan" class="form-control"   value="<?=$detail['tinggi_badan']?>">
    </div>
    <label class="col-sm-2 control-label">Berat Badan</label>
    <div class="col-sm-3">
      <input type="text" name="beratbadan" class="form-control"  value="<?=$detail['berat_badan']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Status Pernikahan</label>
    <div class="col-sm-6">
      <input type="text" name="status" class="form-control"  value="<?=$detail['status']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Pengalaman</label>
    <div class="col-sm-10">
      <textarea name="pengalaman" class="form-control" ><?=$detail['pengalaman']?></textarea>
    </div>
  </div>
   <div class="form-group">
      <label class="col-sm-2 control-label">Grade</label>
    <div class="col-sm-4">
     <input type="text" name="grade" class="form-control"  value="<?=$detail['grade']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Insentif</label>
    <div class="col-sm-10">
      <input type="text" name="insentif" class="form-control"   value="<?=$detail['insentif']?>">
    </div>
  </div>
  <!--   <div class="form-group">
    <label class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">
      <input type="file" name="photo">
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-sm-2 pull-right">
      <button href="<?=site_url("Admin/anggota")?>" class="btn btn-danger">BATAL</button>
    </div>
    <div class="col-sm-2 pull-right">
      <button type="submit" class="btn btn-primary">SIMPAN</button>
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
