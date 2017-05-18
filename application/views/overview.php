<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Overview Student
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>OV Number</th>
                            <th>Student</th>
                            <th class="no-sort">Assignments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) {  ?>
                        <tr id="<?= $student->id ?>">
                            <td><?= $student->ov_number ?></td>
                            <td><?= $student->name ?></td>
                            <td>
                                <select class="assignmentOptions">
                                    <option class="firstOption" selected="true" disabled="disabled">--Choose your assignment--</option>
                                    <?php foreach ($assignments as $assignment) { ?>
                                        <option><?= $assignment->subject.' -- '.$assignment->subtopic?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>OV Number</th>
                            <th>Student</th>
                            <th>Assignments</th>
                        </tr>
                    </tfoot>
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

<div class="box box-default collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Expandable</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
      </button>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    The body of the box
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
