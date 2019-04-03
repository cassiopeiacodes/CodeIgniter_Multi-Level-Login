<!-- isi dari footer -->
<footer class="row justify-content-between py-2" style="background-color: background-color: rgba(120, 120, 120, 0.5);">
  <!-- sebelah kiri -->
  <small class="col-auto">
    Lihat source code lainnya
    <a target="_blank" href="https://github.com/noapetra/" class="text-green" title="Pergi ke https://github.com/noapetra/">
      <i class="fab fa-github my-auto">
        <span class="px-1">noapetra</span>
      </i>
    </a>
  </small>

  <!-- sebelah kanan -->
  <small class="col-auto mr-3">
    Referensi Source Code
    <a class="text-green" title="Background oleh Pixabay dari Pexels" href="https://www.pexels.com/photo/blur-bottle-bright-building-273238/">Pixabay</a>
    <span class="mx-1">|</span>
    <a class="text-green" title="Bootstrap versi 4.3.1" href="https://getbootstrap.com/">Bootstrap</a>
    <span class="mx-1">|</span>
    <a class="text-green" title="versi 3.1.9" href="https://www.codeigniter.com/">Codeigniter</a>
    <span class="mx-1">|</span>
    <a class="text-green" title="Jquery versi 3.3.1" href="https://jquery.com/">Jquery</a>
    <span class="mx-1">|</span>
    <a class="text-green" title="Font Awesome versi 5.8.1" href="https://fontawesome.com/">FontAwesome</a>
  </small>
</footer>

<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- Untuk memunculkan pesan pada modal-->
<script>
<?php if(!empty($this->session->flashdata('msg_data'))) { ?>
  $(window).on('load',function(){
    $('.msgconfirm').modal('show');
  });
<?php } ?>
</script>
</body>
</html>
