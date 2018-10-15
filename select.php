<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content">
  <div class="space"></div>
  <div class="card h-card h-p-30">
      <h2 class="fac-new-heading card-fw-bold">新規施設の登録</h2>
      <div class="space"></div>
      <form method="POST" >
          <ul class="definition-table">
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item">
                    <span class="definition-label-red">必須
                    </span>
                  </span>
                  <span class="definition-head-item definition-head-item-left">施設の業種・形態
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div class="card-option">
                  <label class="card-selectbox">
                  <select name="facility_form_id" id="facility_form_id" class="card-selectbox-select">
                    <option value="0">指定なし</option>
                    <option value="1">病院</option>
                    <option value="2">診療所</option>
                    <option value="3">歯科診療所・技工所</option>
                    <option value="4">代替医療・リラクゼーション</option>
                    <option value="5">介護・福祉事業所</option>
                    <option value="6">薬局・ドラッグストア</option>
                    <option value="7">訪問看護ステーション</option>
                    <option value="8">保育園・幼稚園</option>
                    <option value="9">その他（企業・学校等）</option>
                  </select>
                  <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                  </span>
                  </label>
                </div>
               
                </dd>
                <dd class="e-fac-new-right"> 
                  <div>
                  <a href="#" class="fac-new-link">＋ 登録済みの施設をコピーして作成</a>
                </div>
              </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table ">
                <dt class="definition-table-head">
                  <span class="definition-head-item">
                    <span class="definition-label-red">必須
                    </span>
                  </span>
                  <span class="definition-head-item definition-head-item-left">施設の業種・形態
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
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
                </dd>
                <dd class="e-fac-new-right"> 
                  <div class="space"></div>
                  <div>
                    <span><button type="button" class="registering-btn card-fw-bold">写真管理から<br>選んで登録す</button>
                    <p class="space-pd-top-sm registering-txt">写真管理へ既にアップロードしている写真の中から登録することができます。</p>
                </div>
              </dd>
              </dl>
            </li>
            <li class="definition-table-item">
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
                <span class="card-alert">
                  <span class="definition-txt-alert-red card-fw-bold">写真がない求人より3倍ほど応募が集まる傾向にあります。</span>
                </span><br>できるだけ多くの写真を登録されることをおすすめいたします。</div>

              </div>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item card-input-br-btm">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item">
                  </span>
                  <span class="definition-head-item definition-head-item-left">職場の環境
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <div class="space-pd-btm-sm">
                    <div class="rating-checkbox grid-checkbox clearfix">
                      <label class="grid-checkbox-label">
                      <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                      <span class="checkmark"></span>
                      <span class="checkmark-text">職場の環境を入力する</span>
                    </label>

                    </div>
                    <div class="">
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left">
                            
                          </span>
                          <span class="card-rating-box-item">
                            <div class="text-center card-fw-bold">とても当てはまる</div>
                          </span>
                          <span class="card-rating-box-item">
                            <div class="text-center card-fw-bold">当てはまる</div>
                          </span>
                          <span class="card-rating-box-item"><div class="u-fs-lh-x-small-short u-ta-center">どちらでもない</div></span>
                          <span class="card-rating-box-item">
                            <div class="text-center card-fw-bold">当てはまる</div>
                          </span>
                          <span class="card-rating-box-item"><div class="card-fw-bold text-center">とても当てはまる</div>
                          </span>
                          <span class="card-rating-box-caption-right">
                          </span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">若手多い</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">ベテラン多い</span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">
                          男性多い</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">女性多い</span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">
                          活気がある</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">落ち着いている</span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">
                          柔軟な社風</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">堅実な社風</span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">
                          育成重視</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">即戦力重視</span>
                        </div><!-- .card-rating-box -->
                        <div class="card-rating-box">
                          <span class="card-rating-caption card-rating-cp-left space-pd-top-sm">
                          柔軟な勤務スタイル</span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-box-item">
                            <label class="common-radio">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label>
                          </span>
                          <span class="card-rating-caption card-rating-cp-right space-pd-top-sm">勤務時間できっちり</span>
                        </div><!-- .card-rating-box -->
                    </div>
                  </div>
                </dd>
              </dl>
            </li>
          </ul>
      </form>
      <div class="space"></div>
      <h2 class="fac-new-heading card-fw-bold">施設の基本情報
        <a href="#" class="card-fw-normal" title="">契約情報をもとに自動入力</a>
      </h2>
      <div class="space"></div>
      <form method="POST" >
          <ul class="definition-table">
            <li class="definition-table-item ">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item">
                  </span>
                  <span class="definition-head-item definition-head-item-left">職場の環境
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div class="space-pd-btm-sm">
                     <div class="filter-grid">
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">歯科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">漢方</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">大学病院</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">訪問リハビリ</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">一般内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">消化器内科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">循環器内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">呼吸器内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">腎臓内科
                                </span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text"> 血液内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">心療内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">神経内科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">内分泌内科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">一般外科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">消化器外科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">心臓血管外科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">呼吸器外科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">脳神経外科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">整形外科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">形成外科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">乳腺外科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">精神科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">眼科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">耳鼻咽喉科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">皮膚科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">泌尿器科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">放射線科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">救命救急</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">美容外科・美容皮膚科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">小児科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">産婦人科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">麻酔科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">健診・検診・人間ドック</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">リウマチ科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">緩和ケア科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">病理科</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">在宅医療</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">総合診療科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">慢性期</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">急性期</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">回復期</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">終末期</span>
                              </label>
                              
                              </div>
                          </div>
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">アレルギー科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">リハビリテーション科</span>
                              </label>
                              
                              </div>
                          </div>
                          <div class="col">
                              <div class="grid-checkbox">
                                <label class="grid-checkbox-label">
                                <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                                <span class="checkmark"></span>
                                <span class="checkmark-text">ペインクリニック</span>
                              </label>
                              </div>
                          </div>
                        </div><!-- .row -->
                      </div><!-- .filter-grid -->
                  </div>
                </dd>
                <dd class="e-fac-new-right">
                  <div class="space"></div>
                  <span class="registering-txt">入力は必須ではありませんが、より詳しくご記入いただくと、たくさんの応募が集まる傾向にあります。</span>
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
                  <span class="definition-head-item definition-head-item-left">施設名
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <input type="text" value="" name="name" class="definition-text-field definition-txt-error" placeholder="メドレー病院" maxlength="100">
                  <span class="definition-txt-alert">施設名を入力してください</span>
                </dd>
                <dd class="e-fac-new-right"> 
                  <div class="space-pd-top-sm">
                  <span class="registering-txt">省略せず、正式な名称をご記入ください。</span>
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
                  <span class="definition-head-item definition-head-item-left">施設名（フリガナ）
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <input type="text" value="" name="kana" class="definition-text-field definition-txt-error" placeholder="メドレービョウイン" maxlength="100">
                  <span class="definition-txt-alert">施設名(フリガナ)を入力してください</span>
                </dd>
                <dd class="e-fac-new-right"> 
              </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">設立年月
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div class="definition-input-left e-register-left">
                  <div class="card-option">
                  <label class="card-selectbox">
                  <select name="establish_year" id="establish_year" class="card-selectbox-select">
                    <option value="0">指定なし</option>
                    <option value="1">2020</option>
                    <option value="2">2019</option>
                    <option value="3">2018</option>
                    <option value="4">2017</option>
                    <option value="5">2016</option>
                    <option value="6">2015</option>
                    <option value="7">2014</option>
                    <option value="8">2013</option>
                    <option value="9">2012</option>
                    <option value="10">2011</option>
                  </select>
                  <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                  </span>
                  </label>
                </div>
                </div>
                <div class="definition-input-left e-register-center">
                  <div class="card-option">
                  <label class="card-selectbox">
                  <select name="establish_month" id="establish_month" class="card-selectbox-select">
                    <option value="0">指定なし</option>
                    <option value="1">指定なし</option>
                    <option value="2">指定なし</option>
                  </select>
                  <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                  </span>
                  </label>
                </div>
                </div>
                <div class="definition-input-right e-register-right">
                  <div class="card-option">
                  <label class="card-selectbox">
                  <select name="establish_day" id="establish_day" class="card-selectbox-select">
                    <option value="0">指定なし</option>
                    <option value="1">指定なし</option>
                    <option value="2">指定なし</option>
                  </select>
                  <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                  </span>
                  </label>
                </div>
                </div>
                </dd>
                <dd class="e-fac-new-right"></dd>
              </dl>
            </li>
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
                <dd class="definition-table-body e-fac-new-left">
                  <div class="definition-input-left">
                  <input type="text" value="" name="charge_family_name" class="definition-text-field definition-txt-error" placeholder="郵便番号" maxlength="20">
                  
                </div>
                <div class="definition-input-right">
                  <span><button type="button" class="zip-btn card-fw-bold">郵便番号から住所を検索</button></span>
                </div>
                <span class="definition-txt-alert"><span class="definition-txt-alert">郵便番号を入力してください</span></span>
                </dd>
                <dd class="e-fac-new-right"></dd>
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
                <dd class="definition-table-body e-fac-new-left">
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
                <span class="definition-txt-alert">都道府県を選択してください</span>
                <span class="definition-txt-alert">市区町村を選択してください</span>
                </dd>
                <dd class="e-fac-new-righta"></dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">町名・番地
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <input type="text" value="" name="address-etc" class="definition-text-field definition-txt-error" placeholder="番地" maxlength="100">
                  <span class="definition-txt-alert">町名・番地を入力してください</span>
                </dd>
                <dd class="e-fac-new-right"></dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item">

                    <span class="definition-label-red">必須
                    </span>
                  </span>
                  <span class="definition-head-item definition-head-item-left">施設へのアクセス
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div>
                    <button type="button" class="zip-btn card-fw-bold">郵便番号から住所を検索</button>
                  </div>
                  <textarea name="access" class="card-textarea space-mt-10 definition-txt-error" placeholder="日比谷線六本木駅から徒歩2分" maxlength="2000" rows="1" style="overflow: hidden; overflow-wrap: break-word; height: 76px;"></textarea>
                  <span class="definition-txt-alert">施設へのアクセスを入力してください</span>
                </dd>
                <dd class="e-fac-new-right"></dd>
              </dl>
            </li>
            <li class="definition-table-item card-input-br-btm">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">地図の詳細調整
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div>
                    <p>ピンを移動して所在地に合わせてください。<br>緯度・経度の情報が保存され、地図情報として公開されます。 </p>
                  </div>
                  <div>
                    <img class="img-fluid" src="image/map.png" alt="">
                  </div>
                </dd>
                <dd class="e-fac-new-right">
                  <div class="space-pd-top-sm">
                    <span class="registering-txt">住所をもとに自動でピンを合わせていますが、ピンの位置が大幅にずれることがあります。<br>ピンをドラッグ・ドロップして正確な位置を指し示すようにしてください。</span>
                  </div>
                </dd>
              </dl>
            </li>
            
          </ul>
      </form>

      <div class="space"></div>
      <h2 class="fac-new-heading card-fw-bold">
        施設の詳細情報
      </h2>
      <div class="space"></div>
      <form method="POST" >
          <ul class="definition-table">
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">施設規模・病床
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <textarea name="number_of_beds" class="card-textarea-sm space-mt-10" placeholder="一般病床　130 床療養型病床　42床" maxlength="2000" rows="1"></textarea>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">救急指定
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="emergency_designation" class="definition-text-field definition-input-sm">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">開院時間
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <textarea name="number_of_beds" class="card-textarea space-mt-10" placeholder="平日 9:00〜12:00 14:00〜17:00 土曜日 9:00〜12:00 床療養型病床 42床" maxlength="2000" rows="1"></textarea>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">救急指定
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="holiday" class="definition-text-field card-input" placeholder="木・日・祭日">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">平均患者数
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="holiday" class="definition-text-field card-input" placeholder="1日平均50人">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">年間救急車受け入れ台数
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="emergency_designation" placeholder="1800台" class="definition-text-field definition-input-sm">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">開院時間
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <textarea name="equip_info" class="card-textarea space-mt-10" placeholder="医師5名 看護師50名 薬剤師2名" maxlength="2000" rows="1"></textarea>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">院長名
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="director_name" placeholder="12名" class="definition-text-field definition-input-sm">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">非常勤医師数
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="parttime_doctor_info" placeholder="12名" class="definition-text-field definition-input-sm">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">設備/機材
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <textarea name="equip_info" class="card-textarea space-mt-10" placeholder="医師5名 看護師50名 薬剤師2名" maxlength="2000" rows="1"></textarea>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">院長名
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input type="text" value="" name="director_name" class="definition-text-field card-input" placeholder="">
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">院長略歴
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <textarea name="equip_info" class="card-textarea space-mt-10" placeholder="1996年　○○大学医学部　卒業 2009年　○○医院　開業 専門：内科 医学博士 日本内科学会認定医" maxlength="2000" rows="1"></textarea>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">社宅・寮
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <span class="common-box-left">
                    <label class="common-radio">あり
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                  </span>
                  <span class="common-box-right">
                    <label class="common-radio">なし
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                  </span>
                </dd>
              </dl>
            </li>
            <li class="definition-table-item card-input-br-btm">
               <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item definition-head-item-left">託児所
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <span class="common-box-left">
                    <label class="common-radio">あり
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                  </span>
                  <span class="common-box-right">
                    <label class="common-radio">なし
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                  </span>
                </dd>
              </dl>
            </li>
            
          </ul>
      </form>
      <div class="h-p-30">
    <div class="row">
      <table class="btn-table">
        <tbody class="btn-table-body">
          <tr>
            <td class="btn-table-item">
              <button type="button" class="tbl-btn-grey">プレビュー</button>
              <div class="tex-center">
                <div class="tbl-alert-item">
                  <div class="tbl-alert-text card-fw-bold">仕上がりを確認しましょう！
                  </div>
                </div>
              </div>
            </td>
            <td class="btn-table-item card-bdr-left">
              <button type="submit" class="tbl-btn-blue">この内容で施設を登録する</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div><!-- .card -->
  <div class="space"></div>
  
</div><!-- .content -->

<?php include('layout/footer.php') ?>