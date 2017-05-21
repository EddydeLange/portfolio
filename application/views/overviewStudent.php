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
                        <h3 class="box-title">Assignment <?=$subject[0]->subject . ' of the subject ' . $subject[0]->subtopic ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="overviewPeople" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Correct</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!$questionsAndAnswers == null) {
                                    $countQuestions = 0;
                                    foreach ($questionsAndAnswers as $questionAndAnswer) {
                                        $countQuestions++ ?>
                                        <tr>
                                            <td><?= $countQuestions?> </td>
                                            <td><?= $questionAndAnswer->question ?></td>
                                            <td>
                                            <?php if ($questionAndAnswer->answer !== '') {
                                                    echo $questionAndAnswer->answer;
                                                } else { ?>
                                                    <b>The user did not answered this answer correctly!</b>
                                                <?php } ?>
                                            </td>
                                            <td class="wrong">
                                                <?= ($questionAndAnswer->answer == '' ? 'X' : '') ; ?>
                                            </td>
                                        </tr>
                               <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="4">There are no results of this subject... One of the reasons why you received this message is that the user did not submit his assignment yet.</td>
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
