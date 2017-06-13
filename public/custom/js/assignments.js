$(function() {
    $('#assignmentsOverview').DataTable({
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
        var rowId = $(this).closest("*[data-dataId]").attr("data-dataId")
    } else {
        var rowId = '';
    }
    document.location.href = '/portfolio/assignments/formPage/' + btnElement + '/' + rowId;
});

$('.subjectRow').on('click', function() {
    var assignmentId = $(this).closest("*[data-dataId]").attr("data-dataId")
    document.location.href = '/portfolio/assignments/overviewAssignmentsSubject/' + assignmentId;
});
