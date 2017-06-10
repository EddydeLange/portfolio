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



$(document).ready(function(){
    addDeleteInput()
});
