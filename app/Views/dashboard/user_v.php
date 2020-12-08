

<section>
<br> 
<br/>
<div class="container">
<div class="section-title text-right">
  <a href="<?= base_url('registerAdmin');?>" class="btn btn-success"> Tambah Admin </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Gambar Profil</th>
      <th scope="col">Bio</th>
      <th scope="col">Status Admin</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($user as $u) { ?>
    <tr>
      <th scope="row"><a> <?=$u['id_user']; ?></th>
      <th scope="row"><?=$u['username']; ?></th>
      <th scope="row"><?=$u['nama_lengkap']; ?></th>
      <th scope="row"><?=$u['email']; ?></th>
      <th scope="row"><?=$u['jenis_kelamin']; ?></th>
      <th scope="row"><?=$u['alamat']; ?></th>
      <th scope="col">
        <?php if (! $u['gambar_profile'] == "" ) { ?>
          <img src="<?php echo base_url('img/user/'.$u['gambar_profile']); ?>" width=100px> 
        <?php } else {echo "<p>gambar tidak ada</p>";}?>
      </th>
      <th scope="row"><?=$u['bio']; ?></th>
      <th scope="row"><?=$u['is_admin']; ?></th>
    </tr>
  <?php }?>
  </tbody>
</table>
</div> 
</div>
</div>
</section>