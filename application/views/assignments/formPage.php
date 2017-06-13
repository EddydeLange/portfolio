<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>test</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- TO DO List -->
                <div class="box box-primary">
                  <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Create Assignment</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <form id="formInput">
                        <input name="title" class="headText" type="text" placeholder="Titel vragenlijst">
                        <input name="subtopic" class="headText" type="text" placeholder="Onderwerp vragenlijst bijvoorbeeld: Economie">
                        <ul class="todo-list">
                            <li class="inputQuest">
                                <!-- drag handle -->
                                <span class="handle">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>
                                <!-- checkbox -->
                                <input name="question[]" class="text" type="text" placeholder="Vraag">
                                <!-- General tools such as edit or delete-->
                                <div class="tools deleteInput">
                                    <i class="fa fa-trash-o deleteInput"></i>
                                </div>
                            </li>
                        </ul>
                    </form>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix no-border">
                      <button id="sendData" type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Send</button>
                    <button id="addItem" type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                  </div>
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
