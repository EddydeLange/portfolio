<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Overview Assignments</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Assignments</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="assignmentsOverview" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Assignment</th>
                                    <th>Subtopic</th>
                                    <th class="no-sort">
                                        <button type="button" class="addButton">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subjects as $subject) { ?>
                                    <tr>
                                        <td><?= $subject->subject ?></td>
                                        <td><?= $subject->subtopic ?></td>
                                        <td data-dataId="<?= $subject->id ?>" class="tdWidth">
                                            <button class="editButton">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                            <button type="button" class="deleteButton">
                                                <span class="glyphicon glyphicon-eye-open"></span>
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
