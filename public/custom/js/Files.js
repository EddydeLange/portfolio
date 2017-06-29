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
        $.ajax({
            method: "POST",
            url: 'deleteFile/' + fileId,
            success: function() {
               location.reload();
            },
            error: function() {}
        });
    });

    $(".successBtn").on("click", function() {
        var fileId = $(this).closest('tr').data('file-id');
        $.ajax({
            method: "POST",
            url: 'setActive/' + fileId,
            success: function() {
                location.reload();
            },
            error: function() {}
        });
    });
});
