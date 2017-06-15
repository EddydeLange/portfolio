$(function() {
    $('#overviewPeople, #overviewAssignments').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });
    $('#overviewStudent').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
    });
});

$('.assignmentOption').on('click', function() {
    var assignmentId = $(this).data('assignment');
    var studentId = $(this).closest("*[data-studentId]").attr("data-studentId")
    document.location.href = '/portfolio/overview/overviewStudent/' + studentId + "/" + assignmentId;
});

$('.studentRow').on('click', function() {
    var studentId = $(this).closest("*[data-studentId]").attr("data-studentId")
    document.location.href = '/portfolio/overview/overviewAssignmentsStudent/' + studentId;
});
