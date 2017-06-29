
$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});


$(document).ready(function() {


    var formData = $('#answers input');
    $(".sendBtn").on("click", function() {
        var base_url = $('#searchTag').attr('data-baseurl');
        var answers = [];

        for(i = 0; i < formData.length; i++) {
            var answer = [formData[i].dataset.id, formData[i].value];
            // var answer = {question_id:formData[i].name, user_input:formData[i].value};
            answers.push(answer);
        }

        var form = $('#answersForm').serialize();
        $.ajax({
            url: base_url + '/questionnaires/sendQuizAnswers',
            data: form,
            method: 'POST',
            success: function(result) {
                console.log(result);
            },
            error: function() { 
                console.log('error');
            }
       });
    });
});