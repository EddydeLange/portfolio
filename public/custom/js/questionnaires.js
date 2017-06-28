
$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});


$(document).ready(function() {


    var formData = $('#answers input');
    $(".sendBtn").on("click", function() {
        var base_url = $('#searchTag').attr('data-baseurl');
        var subjectId = $(this).data('subject-id');
        var answers = [];

        for(i = 0; i < formData.length; i++) {
            var answer = [formData[i].dataset.id, formData[i].value];
            // var answer = {question_id:formData[i].name, user_input:formData[i].value};
            answers.push(answer);
        }

        $.ajax({
            url: base_url+'Questionnaires/sendQuizAnswers/' + subjectId,
            data: answers,
            method: 'post',
            success: function(data) {
                console.log(answers);
            },
            error: function() { 
                console.log('error');
            }
        });
    });
});