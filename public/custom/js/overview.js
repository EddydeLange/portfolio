$(function() {
    $('#overviewPeople, #overviewAssignments').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
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
    $.ajax({
        url: "overviewStudent/" + studentId + "/" + assignmentId,
        success: function() {
            document.location.href = '/portfolio/overview/overviewStudent/' + studentId + "/" + assignmentId;
            console.log(document.location);
        },
        error: function() {
            console.log('error');
        }
    });
});

$('.studentRow').on('click', function() {
    var studentId = $(this).closest("*[data-studentId]").attr("data-studentId")

    $.ajax({
        url: "overviewAssignmentsStudent/" + studentId,
        success: function() {
            document.location.href = '/portfolio/overview/overviewAssignmentsStudent/' + studentId;
            console.log(document.location);
        },
        error: function() {
            console.log('error');
        }
    });
});
