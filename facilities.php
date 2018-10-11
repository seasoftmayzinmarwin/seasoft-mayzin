<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content e-none-content">
  <main class="facilities-main">
      <div class="facilities-content">
        <div class="second-sidebar">
          <div class="facilities-sidebar">
            <div class="facilities-register">
              <div class="new-btn-box">
                <a class="new-btn-link" href="/customers/facilities/new/">＋ 施設を新規登録</a>
              </div><!-- .new-btn-box -->
            </div><!-- .facilities-register -->
            <div class="fac-sidebar-head">
              <div class="fac-sidebar-item">
                <form>
                  <div class="fac-search-box">
                    <input type="text" value="" placeholder="対象施設を検索" class="search-box-input">
                    <button type="submit" class="fac-search-btn">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div><!-- .fac-search-box -->
                  <div class="fac-text text-center">施設名・都道府県をスペース区切りで検索</div>
                </form>
              </div><!-- .fac-sidebar-item -->
              <div class="fac-sidebar-item space-pd-top-sm">
                <div class="text-center"><a class="fac-link">＋ 施設の条件を詳しく絞り込む</a></div>
              </div>
            </div><!-- .fac-sidebar-head -->
            <div class="fac-sidebar-nav">
              <div class="fac-nav-inner">
                <div class="fac-scroll-inner">
                  <ul class="fac-nav-list">
                    <li class="fac-nav-item">
                      <a class="fac-nav-link">
                        <div class="fac-nav-link-inner">
                          <div class="fac-media">
                            <div class="fac-media-left">
                              <div class="fac-media-image">
                                <div class="fac-media-img-inner">
                                  <i class="fa fa-home" aria-hidden="true"></i>
                                </div>
                              </div><!-- .fac-media-image -->
                            </div><!-- .fac-media-left -->
                            <div class="fac-media-right">
                              <span class="fac-media-text">すべての施設<br><span>(1件)</span></span>
                            </div><!-- .fac-media-right -->
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="fac-nav-item">
                      <a class="fac-nav-link">
                        <div class="fac-nav-link-inner">
                          <div class="fac-media">
                            <div class="fac-media-left">
                              <div class="fac-media-image">
                                <div class="fac-media-img-inner">
                                  <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                              </div><!-- .fac-media-image -->
                            </div><!-- .fac-media-left -->
                            <div class="fac-media-right">
                              <span class="fac-media-text">すべての施設<br><span>(1件)</span></span>
                            </div><!-- .fac-media-right -->
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul><!-- .fac-nav-list -->
                </div><!-- .fac-scroll-inner -->
              </div><!-- .fac-nav-inner -->
            </div><!-- .fac-sidebar-nav -->
        </div><!-- .facilities-sidebar -->
        </div><!-- .second-sidebar -->
        
        <div class="facilites-content-inner">
          <div class="fac-content-block">
            <div class="space-pd-20">
              <form>
                <div class="filter-pannel clearfix">
                  <dl class="filter-pannel-item">
                    <dt class="filter-pannel-head">職種</dt>
                    <dd class="filter-pannel-body">
                      <div class="filter-option">
                        <label class="filter-selectbox">
                          <select name="job_category_id" class="filter-selectbox-select">
                            <option value="">職種</option>
                            <option value="3">看護師/准看護師</option>
                            <option value="16">理学療法士</option>
                            <option value="15">作業療法士</option>
                            <option value="25">言語聴覚士</option>
                          </select>
                            <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></span>
                          </label>
                        </div>
                    </dd>
                  </dl>
                  <dl class="filter-pannel-item pannel-mg-none">
                    <dt class="filter-pannel-head">雇用形態</dt>
                    <dd class="filter-pannel-body">
                      <div class="filter-option">
                        <label class="filter-selectbox">
                          <select name="job_offer_salary" class="filter-selectbox-select">
                            <option value="1">雇用形態を選択</option>
                            <option value="2">正職員</option>
                            <option value="3">パート・アルバイト</option>
                          </select>
                            <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></span>
                          </label>
                        </div>
                    </dd>
                  </dl>
                  <dl class="filter-pannel-item">
                    <dt class="filter-pannel-head">掲載ステータス</dt>
                    <dd class="filter-pannel-body">
                      <div class="filter-grid">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="space-pd-btm-sm">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">下書き</span>
                              </label>
                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="space-pd-btm-sm">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">掲載中</span>
                              </label>
                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="space-pd-btm-sm">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">新規掲載申請中</span>
                              </label>
                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="space-pd-btm-sm">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">応募受付終了</span>
                              </label>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- .filter-grid -->
                    </dd>
                  </dl>
                  <div class="filter-pannel-btn">
                    <button type="submit" class="pannel-btn-submit">
                      <span class="icon-btn-blue">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </span>
                      <span class="">求人情報を絞り込む</span>
                    </button>
                    <a href="#" class="pannel-right-link pull-right">条件をクリア</a>
                  </div>
                </div><!-- .filter-pannel -->
              </form>
            </div>
          </div>
        </div>
      </div><!-- .facilities-content -->
  </main><!-- .facilites-main -->
</div>

<?php include('layout/footer.php') ?>