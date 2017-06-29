<div class="content-wrapper">
    <section class="content-header">
        <h1>Verwijderde files</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Removed files.</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped overviews">
                            <thead>
                                <tr>
                                    <th>Bestand</th>
                                    <th>Groote (KB)</th>
                                    <th>Upload datum</th>
                                    <th class="no-sort">Definitief Verwijderen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($imports as $import) { ?>
                                    <tr data-file-id="<?= $import->id ?>">
                                        <td><?= $import->filename ?></td>
                                        <td><?= $import->file_size ?></td>
                                        <td><?= $import->file_date ?></td>
                                        <td class="smallWidth twoIcons">
                                            <button class="deleteBtn">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button class="successBtn">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
