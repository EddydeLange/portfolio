    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <div class="col-xs-6">
                <div class="alert-answers alert alert-danger alert-dismissible">
                    <h4><i class="icon fa fa-ban"></i> Let op!</h4>
                    Voer goede antwoorden in.
                </div>
            </div>
        <section class="content-header">
            <h1>Questions list about <?= $subjects[ARRAY_FIRST_INDEX]->subject ?></h1>
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
                            <form id="answersForm" method="post">
                                <input type="hidden" name="subjectId" value="<?= $subjects[0]->id ?>">
                                <table id="answers" class="table table-bordered table-striped overviews">
                                    <thead>
                                        <tr>
                                            <th class="no-sort">Question</th>
                                            <th class="no-sort">Your answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($questions as $question) { ?>
                                            <tr data-row-id="<?= $question->id ?>">
                                                <td>
                                                    <?= $question->question ?>
                                                </td>
                                                <td>
                                                    <input type="text" data-id='<?= $question->id ?>' name="<?= $question->id ?>" value="">
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                                <button type="submit" class="sendBtn">
                                    <i class="fa fa-send-o"></i>
                                </button>
                            </form>
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

