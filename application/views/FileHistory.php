<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Verwijderde files</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">alle besteander die verwijderd zijn.</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table filesTable table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bestand</th>
                                    <th>Groote (KB)</th>
                                    <th>Upload datum</th>
                                    <th class="noSort">Definitief Verwijderen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($imports as $import) { ?>
                                    <tr data-file-id="<?= $import->id ?>">
                                        <td><?= $import->filename ?></td>        
                                        <td><?= $import->file_size ?></td>    
                                        <td><?= $import->file_date ?></td>   
                                        <td class="tdWidth">
                                            <button class="deleteBtn">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
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
