<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
div{text-align:center;}
.input{display:block; height:100px;width:500px; margin:0 auto 0 auto;}
#input, #output{height:200px;}
</style>

<div>
	<span>Gwaai Gwaai Swap</span>
	<form>
		<input id="input" class="input" placeholder="Input text here"></input>
		<input id="submit" class="input" type="submit" value="Submit">
		<input id="output" class="input" placeholder="Result after converted"></input>
	</form>
</div>

<script>
function reverse(text){
	var word= text;
	var j	= word.length - 1;
	var str	= '';

	for (var i = 0; i < word.length; i++) {
		str += word.charAt(j);
		j--;
	}
	return str;
}// !reverse()

function submit(){
$('form').submit(function(){
		var org_text = $('#input').val();
		$('#output').val(reverse(org_text));
		
		return false;
	});
}// !submit()
function select_text(){
	$('#output').click(function(){
		$('#output').select();
	});
}
/*
--------------------	*/
$( document ).ready(function(){
	submit();
	select_text();
});
</script>