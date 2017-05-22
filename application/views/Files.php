<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Files</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<p>Fenno's Page</p>
<?php foreach($fileNames as $fileName) { ?>
    		<div class="row">
				<?= $fileName ?>
    		</div>
<?php } ?>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
