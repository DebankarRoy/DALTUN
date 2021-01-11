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
function remove_exam(examcode)
{
    console.log("code="+code);
    $.ajax({
		url: 'exam_edits.php',
		type: 'POST',
		data: { code:code },
		success:function(data,status){
                //alert("session changed"+code);
                console.log("session code changed");
                window.location.href = "add_questions.php";
			 }
	})
}