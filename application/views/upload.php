<?php echo $error ?>
<div class="content-wrapper">
	<form role="form" method="POST" action="uploadFile" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile" name="userfile">
        </div>
      </div>
      <div class="box-footer">
        <input type="submit" class="btn btn-primary" name="submit">
      </div>
    </form>
	<div class="col-xs-5"></div>
</div>
