$(function() {
    $('#overviewSubjects').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "columnDefs": [{
            "targets": 'noSort',
            "orderable": false
        }]
    });
});
