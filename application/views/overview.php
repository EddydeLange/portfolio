<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Overview Student</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="overviewPeople" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>OV Number</th>
                                    <th>Student</th>
                                    <th class="no-sort">Assignments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student) {  ?>
                                <tr class="test" data-studentId="<?= $student->id ?>">
                                    <td><?= $student->ov_number ?></td>
                                    <td><?= $student->name ?></td>
                                    <td>
                                        <select class="assignmentOptions">
                                            <option class="firstOption" selected="true" disabled="disabled">--Choose your assignment--</option>
                                            <?php foreach ($assignments as $assignment) { ?>
                                                <option data-assignment="<?=$assignment->id?>" class="assignmentOption"> <?= $assignment->subject.' -- '.$assignment->subtopic?></option>
                                            <?php } ?>
                                        </select>
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
