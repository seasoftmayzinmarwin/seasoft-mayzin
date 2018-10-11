<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
		#description-box p.red-message {
		    display: none;
		    color: #FF0000;
		}
	</style>
</head>
<body>
<div id="description-box" class="style-box">    
    <div id="description-title" class="style-box">
        SaiwinPAYからの決済URL通知を受取るメールアドレスを入力します。
    </div>
    <div>
        <p class="message">※ドメイン指定受信をされている方は、『saiwin.co』からのメールを受信できるよう設定してください。
        </p>
    </div>
    <div>
        <p class="email-label"><label for="email">Email</label></p>
        <input class="email-input" type="email" name="email" id="email" data-id="BCH" data-code="fqxcqy3z">
        <p class="red-message">※正しいメールアドレスを入力してください</p>
        <p class="send-message">「送信する」を押して、届いたメールアドレス確認メールのリンクをクリックしてください。</p>
    </div>
    <button type="button" id="back-to-previous">キャンセル</button>
    <button type="button" id="confirm" onclick=" confirm_email();">送信する</button>
    <div class="link-check link-check-pad">
        <span class="col"><a href="/receive-method">ドメイン指定受信の方法はこちら</a></span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function confirm_email(){
			$(".red-message").show();
		}

				
</script>
</body>
</html>