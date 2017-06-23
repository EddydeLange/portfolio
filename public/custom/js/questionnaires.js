
$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});


$(document).ready(function() {
    $(".sendBtn").on("click", function() {
        var base_url = $('#searchTag').attr('data-baseurl');
        $.ajax({
            url: base_url+'Questionnaires/sendQuizAnswers',
            method: 'post',
            success: function(data) {
                console.log(data);
            },
            error: function() {
                console.log('fout');
            }
        });
    });
});