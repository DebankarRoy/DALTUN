function addQuestion() {
    var frm = $('#add_question');
    console.log(frm.serialize);
    $('#add_question').validate({
        rules: {
            question: 'required',
            option1: 'required',
            option2: 'required',
            option3: 'required',
            option4: 'required',
            radiooption: 'required'
        }
    });
    if (frm.valid()) {
        $.ajax({
            type: "POST",
            url: "questions.php",
            data: frm.serialize(),
            success: function(data, status) {
                alert("success" + data);
                readRecordQuestion();
                document.getElementById('add_question').reset();
            }
        });
    }
}

function readRecordQuestion() {
    //alert("asds");
    var readRecordQuestion = 'readRecordQuestion';
    $.ajax({
        type: "POST",
        url: "questions.php",
        data: { readRecordQuestion: readRecordQuestion },
        success: function(data, status) {
            //alert("showing");
            $('.question_viewer').html(data);
        }
    });
}