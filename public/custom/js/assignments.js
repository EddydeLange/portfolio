$(function() {
    $('#assignmentsOverview, #overviewSubjectAssignments').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "columnDefs": [ {
            "targets"  : 'no-sort',
            "orderable": false
        }]
    });
});

$('.editButton, .addButton').on('click', function() {
    var btnElement = $(this).attr('class');
    if (btnElement == 'editButton') {
        var rowId = $(this).data("row-id");
    } else {
        var rowId = '';
    }
    document.location.href = '/portfolio/assignments/formPage/' + btnElement + '/' + rowId;
});

$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/assignments/overviewSubjectAssignments/' + assignmentId;
});
