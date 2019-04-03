	<div class="container-fluid flex-fill">
		<div class="col-10 jumbotron m-auto">
			<h3 class="text-center display-4">Selamat Datang</h3>
			<hr class="my-5">
			<small>Hi, <?php echo $this->session->userdata('username') ?></small>
			<p class="lead">Kamu login dengan hak akses <strong><?php echo $this->session->userdata('level') ?></strong></p>
		</div>
	</div>
