
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>2-Ajax</title>
		<script>
			function theater_SORT_Ajex(){
				$.ajax({
					url: "2-AjaxP.php",
					type: "get",
					data: {
						a: $('#theater_SORT').val()
					}
				}).done(function(data){
					$('#result').text(data);
				})
			}
		</script>
	</head>
	<body>
		<h2>2-Ajax</h2>
		
		<label for="" class="">지역별 구분</label>
		<select type="text" name="" id="theater_SORT" onchange="theater_SORT_Ajex()" value="요청">
			<option value="건대입구">건대입구</option>
			<option value="강남">강남</option>
			<option value="계양">계양</option>
			<option value="홍대">홍대</option>
		</select>
		<p id="result"></p>
	</body>
</html>