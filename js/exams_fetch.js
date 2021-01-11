function readEnrolledExams(){
	var readEnrolledExams = 'readEnrolledExams';
	$.ajax({
		url: 'exams_fetch.php',
		type: 'POST',
		data: { readEnrolledExams:readEnrolledExams },
		success:function(data,status){
	 			$('#fetched_exams').html(data);
	 			
			 }
	})
}

function readExamsResults(){
	var readExamsResults = 'readExamsResults';
	$.ajax({
		url: 'exams_fetch.php',
		type: 'POST',
		data: { readExamsResults:readExamsResults },
		success:function(data,status){
	 			$('#fetched_results').html(data);
	 			
			 }
	})
}

function readEnrolledExamsTeacher(){
	var readEnrolledExamsTeacher = 'readEnrolledExamsTeacher';
	$.ajax({
		url: 'exams_fetch.php',
		type: 'POST',
		data: { readEnrolledExamsTeacher:readEnrolledExamsTeacher },
		success:function(data,status){
	 			$('#fetched_exams').html(data);
	 			
			 }
	})
}



