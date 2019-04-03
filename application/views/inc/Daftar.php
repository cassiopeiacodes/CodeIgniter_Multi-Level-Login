<div class="container-fluid flex-fill">
	<div class="col-5 ml-auto mr-0">
		<?php echo form_open('verifikasi-daftar',$daftar['open']) ?>
		<div class="jumbotron">
			<?php echo form_input($daftar['username']) ?>
			<?php echo form_error('username-daftar') ?>
			<?php echo form_password($daftar['password']) ?>
			<?php echo form_error('password-daftar') ?>
			<?php echo form_dropdown($daftar['level']) ?>
			<?php echo form_error('level') ?>
			<?php echo form_button($daftar['daftar']) ?>
	</div>

	<div class="modal fade daftar-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Modal Heading</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="lead">Lanjutkan pendaftaran dengan data di atas?</div>
				</div>
				<div class="modal-footer">
					<div class="col-3 m-0">
						<button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Tidak</button>
					</div>
					<div class="col-3 m-0">
						<button type="submit" class="btn btn-block btn-primary">Ya</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo form_close() ?>
	</div>
</div>
