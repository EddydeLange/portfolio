
$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/questionnaires/overviewQuiz/' + assignmentId;
});


$(document).ready(function() {
    var formData = $('#answers input');
    $(".sendBtn").on("click", function() {
        console.log(formData);

        for(i = 0; i <= formData.length; i++) {
            console.log(formData[i].value)
            // check of formData index geen value heeft dan break
            if (!formData[i].value) {
                break;
            }
        }
    });

    // $(".sendBtn").on("click", function() {
    //     var base_url = $('#searchTag').attr('data-baseurl');
    //     var subjectId = $(this).data('subject-id');
    //     $.ajax({
    //         url: base_url+'Questionnaires/sendQuizAnswers/' + subjectId,
    //         data: formData,
    //         method: 'post',
    //         success: function(data) {
    //             console.log(data);
    //         },
    //         error: function() { 
               
    //         }
    //     });
    // });
});