<?php echo $error ?>
<?php echo form_open_multipart('upload/uploadFile');?>

<div class="content-wrapper">
	<form method="post" enctype="multipart/form-data">
        <input type="file" name="userfile"><br><br>
    	<input type="submit" name="moveFile" value="upload">
    </form>

	<div class="col-xs-5">
		<form id="questionsForm" method="post">
			<label for="question1">Is geld een belangrijke rol bij opgroeien?</label>
			<input type="text" class="form-control" name="question1" id="question1">
			<label for="question2">Vind jij dat jongeren standaard zakgeld moeten krijgen?</label>	
			<input type="text" class="form-control" name="question2" id="question2">
			<label for="question3">Is het doden van een foetus een misdaad?</label>
			<input type="text" class="form-control" name="question3" id="question3">
			<label for="question4">Is het illegaal om een adoptatiebureau in te schakelen vanaf het buitenland?</label>
			<input type="text" class="form-control" name="question4" id="question4">
			<input type="button" class="btn btn-primary" id="submitQuestions" value="Verzenden">
		</form>
	</div>
</div>