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
										<h2 class="register-heading">求人の掲載をご検討いただきありがとうございます。</h2>
										<div class="space"></div>
										<p class="card-fw-bold">ジョブメドレーは採用するまで無料で利用できます！<br>掲載料0円、原稿作成料0円、応募課金0円、採用時の単価は25,000円~となります。<br>採用単価は経験年数や年収で左右されることはありません！</p>
										<p class="card-fw-bold">ご利用の流れは以下をご覧ください。</p>
									</div>
									<div class="space"></div>
									<div class="card-flowchart">
										<div class="card-flowchart-block clearfix">
											<div class="card-flowchart-content card-flowchart-main">
												<div class="card-flowchart-head">1.</div>
												<div class="card-flowchart-detail">お申し込みフォームに<br>必要事項を記入</div>
											</div><!-- .card-flowchart-mai -->
											<div class="card-flowchart-arrow card-flowchart-arrow-main"></div>
										</div><!-- .card-flowchart-block -->

										<div class="card-flowchart-block card-flowchart-m clearfix">
											<div class="card-flowchart-content ">
												<div class="card-flowchart-head">1.</div>
												<div class="card-flowchart-detail">お申し込みフォームに<br>必要事項を記入</div>
											</div><!-- .card-flowchart-mai -->
											<div class="card-flowchart-arrow"></div>
										</div><!-- .card-flowchart-block -->

										<div class="card-flowchart-block card-flowchart-m clearfix">
											<div class="card-flowchart-content ">
												<div class="card-flowchart-head">1.</div>
												<div class="card-flowchart-detail">お申し込みフォームに<br>必要事項を記入</div>
											</div><!-- .card-flowchart-mai -->
											<div class="card-flowchart-arrow"></div>
										</div><!-- .card-flowchart-block -->
									</div><!-- .card-flowchart -->
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
									<span class="definition-head-item definition-head-item-left">法人名・貴社名
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="name" class="definition-text-field definition-txt-error" placeholder="株式会社メドレー" maxlength="100">
									<span class="definition-txt-alert">法人名を入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
									<span class="definition-head-item ">法人名・貴社名(フリガナ)
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="name" class="definition-text-field" placeholder="株式会社メドレー" maxlength="100">
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
									<span class="definition-head-item definition-head-item-left">担当者氏名
									</span>
								</dt>
								<dd class="definition-table-body">
									<div class="definition-input-left">
									<input type="text" value="" name="charge_family_name" class="definition-text-field definition-txt-error" placeholder="山田" maxlength="20">
									
								</div>
								<div class="definition-input-right">
									<input type="text" value="" name="charge_first_name" class="definition-text-field" placeholder="太郎" maxlength="20">
								</div>
								<span class="definition-txt-alert">担当者氏名(姓)を入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table">
								<dt class="definition-table-head">
									<span class="definition-head-item">
									<span class="definition-head-item ">担当者氏名(フリガナ)
									</span>
								</dt>
								<dd class="definition-table-body">
									<div class="definition-input-left">
									<input type="text" value="" name="charge_family_name_kana" class="definition-text-field" placeholder="ヤマダ" maxlength="20">
								</div>
								<div class="definition-input-right">
									<input type="text" value="" name="charge_family_name_kana" class="definition-text-field" placeholder="タロウ" maxlength="20">
								</div>
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
									<span class="definition-head-item definition-head-item-left">電話番号
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="name" class="definition-text-field definition-txt-error" placeholder="0123456789" maxlength="100">
									<span class="definition-txt-alert">電話番号を入力してください</span>
								</dd>
							</dl>
						</li>
						<li class="definition-table-item">
							<dl class="dl-definition-table card-input-br-btm">
								<dt class="definition-table-head">
									<span class="definition-head-item">
										<span class="definition-label-red">必須
										</span>
									</span>
									<span class="definition-head-item definition-head-item-left">メールアドレス
									</span>
								</dt>
								<dd class="definition-table-body">
									<input type="text" value="" name="name" class="definition-text-field definition-txt-error" placeholder="example@job-medley.com" maxlength="100">
									<span class="definition-txt-alert">メールアドレスを入力してください</span>
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