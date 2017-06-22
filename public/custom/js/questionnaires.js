
$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});


$(document).ready(function() {
    $(".sendBtn").on("click", function() {
        // var fileId = $(this).closest('tr').data('file-id');
        $.ajax({
            method: "POST",
            url: 'sendQuizAnswers/',
            success: function() {
            	console.log('goed');
                // location.reload();
                //document.location.href = '/portfolio/questionnaires/index';
                // later aanpasen!!
            },
            error: function() {
                console.log('fout');
                // location.reload();
            }
        });
    });
});