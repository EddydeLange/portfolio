$('.assignmentOption').on('click', function() {
    var assignmentId = $(this).data('assignment');
    var studentId = $(this).closest("*[data-studentId]").attr("data-studentId");
    document.location.href = '/portfolio/overview/overviewStudent/' + studentId + "/" + assignmentId;
});

$('.studentRow').on('click', function() {
    var studentId = $(this).closest("*[data-studentId]").attr("data-studentId");
    document.location.href = '/portfolio/overview/overviewAssignmentsStudent/' + studentId;
});
