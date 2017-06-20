<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Vragenlijst over <?= $subjects[ARRAY_FIRST_INDEX]->subject ?></h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="overviewSubjectAssignments" class="table table-bordered table-striped">
                            <thead>
                                <tr>             
                                    <th class="no-sort">Vraag</th>
                                    <th class="no-sort">Jouw andwoord</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($questions as $question) { ?>
                                    <tr data-row-id="<?= $question->id ?>">
                                        <td>
                                            <?= $question->question ?>
                                        </td>
                                        <td>
                                            <input type="text" name="Answer">
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
