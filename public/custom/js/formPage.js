function addDeleteInput() {
    var liInput = $('.todo-list').html();
    var addItemBtn = $('#addItem');
    //Add input
    $(addItemBtn).on('click', function() {
        $('.todo-list').append(liInput);
    });
    //Removes input
    $('.todo-list').on('click', '.deleteInput', function() {
        $(this).closest('li').remove();
    });
}

$('#sendData').on('click', function() {
    var base_url = $('#searchTag').attr('data-baseurl');
    var formData = $('#formInput').serialize();
    $.ajax({
        url: base_url+'assignments/sendDataForm',
        dataType: 'json',
        data: formData,
        type: 'post',
        success: function(test) {
            alert(test+'succes');
        },
        error: function(test) {
            alert(test+'error');
        }
    });
});

$(document).ready(function(){
    addDeleteInput()
});
