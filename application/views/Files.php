<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Geuploade files </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">alle besteander die geupload zijn aan de database.</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table filesTable table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bestand</th>
                                    <th>Groote (KB)</th>
                                    <th>Upload datum</th>
                                    <th>Verwijderen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($imports as $import) { ?>
                                    <tr data-fileId="<?= $import->id ?>">
                                        <td><?= $import->filename ?></td>
                                       
                                        <td><?= $import->file_size ?></td>
                                       
                                        <td><?= $import->file_date ?></td>   
                                        
                                        <td style="width: 10px"><button class="btn btn-danger deleteBTN">
                                       
                                        <i class="fa fa-trash"></i></button></td>  

                                    </tr>
                                <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
