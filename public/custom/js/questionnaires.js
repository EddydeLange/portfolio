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



$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});
