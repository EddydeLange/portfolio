<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Overview of <?=$student[0]->name?></h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?=$student[0]->name?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="overviewAssignments" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Assignment</th>
                                    <th>Subtopic</th>
                                    <th>Done</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assignments as $assignment) {  ?>
                                <tr class="assignmentOption" data-studentId="<?= $student[0]->id ?>" data-assignment="<?=$assignment->id?>">
                                    <td><?= $assignment->subject?></td>
                                    <td><?= $assignment->subtopic ?></td>
                                    <td class="smallWidth <?= $assignment->done ?>"><?= $assignment->done ?></td>
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
