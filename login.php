<?php include('layout/login-header.php'); ?>
 <div class="space"></div>
	<div class="login-block">
		<main class="main-block">
			<div>
				<div class="main-form-w">
					<div class="main-content">
						<div class="main-content-inner">
							<div class="main-segment">
								<div class="main-content-detail">
									<div class="main-content-login">
										<div class="text-center"><h2 class="heading">採用管理画面ログイン</h2>
										</div><!-- .heading -->
										<form novalidate="">
											<div class="form-body">
												<div class="form-field">
													<label class="form-field-label">メールアドレス</label>
													<div class="form-field-input">
														<input type="email" name="email" class="form-text-field" placeholder="example@job-medley.com">
													</div>
												</div>
												<div class="form-field pw-field">
													<label class="form-field-label">パスワード</label>
													<div class="form-field-input">
														<input type="password" name="password" class="form-text-field">
													</div>
												</div>
												<div class="form-reset-guide clearfix">
													<a class="form-reset-link pull-right" href="/customers/reset_form">パスワードを設定していない、またはお忘れの方はこちら</a>
												</div>
											</div>
											<div class="form-footer text-center">
												<button type="submit" class="login-btn">ログイン</button>
												<p class="">メールアドレスをお忘れの場合やログインができない場合は、<br> 
													<a href="mailto:support@medley.jp" class="c-link">support@medley.jp</a> または <span class=""><strong>03-4520-9821</strong> <span class=""><strong>※9:00-18:00（土日祝除く）</strong></span></span><br>までお問い合わせください。<br>推奨のOSやブラウザの確認は 
													<a href="/browser" class="" target="_blank">こちら</a> から御覧ください。
												</p>
											</div>
										</form>	
									</div><!-- .main-content-login -->		
								</div>		
							</div>		
						</div><!-- .main-content-inne -->
						<div class="main-content-inner">
							<div class="main-segment">
								<div class="main-content-detail">
									<div class="main-content-login">
										<div class="text-center"><p class="heading-02">まだご利用を開始されていない医院・事業所様はこちら</p>
										<a class="btn e-btn-primary btn-lg active register-btn" href="/customers/new">求人掲載のお申し込み</a>

										</div><!-- .text-center -->
										<div class="space"></div>
										<div class="text-center"><p class="heading-02">お仕事をお探しの方はこちら</p>
										<a class="btn e-btn-primary btn-lg active register-btn" href="/customers/new">求職者ログイン</a>
										
										</div><!-- .heading -->
									</div><!-- .main-content-login -->		
								</div>		
							</div>		
						</div><!-- .main-content-inne -->	
					</div><!-- .main-content -->	
				</div>		
			</div>
		</main><!-- .main-block -->
	</div><!-- .login-block -->
<?php include('layout/footer.php') ; ?>
