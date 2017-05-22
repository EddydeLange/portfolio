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
                        <table id="overviewStudent" class="table table-bordered table-striped">
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
                                            <td class="smallWidth"><?= $countQuestions?> </td>
                                            <td><?= $questionAndAnswer->question ?></td>
                                            <td>
                                            <?php if ($questionAndAnswer->answer !== '') {
                                                    echo $questionAndAnswer->answer;
                                                } else { ?>
                                                    <b>The user did not answer correctly!</b>
                                                <?php } ?>
                                            </td>
                                            <td class="smallWidth">
                                                <?= ($questionAndAnswer->answer == '' ? 'X' : '') ; ?>
                                            </td>
                                        </tr>
                               <?php }
                                } ?>
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
