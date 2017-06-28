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
                        <table class="table table-bordered table-striped overviews">
                            <thead>
                                <tr>
                                    <th>Assignment</th>
                                    <th>Subtopic</th>
                                    <th class="no-sort">Deadline</th>
                                    <th class="no-sort oneIcon icons">
                                        <button type="button" class="addButton">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subjects as $subject) { ?>
                                    <tr data-row-id="<?= $subject->id ?>" class="subjectRow">
                                        <td><?= $subject->subject ?></td>
                                        <td><?= $subject->subtopic ?></td>
                                        <td class="smallWidth"><?= $subject->display_date ?></td>
                                        <td class="smallWidth twoIcons">
                                            <button class="editButton">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                            <button type="button" class="<?=$subject->display?>Btn displayButton">
                                                <span class="glyphicon glyphicon-eye-<?= $subject->display ?>"></span>
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
