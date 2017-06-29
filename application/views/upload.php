<?php echo $error ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Uploading files</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Upload a file</h3>
                    </div>
                    <form role="form" method="POST" action="uploadFile" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputFile">File</label>
                                <input type="file" id="exampleInputFile" name="userfile">
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Answers</h3>
                    </div>
                    <form role="form" method="POST" action="sendAnswers" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="answer">Answer:</label>
                                <input id="answer" type="text" name="answer">
                                <br>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
