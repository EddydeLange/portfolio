$(function() {
    $('.filesTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "columnDefs": [{
            "targets": 'noSort',
            "orderable": false
        }]
    });
});

$(document).ready(function() {
    $(".deleteBtn").on("click", function() {
        var fileId = $(this).closest('tr').data('file-id');
        $.ajax({
            method: "POST",
            url: 'deleteFile/' + fileId,
            success: function() {
                location.reload();
            },
            error: function() {
                location.reload();
            }
        });
    });
});