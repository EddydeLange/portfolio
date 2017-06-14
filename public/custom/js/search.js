var base_url = $('#searchTag').attr('data-baseurl');

function changeInput(students) {
    $("input[name*='searchPerson']").on('keyup paste',function() {
        var checkCharacter = $(this).val().toLowerCase();
        var divElement = document.getElementById('dropdown-content');
        divElement.innerHTML = "";
        for (var i = 0; i < students.length; i++) {
            if (students[i].name.toLowerCase().indexOf(checkCharacter) > -1 && checkCharacter !== '') {
                var pElement = document.createElement("p");
                pElement.innerHTML = students[i].name;
                pElement.dataset.ov_number = students[i].ov_number;
                pElement.className = 'studentSuspect';
                divElement.appendChild(pElement);
            }
        }
        goToPageStudent();
    });
}

$(function() {
    $.ajax({
        url: base_url+'Search/searchChange',
        dataType: 'json',
        type: "get",
        success: function(data){
             changeInput(data);
        },
        error: function(data){
            console.log(data);
        }
    });
});

function goToPageStudent() {
    $('.studentSuspect').on('click', function() {
        var studentId = $(this).attr("data-ov_number")
        document.location.href = '/portfolio/overview/overviewAssignmentsStudent/' + studentId;
    });
}
