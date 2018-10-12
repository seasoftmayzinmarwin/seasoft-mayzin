<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css">
	#description-box .message{
		font-size: 11px;
	}
	#description-box button {
		width: 45%;
		padding: 9px;
		border: 1px solid #ccc;
		border-radius: 10px;
	}
	#description-box label{
		margin:0px;
	}
	#description-box input{
		display: block;
		width: 100%;
		padding: 8px 1px;
		font-size: 1rem;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
	}
	#description-box #amount,
	#description-box #wallet {
		height: 85px;
		text-align: left;
		position: relative;
		margin-top:20px;
	}

	#description-box #wallet-title #qr-button {
		cursor: pointer;
		height: 40px;
		border-radius: 4px;
		border: solid 1px #0666d0;
		font-weight: 600;
		line-height: 1.43;
		text-align: center;
		color: #0666d0;
		padding: 10px 35px;
		-webkit-align-items: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		font-size: 14px;
	}

	#description-box #wallet #wallet-title {
		width: 100%;
		height: 20px;
		margin-bottom: 5px;
	}
	#description-box p.email-label,#description-box p.wallet-label,#description-box p.wallet-label-2{
		line-height: 0px;
		font-weight: bold;
		font-size: 14px;
	}
	#description-box p.wallet-label{
		padding-bottom: 10px;
	}
	.wallet-label-2 label{
		padding-left: 17px;
	}
	.wallet-label-2 #wallet-address {
		/* width: 270px; */
		display: block;
		width: 84%;
		height:auto;
		margin-top: 23px;
		margin-left: 15px;
	}
	#description-box p.red-message{
		display:none;
		color:#FF0000;
	}
	#description-box p.require-message,p.require-message1,p.require-message2,p.require-message3{
		display: none;
		color:#FF0000;
	}
	#description-box p.send-message{
		font-size: 11px;
	}
	#description-box #input-data,#description-box p.wallet-label-2{
		margin-top: 20%;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="description-box" class="style-box">
				<form id="tab">
					<div>
						<label>Username</label>
						<input type="text" value="" id="changestyle" class="input-xlarge" required="required">
						<p class="require-message">※ウォレットアドレスの入力が必須です。</p><br>
					</div>
					<div>
						<label>First Name</label>
						<input type="text" id="changestyle"  value="" class="input-xlarge" required="required">
						<p class="require-message1">※First Name Required!</p><br>
					</div>
					<div>
						<label>Last Name</label>
						<input type="text" value="" class="input-xlarge" required="required">
					</div>
					<div class="">
						<label>Email</label>
					<input type="text" value="" class="input-xlarge" required="required">
				</div>
				<div>
					<label for="">Password</label>
					<input type="password" name="" minlength="7" required="required">
				</div>
				<div>
					<label>Address</label>
					
					
					<textarea value="Smith" rows="3" class="input-xlarge">
					</textarea>

					<div>
						<button id="submit-register" class="submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- <div id="description-box" class="style-box">
<div id="input-data">
	<p class="wallet-label"><label for="wallet">Wallet address</label></p>
	<input type="text" id="changestyle" minlength="7" required="required">
	<p class="red-message">※正しウォレットアドレスを入力してください。</p>
	<p class="require-message">※ウォレットアドレスの入力が必須です。</p><br>
	<button id="save" class="submit-btn">Submit</button>
</div>
</div>-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function (){
		
		// $("#submit-register").click(function (e){
		// 	e.preventDefault();
		// 	var changestyle = $("#changestyle").val();

		// 	if(!changestyle)
		// 	{	
		// 		$(".red-message").hide();
		// 		$(".require-message").show();
		// 	}
			
		// });
		$('#submit-register').click(function(e) {
		$('#submit-register').removeClass('require-message');
		$(this).addClass('require-message');
		e.preventDefault();
	});
		
	});
</script>
</body>
</html>