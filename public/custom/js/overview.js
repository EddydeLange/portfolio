$(function() {
    $('#overviewPeople').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        // "columnDefs": [
        //     {
        //         "orderable": false,
        //         "targets": 2
        //     }
        // ]
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
