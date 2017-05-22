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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student) {  ?>
                                <tr class="studentRow" data-studentId="<?= $student->id ?>">
                                    <td><?= $student->ov_number ?></td>
                                    <td><?= $student->name ?></td>
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
