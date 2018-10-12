<?php include('layout/login-header.php'); ?>
<div class="space"></div>
<div class="register-block">
	<main class="main-block">
		<div>
			<div class="main-form-auto">
				<div class="main-content">
					<div class="main-content-inner">
						<div class="main-segment">
							<div class="main-content-detail">
								<div class="main-register-head"><p>求人掲載のお申し込み</p></div>
								<div class="space"></div>
								<div class="main-content-register">
									<div class="main-form-guide text-center">
										<div class="space"></div>
										<p class="card-fw-bold">求人掲載を申し込みいただき、ありがとうございます。<br>最短で掲載を開始するために、以下の詳細情報を入力してください。</p>
										<p class="card-fw-normal">＊入力内容が不足している場合、お電話にて確認をとらせていただく必要があります。</p>
									</div>
									<div class="space"></div>
									<div class="register-form">
										<div class="register-title">
											<p>お申し込みフォーム</p>
										</div>
				<form method="POST" >
					<ul class="definition-table">
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">郵便番号
									</span>
								</dt>
								<dd class="definition-table-body">
									<div class="definition-input-left">
									<input type="text" value="" name="charge_family_name" class="definition-text-field definition-txt-error" placeholder="1060032" maxlength="20">
									
								</div>
								<div class="definition-input-right">
									<span><button type="button" class="zip-btn card-fw-bold">郵便番号から住所を検索</button></span>
								</div>
								<span class="definition-txt-alert">郵便番号を入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">都道府県・市区町村
									</span>
								</dt>
								<dd class="definition-table-body">
									<div class="definition-input-left e-input-left">
									<div class="card-option">
									<label class="card-selectbox">
									<select name="prefecture_id" id="prefecture_id" class="card-selectbox-select">
										<option value="0">都道府県</option>
										<option value="1">北海道</option>
										<option value="2">青森県</option>
										<option value="3">岩手県</option>
										<option value="4">宮城県</option>
										<option value="5">秋田県</option>
										<option value="6">山形県</option>
										<option value="7">福島県</option>
										<option value="8">茨城県</option>
										<option value="9">栃木県</option>
										<option value="10">群馬県</option>
									</select>
									<span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
									</span>
									</label>
								</div>

									
								</div>
								<div class="definition-input-right e-input-right">
									<div class="card-option">
									<label class="card-selectbox">
									<select name="city_id" id="city_id" class="card-selectbox-select">
										<option value="0">市区町村</option>
										<option value="1">北海道</option>
										<option value="2">青森県</option>
									</select>
									<span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
									</span>
									</label>
								</div>
								</div>
								<span class="definition-txt-alert">都道府県を選択してください<br>市区町村を選択してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">

										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">町名・番地
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="address-etc" class="definition-text-field definition-txt-error" placeholder="番地" maxlength="100">
									<span class="definition-txt-alert">町名・番地を入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
									<span class="definition-head-item ">建物名
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="address-etc" class="definition-text-field" placeholder="建物名" maxlength="100">
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
									<span class="definition-head-item ">FAX番号
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="fax" class="definition-text-field" placeholder="0123456789" maxlength="100">
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">パスワード
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="password" value="" name="pwd" class="definition-text-field definition-txt-error" placeholder="半角英数8文字以上" maxlength="100">
									<span class="definition-txt-alert">パスワードを入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">パスワード（確認）
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="password" value="" name="confirm-pwd" class="definition-text-field definition-txt-error" placeholder="パスワードを再入力してください" maxlength="100">
									<span class="definition-txt-alert">パスワードを入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item definition-head-item-left">写真
									</span>
								</dt>
								<dd class="definition-table-body">
									<h3 class="img-heading">アップロードして登録</h3>
									<div class="space-pd-top-md">
										<div class="chart-image-block" aria-disabled="false">
									<div class="chart-image-inner">
										<div class="chart-image-icon">
											<span class="chart-icon">
												<img src="">
											</span>
										</div>
										<span class="chart-image-text card-fw-bold">このエリアに画像ファイルをドラッグ＆ドロップ</span><br>
										<span class="chart-image-text">または</span><br>
										<span class="chart-image-link">画像をフォルダから選択</span>
									</div>
									<input type="file" accept="image/jpeg, image/jpg, image/gif, image/png" multiple="" autocomplete="off" style="display: none;">
										</div>
									</div>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item card-input-br-btm">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item definition-head-item-left">
									</span>
								</dt>
								<dd class="definition-table-body">
										<span class="definition-txt-alert card-fw-normal">※JPG、PNG、GIF形式の画像ファイルが登録できます<br>※1ファイルあたり最大10MBのファイルが登録できます<br>※横1200px 縦675px以上の画像の登録を推奨しています</span>
										<div class="space-pd-top-sm"></div>
										<div class="card-filter-box text-center">
								<div class="card-photo-text card-fw-bold">
								1. 外観　2. 内観　3. スタッフの集合写真　4. 設備・機材
								</div>
								<div class="space-pd-top-sm">
								この4枚以上が揃っている求人は、
								<span class="c-alert">
									<span class="definition-txt-alert-red card-fw-bold">写真がない求人より3倍ほど応募が集まる傾向にあります。</span></span><br>できるだけ多くの写真を登録されることをおすすめいたします。</div>

							</div>
								</dd>
							</dl>
						</li>

					</ul>
					<div class="space"></div>
					<div class="register-btn-group text-center">
						<button type="submit" class="register-btn space-pd-20">利用規約に同意して申し込む</button>
						<div class="space"></div>
						<a class="" target="blank" href="/rule">利用規約はこちら<i class="fa fa-clipboard" aria-hidden="true"></i>
						</a>
					</div><!-- .register-btn -->
				</form>
				<div class="space"></div>
			</div><!-- .register-form -->
		</div><!-- .main-content-register -->
	</div><!-- .main-content-detail -->
</div><!-- .main-segment -->
</div><!-- .main-content-inner -->
</div><!-- .main-content -->
</div><!-- .main-form-w -->
</div>

</main><!-- .register-main-block -->
</div><!-- .register-block -->