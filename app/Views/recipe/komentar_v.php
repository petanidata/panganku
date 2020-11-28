<section>
<div class="container">
  <div class="row text-center align-self-center">
  <div class="col-md-12 col-lg-12 btn-komen mt-4"> Komentar</div>
  <?php foreach($komentar as $k):?>
        <hr/>
        <div class="col-md-12 col-lg-12 btn-isi-komen mt-1">
          <b><?=$k['username'];?></b> pada <?php echo date_format(date_create($k['waktu_komen']), 'H:i d-m-Y');?> <br />
          <?=$k['komentar'];?> <br />
        </div>
      
  <?php endforeach;?>
  </div>
  </div>
  </div>
  </section>