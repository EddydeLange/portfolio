$(function() {
    $('.filesTable').DataTable({
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


$(document).ready(function() {

    $(".deleteButton").on("click", function() {
        var fileId = $(this).closest('tr').data('file-id');
        $.ajax({
            method: "POST",
            url: 'setInactive/' + fileId,
            success: function() {
                location.reload();
            },
            error: function() {
                location.reload();
            }
        });
    });

    $(".deleteBtn").on("click", function() {
        var fileId = $(this).closest('tr').data('file-id');
        var result = confirm("Weet je het zeker");
        if (result) {
            $.ajax({
                method: "POST",
                url: 'deleteFile/' + fileId,
                success: function() {
                   location.reload();
                },
                error: function() {}
            });
        }
    });
});
