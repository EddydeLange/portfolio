$(function() {
    $('.overviews').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "columnDefs": [{
            "targets": 'no-sort',
            "orderable": false
        }]
    });
    // //Datatables with ordering off
    // $('').DataTable({
    //     "paging": true,
    //     "lengthChange": true,
    //     "searching": true,
    //     "ordering": false,
    //     "info": true,
    //     "autoWidth": true
    // });
});
