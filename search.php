<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content e-none-content">
  <main class="facilities-main">
      <div class="facilities-content">
        <div class="second-sidebar">
          <div class="facilities-sidebar">
            <div class="fac-sidebar-nav">
              <div class="fac-nav-tree-inner">
                <div class="fac-scroll-inner">
                    <div class="row">
                      <div class="col-md-12">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="fac-nav-link-inner">
                      <div class="panel-heading space-pd-xs">
                        <a class="card-fw-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">すべて</a>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="fac-nav-link-inner ">
                      <div class="panel-heading space-pd-xs">
                        <a class="card-fw-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">保存した検索条件</a>
                      </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="fac-nav-link-inner">
                      <div class="panel-heading space-pd-xs">
                          <a class="card-fw-bold"data-toggle="collapse" data-parent="#accordion" href="#collapseThree">掲載中の求人にマッチ</a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
                      </div>
                    </div>
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
                    <dt class="filter-pannel-head e-pannel-head">職種</dt>
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
                    <dt class="filter-pannel-head text-center e-pannel-head">エリア</dt>
                    <dd class="filter-pannel-body">
                      <div class="filter-option">
                        <label class="filter-selectbox">
                          <select name="job_category_id" class="filter-selectbox-select">
                            <option value="0">都道府県</option>
                            <option value="1">北海道</option>
                            <option value="2">岩手県</option>
                            <option value="3">宮城県</option>
                            <option value="4">秋田県</option>
                          </select>
                            <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i></span>
                          </label>
                        </div>
                    </dd>
                  </dl>
                  <div class="filter-pannel-btn">
                    <button type="submit" class="pannel-btn-submit e-pannel-submit">
                      <span class="icon-btn-blue">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </span>
                      <span class="">検索する</span>
                    </button>
                    <a href="#" class="filter-details-link">＋ 詳しい条件を指定</a>
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
                <span class="search-inline-item card-wd-230">
                  <span>
                  <dl class="search-inline-form">
                    <span class="search-inline-item ">
                      <span>
                        <button type="button" class="pannel-btn-submit e-pannel-submit space-pd-xs search-inline-btn" disabled="">チェックした求職者に<br>スカウトを送る</button>
                      </span>
                    </span>
                    <span class="search-inline-item  text-center search-inline-txt">
                      <span>
                      <span class="card-fw-bold">該当件数<br>238790件</span>
                      </span>
                    </span>
                  </dl>
                </span>
                </span><!-- >.search-inline-item -->
                <span class="search-inline-item pull-right">
                  <span>
                    <ul class="card-pagination">
                      <li class="card-prev card-hidden"><a class="card-prev-inner" tabindex="0" role="button">
                        <div class="card-icon-txt">
                          <div class="card-icon-txt">
                            <div class="card-icon-txt-inner">
                              <span class="">
                                <i><i>
                              </span>
                            </div>
                          </div>
                          <div class="card-icon-txt">前へ</div>
                        </div>
                      </a>
                    </li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner " tabindex="0" aria-label="Page 1 is your current page" aria-current="page">1</a>
                    </li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 2" aria-current="page">2</a>
                    </li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 3 " aria-current="page">3</a>
                    </li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 4" aria-current="page">4</a>
                    </li>
                    <li class="card-pg-item card-pg-break">...</li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 11938" aria-current="page">11938</a>
                    </li>
                    <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 11939" aria-current="page">11939</a>
                    </li>
                     <li class="card-pg-item">
                      <a role="button" class="card-item-inner" tabindex="0" aria-label="Page 11940" aria-current="page">11940</a>
                    </li>
                    <li class="card-next"><a class="card-next-inner" tabindex="0" role="button">
                        <div class="card-icon-txt">
                          <div class="card-icon-gp">
                            <div class="card-icon-txt">前へ</div>
                            <div class="card-icon-txt-inner card-rotate-360">
                              <span class="card-icon-txt-right space-pl-10">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                          
                        </div>
                      </a>
                    </li>
                    </ul><!-- .card-pagination -->
                  </span> 
                </span><!-- .search-inline-item -->
              </dl><!-- .inline-form -->
            </div><!-- .space-pd-20 -->
            <div>
              <table class="card-tbl">
                <thead class="card-tbl-head">
                  <tr>
                    <th class="card-head-tbl-item card-wd-30">
                      <div class="grid-checkbox">
                        <label class="grid-checkbox-label">
                          <input value="0" name="" class="grid-checkbox-input" type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </th>
                    <th class="card-head-tbl-item">会員番号・基本情報</th>
                    <th class="card-head-tbl-item">経歴・現職（前職）</th>
                    <th class="card-head-tbl-item">希望職種・経験・資格</th>
                    <th class="card-head-tbl-item"></th>
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
                    <td class="card-tbl-body-item">
                      <span class="card-fw-bold">00337879</span>
                      <ul class="card-linine-list">
                        <li class="card-inline-list-item">
                          <span class="card-fw-bold">福岡県北九州市門司区</span>
                        </li>
                        <li class="card-inline-list-item">
                          <span class="card-fw-bold">40歳 女性</span>
                        </li>
                      </ul>
                      <div class="card-line">
                        <div class="card-line-item card-line-left">
                          <span class="card-item-title">希望勤務地</span>
                        </div>
                        <span>
                          <div class="card-line-item card-line-right">福岡県北九州市小倉北区
                          </div>
                        </span>
                      </div>
                      
                      <div class="">希望条件</div>
                      <div class="u-mt-5"></div>
                    </td>
                    <td class="card-tbl-body-item">
                        <span class="card-fw-bold">00337879</span>
                        <ul class="card-linine-list">
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">福岡県北九州市門司区</span>
                          </li>
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">40歳 女性</span>
                          </li>
                        </ul>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務地</span>
                          </div>
                          <span>
                            <div class="">福岡県北九州市小倉北区
                            </div>
                          </span>
                        </div>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務形態</span>
                          </div>
                          <div class="">
                            <span>正職員</span>
                          </div>
                        </div>
                        <div class="">希望条件</div>
                        <div class="u-mt-5"></div>
                      </td>
                      <td class="card-tbl-body-item">
                        <span class="card-fw-bold">00337879</span>
                        <ul class="card-linine-list">
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">福岡県北九州市門司区</span>
                          </li>
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">40歳 女性</span>
                          </li>
                        </ul>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務地</span>
                          </div>
                          <span>
                            <div class="">福岡県北九州市小倉北区
                            </div>
                          </span>
                        </div>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務形態</span>
                          </div>
                          <div class="">
                            <span>正職員</span>
                          </div>
                        </div>
                        <div class="">希望条件</div>
                        <div class="u-mt-5"></div>
                      </td>
                      <td class="card-tbl-body-item">
                        <span class="card-fw-bold">00337879</span>
                        <ul class="card-linine-list">
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">福岡県北九州市門司区</span>
                          </li>
                          <li class="card-inline-list-item">
                            <span class="card-fw-bold">40歳 女性</span>
                          </li>
                        </ul>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務地</span>
                          </div>
                          <span>
                            <div class="">福岡県北九州市小倉北区
                            </div>
                          </span>
                        </div>
                        <div class="">
                          <div class="">
                            <span class="">希望勤務形態</span>
                          </div>
                          <div class="">
                            <span>正職員</span>
                          </div>
                        </div>
                        <div class="">希望条件</div>
                        <div class="u-mt-5"></div>
                      </td>
                  </tr>
                </tbody><!-- .card-tbl-body -->
              </table>
            </div><!-- .card-tbl -->

          </div><!-- .fac-content-block --> 
        </div>
      </div><!-- .facilities-content -->
  </main><!-- .facilites-main -->
</div>

<?php include('layout/footer.php') ?>