  <div class="container-fluid flex-fill row">
      <div class="p-5 col-5 my-auto ml-auto mr-0 loginform">
				<?php echo form_open('verifikasi-login',$login['open']) ?>
        <?php echo form_input($login['username']) ?>
        <span class="row">
          <?php if (!empty(form_error('username'))): ?>
            <?php echo form_error('username'); ?>
          <?php else: ?>
            <small class="mx-2 form-text ">Harap masukkan username dengan benar baik besar maupun kecilnya huruf</small>
          <?php endif; ?>
        </span>

        <?php echo form_password($login['password']) ?>
        <span class="row">
          <?php if (!empty(form_error('password'))): ?>
            <?php echo form_error('password'); ?>
          <?php else: ?>
            <small class="mx-2 form-text ">Pastikan anda memasukkan password dengan benar</small>
          <?php endif; ?>
        </span>

        <?php echo form_button($login['login']) ?>
        <?php echo form_close(); ?>
				<div class="row my-4">
					<hr class="col">
					<span class="col-auto">ATAU</span>
					<hr class="col">
				</div>

        <a class="btn btn-block btn-secondary text-light" href="Daftar">
          Daftar Sekarang
        </a>

      </div>
  </div>
