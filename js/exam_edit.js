function edit_exam(examcode)
{
    console.log("code="+examcode);
    $.ajax({
		url: 'exam_edits.php',
		type: 'POST',
		data: { examcode:examcode },
		success:function(data,status){
                //alert("session changed"+code);
                console.log("session code changed");
                window.location.href = "add_questions.php";
			 }
	})
}
function remove_exam(code)
{
    $.ajax({
		url: 'exam_edits.php',
		type: 'POST',
		data: { deletecode:code },
		success:function(data,status){
				//console.log("deleting");
				//alert(data);
                readEnrolledExamsTeacher();
			 }
	})
}

function enrolled_students(examcode)
{
    $.ajax({
		url: 'exam_edits.php',
		type: 'POST',
		data: { examcode:examcode },
		success:function(data,status){
			//alert("session code changed"+examcode);
			window.location.href = "enrolled_students.php";
			}
	})
}
