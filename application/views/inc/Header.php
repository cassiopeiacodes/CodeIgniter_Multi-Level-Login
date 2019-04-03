<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Multi Level Login</title>

	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/all.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
	
</head>
<body class="d-flex flex-column">
  <header class="row justify-content-between">
    <div class="col-auto my-auto">
      <a href="<?php echo base_url(); ?>" class="nav-link h2 text-light">
				Multilevel Login CodeIgniter
			</a>
    </div>
		<div class="col-auto my-auto">
			<?php if ($this->session->has_userdata('level')): ?>
				<a href="Logout" class="nav-link text-light">
					Logout
				</a>
			<?php endif; ?>
		</div>
  </header>

	<!-- memunculkan modal untuk notifikasi -->
	<div class="modal fade msgconfirm" tabindex="-1" role="dialog" aria-labelledby="Pemberitahuan" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Pemberitahuan">Pemberitahuan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php if(!empty($this->session->flashdata('msg_data'))) echo $this->session->flashdata('msg_data'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
