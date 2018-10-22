<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content e-none-content">
<main class="common-main">
  <div class="main-content">
    <div class="second-sidebar">
      <div class="common-sidebar selection-sidebar">
        <div class="fac-sidebar-nav">
          <div class="fac-nav-tree-inner">
            <div class="fac-scroll-inner">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                          <a class="accordation-head card-fw-bold text-center" href="/seasoftadmin/search.php"><span>選考中</span></a>
                      </div>
                      <div class="panel-heading">
                          <a class="accordation-head card-fw-bold card-medium-short" href="/seasoftadmin/search.php"><span>すべて</span></a>
                      </div>
                    </div>
                    <div class="panel panel-default card-bdr-top ">
                      <div class="panel-heading">
                        <a class="accordation-head card-medium-short" href="/seasoftadmin/selection-not-found.php"><span class="accordation-title card-fw-normal">応募済</span></a>
                      </div>
                    </div>
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                        <a class="accordation-head" href=""><span class="accordation-title card-fw-normal">書類選考中</span></a>
                        </div>
                    </div>
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                        <a class="accordation-head card-fw-bold" ><span class="accordation-title card-fw-normal">面接日設定済</span></a>
                        </div>
                    </div>
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                        <a class="accordation-head card-fw-bold" href=""><span class="accordation-title card-fw-normal">面接実施中</span></a>
                        </div>
                    </div>
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                        <a class="accordation-head card-fw-bold" href=""><span class="accordation-title card-fw-normal">内定済</span></a>
                        </div>
                    </div>
                    <div class="panel panel-default card-bdr-top">
                      <div class="panel-heading">
                        <a class="accordation-head card-fw-bold" href=""><span class="accordation-title card-fw-normal">内定承諾済</span></a>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div><!-- .fac-scroll-inner -->
            </div><!-- .fac-nav-inner -->
          </div><!-- .fac-sidebar-nav -->
        </div><!-- .common-sidebar -->
    </div><!-- .second-sidebar -->
        
    <div class="common-content-inner card-selection-inner">
      <div class="fac-content-block">
        <div class="space-pd-20">
          <form>
            <dl class="filter-pannel-item">
                <dt class="filter-pannel-head e-pannel-head">職種</dt>
                <dd class="filter-pannel-body">
                  <input value="" name="position" class="definition-text-field card-wd-100" placeholder="都道府県・施設名・募集職種をスペース区切りで検索" maxlength="100" type="text">
                </dd>
            </dl>
            <div class="filter-pannel clearfix">
              <dl class="filter-pannel-item">
                <dt class="filter-pannel-head e-pannel-head">求職者</dt>
                <dd class="filter-pannel-body">
                  <input value="" name="member_name_or_id" class="definition-text-field card-wd-100" placeholder="氏名・会員番号で検索" maxlength="100" type="text">
                </dd>
                <dt class="filter-pannel-head text-center e-pannel-head">メモ</dt>
                <dd class="filter-pannel-body">
                  <input value="" name="note" class="definition-text-field card-wd-100" placeholder="メモ内でのキーワードで検索" maxlength="100" type="text">
                </dd>
              </dl>
              <div class="filter-pannel-btn">
                <button type="submit" class="space-mt-auto card-btn">
                  <span class="icon-btn-blue">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
                  <span class="">この条件で絞り込む</span>
                </button>
                <a href="#" class="pannel-right-link pull-right">条件をクリア</a>
              </div>
            </div><!-- .filter-pannel -->
          </form>
        </div>
      </div><!-- .fac-content-block --> 
      <div class="space"></div>
      <div class="fac-content-block">
        <div class="space-pd-20">
          <dl class="search-inline-form">
            <span class="search-inline-item card-wd-27">
              <span>
              <dl class="search-inline-form">
                <span class="search-inline-item search-inline-txt card-fw-bold">
                  <span>
                   該当件数 6件
                  </span>
                </span>
              </dl>
            </span>
            </span><!-- >.search-inline-item -->
            <span class="search-inline-item pull-right">
              
            </span><!-- .search-inline-item -->
          </dl><!-- .inline-form -->
        </div><!-- .space-pd-20 -->
          <table class="card-tbl space-pd-btm-sm">
            <thead class="card-tbl-head">
              <tr>
                <th class="card-head-tbl-item card-wd-35 space-pr-sm">
                  <div class="grid-checkbox">
                    <label class="grid-checkbox-label">
                      <input value="0" name="" class="grid-checkbox-input" type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </th>
                <th class="card-head-tbl-item">会員番号・基本情報</th>
                <th class="card-head-tbl-item">対象求人</th>
                <th class="card-head-tbl-item">応募日・更新日</th>
                <th class="card-head-tbl-item">入職状況</th>
              </tr>
            </thead>
            <tbody class="card-tbl-body">
              <tr class="card-tbl-row">
                <td class="card-tbl-body-item card-item-middle card-wd-30">
                  <div class="grid-checkbox">
                    <label class="grid-checkbox-label">
                      <input value="0" name="" class="grid-checkbox-input" type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <span class="card-fw-bold">鎌田 瑠美子</span><br>
                  <span class="card-fw-bold">00314878 女性 39歳</span>
                  <ul class="list-label-gp-inner  space-pd-top-sm">
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">神奈川県</span>
                    </li>
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">訪問看護ステーション</span>
                    </li>
                    <li class="list-label-gp-item">
                      <span class="list-label-blue-right list-label list-label-circle">スカウト経由応募</span>
                    </li>
                  </ul>
                  <ul class="card-linine-list space-pd-top-xs">
                    <li class="card-inline-list-item">
                      <a href="" title="" class="card-link">プロフィール確認</a>
                    </li>
                    <li class="card-inline-list-item">
                      <a href="" title="" class="card-link">メッセージ確認</a>
                    </li>
                  </ul>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <div class="card-item-title">ライフサポート訪問看護リハビリス</div>
                  <div class="card-item-title space-pd-top-sm">テーション菊名</div>
                  <div>作業療法士</div>
                  <ul class="list-label-gp-inner  space-pd-top-sm">
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">神奈川県</span>
                    </li>
                  </ul>
                  <div class="space-pd-top-xs">
                      <span class="list-label list-label-circle list-label-yellow">採用費用：12.5〜25万円</span>
                  </div>
                  <div class="space-pd-top-sm">
                    <a href="" title="" class="card-link">メッセージ確認</a>
                  </div>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">応募日</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="card-item-title">2018/08/28</span>
                    </div>
                  </div>
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">更新日</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="card-item-title">2018/08/28</span>
                    </div>
                    <div>
                      <textarea name="" class="card-textarea space-mt-10 definition-txt-error" placeholder="メモ" maxlength="2000" rows="1" style="overflow: hidden; overflow-wrap: break-word; min-height: 76px;">
                      </textarea>
                    </div>
                  </div>
                </td>
                <td class="card-tbl-body-item">
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">入職状況</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="">応募済</span>
                    </div>
                  </div>
                  <div class="card-item-title">入職日
                  </div>
                  <div class="card-item-title">入職予定日
                  </div><br>
                    <button type="button" class="blue-btn card-btn-sm card-wd-100 card-fw-bold">スカウトを送る</button><br>
                  </td>
              </tr>
              <tr class="card-tbl-row">
                <td class="card-tbl-body-item card-item-middle card-wd-30">
                  <div class="grid-checkbox">
                    <label class="grid-checkbox-label">
                      <input value="0" name="" class="grid-checkbox-input" type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <span class="card-fw-bold">鎌田 瑠美子</span><br>
                  <span class="card-fw-bold">00314878 女性 39歳</span>
                  <ul class="list-label-gp-inner  space-pd-top-sm">
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">神奈川県</span>
                    </li>
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">訪問看護ステーション</span>
                    </li>
                    <li class="list-label-gp-item">
                      <span class="list-label-blue-right list-label list-label-circle">スカウト経由応募</span>
                    </li>
                  </ul>
                  <ul class="card-linine-list space-pd-top-xs">
                    <li class="card-inline-list-item">
                      <a href="" title="" class="card-link">プロフィール確認</a>
                    </li>
                    <li class="card-inline-list-item">
                      <a href="" title="" class="card-link">メッセージ確認</a>
                    </li>
                  </ul>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <div class="card-item-title">ライフサポート訪問看護リハビリス</div>
                  <div class="card-item-title space-pd-top-sm">テーション菊名</div>
                  <div>作業療法士</div>
                  <ul class="list-label-gp-inner  space-pd-top-sm">
                    <li class="list-label-gp-item">
                      <span class="list-label list-label-circle">神奈川県</span>
                    </li>
                  </ul>
                  <div class="space-pd-top-xs">
                      <span class="list-label list-label-circle list-label-yellow">採用費用：12.5〜25万円</span>
                  </div>
                  <div class="space-pd-top-sm">
                    <a href="" title="" class="card-link">メッセージ確認</a>
                  </div>
                </td>
                <td class="card-tbl-body-item space-pd-btm-md">
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">応募日</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="card-item-title">2018/08/28</span>
                    </div>
                  </div>
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">更新日</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="card-item-title">2018/08/28</span>
                    </div>
                    <div>
                      <textarea name="" class="card-textarea space-mt-10 definition-txt-error" placeholder="メモ" maxlength="2000" rows="1" style="overflow: hidden; overflow-wrap: break-word; min-height: 76px;">
                      </textarea>
                    </div>
                  </div>
                </td>
                <td class="card-tbl-body-item">
                  <div class="card-line-item card-item-title">
                    <div class="card-line-item card-line-left">
                      <span class="card-item-title">入職状況</span>
                    </div>
                    <div class="card-line-item card-line-right">
                      <span class="">応募済</span>
                    </div>
                  </div>
                  <div class="card-item-title">入職日
                  </div>
                  <div class="card-item-title">入職予定日
                  </div><br>
                    <button type="button" class="blue-btn card-btn-sm card-wd-100 card-fw-bold">スカウトを送る</button><br>
                  </td>
              </tr>
            </tbody><!-- .card-tbl-body -->
          </table><!-- .card-tbl -->
          <div class="space"></div>
        </div>
        <div class="space"></div>
      </div><!-- .fac-content-block --> 
    </div><!-- .common-content-inner -->
  </div><!-- .common-content -->
</main><!-- .common-main -->
</div><!-- .content -->

<?php include('layout/footer.php') ?>