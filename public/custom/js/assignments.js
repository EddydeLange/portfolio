$(function() {
    $('#assignmentsOverview, #overviewSubjectAssignments').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "columnDefs": [ {
            "targets"  : 'no-sort',
            "orderable": false
        }]
    });
});

$('.editButton, .addButton').on('click', function() {
    var btnElement = $(this).attr('class');
    if (btnElement == 'editButton') {
        var rowId = $(this).data("row-id");
    } else {
        var rowId = '';
    }
    document.location.href = '/portfolio/assignments/formPage/' + btnElement + '/' + rowId;
});

$('.subjectRow').on('click', function() {
    var assignmentId = $(this).data("row-id");
    document.location.href = '/portfolio/assignments/overviewSubjectAssignments/' + assignmentId;
});

$('.changeQuestion').bind('click', changeQuestion);

function changeQuestion() {
    $('.changeQuestion').unbind('click');
    function changeInput(thisButton, questionVal) {
        var paragraph = document.createElement("p");
        paragraph.innerHTML = questionVal;
        $(thisButton).closest('tr').find(input).replaceWith(paragraph);
        $(thisButton).closest('td').find('button').prop('disabled', true);
        $('.deleteQuestion').prop('disabled', false);
        $('.changeQuestion').bind('click', changeQuestion);
    }

    //Creating input
    var questionVal = $(this).children("p").text();
    var input = document.createElement("input");
    input.name = 'changing';
    input.className = 'text';
    input.value = questionVal;
    //Replaced Paragraph with input for changing
    var paragraph = $(this).children("p");
    $(paragraph).replaceWith(input);
    //Enabled button
    $(this).closest('tr').find('button').prop('disabled', false);
    $('.deleteQuestion').prop('disabled', true);
    var cancelButton = $(this).closest('tr').find('button.cancelChange');
    var saveButton = $(this).closest('tr').find('button.saveInput');
    //if user cancel his action
    $(cancelButton).on('click', function() {
        $(cancelButton).unbind();
        $(saveButton).unbind();
        changeInput(cancelButton, questionVal);
    });
    //if user saves his action
    $(saveButton).on('click', function() {
        $(cancelButton).unbind();
        $(saveButton).unbind();
        var newQuestionVal = $(input).val();
        var questionId = $(saveButton).closest('tr').attr("data-row-id");
        updateQuestion(newQuestionVal, questionId, saveButton);
    });
}

function updateQuestion(newQuestionVal, questionId, saveButton) {
    var base_url = $('#searchTag').attr('data-baseurl');
    $.ajax({
        url: base_url+'assignments/updateData',
        data:  {newQuestionVal: newQuestionVal, questionId: questionId},
        method: 'post',
        success: function() {
            location.reload();
        },
        error: function() {}
    });
}

$(document).ready(function() {
    $('.deleteQuestion').prop('disabled', false);
    $('button.saveInput, button.cancelChange').prop('disabled', true);
});
