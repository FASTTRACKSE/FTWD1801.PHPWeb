<script src="https://code.jquery.com/jquery-3.3.1.min.js"  ></script>
<button onClick="clickAjax()">Gửi ajax</button>
<input type='text' id="name"/>
<div id="noidung">
	<h2>Dong 1</h2>
	<h2>Dong 2</h2>
</div>
<script>
	
	function clickAjax(){
		var name = $("#name").val();

		$.ajax({
			url:"getAjax.php",
			type:"POST",
			dataType:"html",
			data:{ten:name,aclass:"1801"},
			success:function(response){
				document.getElementById("noidung").append(""+response+"");
				
			},
			error:function(jqXHR,textStatus,errorThrow){
				alert("fail");
				console.log(textStatus,errorThrow);
			}
		});
	}
	

</script>