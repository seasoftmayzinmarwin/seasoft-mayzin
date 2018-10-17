<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content e-none-content clearfix">
  <main class="common-main">
      <div class="common-content">
        <div class="second-sidebar clearfix">
          <div class="common-sidebar">
            <div class="common-register">
              <div class="new-btn-box">
                <a class="new-btn-link" href="new.php">＋ 施設を新規登録</a>
              </div><!-- .new-btn-box -->
            </div><!-- .common-register -->
            <div class="common-sidebar-head">
              <div class="common-sidebar-item">
                <form>
                  <div class="common-search-box">
                    <input type="text" value="" placeholder="対象施設を検索" class="search-box-input">
                    <button type="submit" class="common-search-btn">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div><!-- .common-search-box -->
                  <div class="common-text text-center">施設名・都道府県をスペース区切りで検索</div>
                </form>
              </div><!-- .common-sidebar-item -->
              <div class="common-sidebar-item space-pd-top-sm">
                <div class="text-center"><a class="common-link">＋ 施設の条件を詳しく絞り込む</a></div>
              </div>
            </div><!-- .common-sidebar-head -->
        </div><!-- .common-sidebar -->
        </div><!-- .second-sidebar -->
        
        <div class="common-content-inner clearfix">
            <div class="common-not-found">
              <div class="common-not-found-inner">
                <div class="space-pd-20 text-center">
                  <span><i class="fa fa-search fa-3x" aria-hidden="true"></i></span>
                   <p class="not-found-txt">職員の声が登録されていません<br>まずは職員の声を登録しましょう</p>
                   <div class="new-not-found-btn">
                    <a class="new-btn-link" href="#">＋ 施設を新規登録</a>
                  </div><!-- .new-btn-box -->
                </div>
              </div>
            </div>
        </div>
      </div><!-- .common-content -->
  </main><!-- .common-main -->
</div>

<?php include('layout/footer.php') ?>