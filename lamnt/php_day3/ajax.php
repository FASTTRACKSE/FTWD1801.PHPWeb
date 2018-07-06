<script src="https://code.jquery.com/jquery-3.3.1.min.js"  ></script>
<button onClick="clickAjax()">Gửi ajax</button>
<input type='text' id="name"/>
<p id="ten"></p>
<script>
	
	function clickAjax(){
		var name = $("#name").value;
		$.ajax({
			url:"getAjax.php",
			type:"POST",
			data:{aname:name,aclass:"1801"},
			success:function(response){
				$("#ten").text(response);
				
			},
			error:function(jqXHR,textStatus,errorThrow){
				alert("fail");
				console.log(textStatus,errorThrow);
			}
		});
	}
	

</script>