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
                  <label class="card-selectbox e-">
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
                <span class="c-alert">
                  <span class="definition-txt-alert-red card-fw-bold">写真がない求人より3倍ほど応募が集まる傾向にあります。</span></span><br>できるだけ多くの写真を登録されることをおすすめいたします。</div>

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
                    <div class="grid-checkbox">
                      <label class="grid-checkbox-label">
                      <input type="checkbox" value="0" name="" class="grid-checkbox-input">
                      <span class="checkmark"></span>
                      <span class="checkmark-text">職場の環境を入力する</span>
                    </label>
                    
                    </div>
                  </div>
                </dd>
              </dl>
            </li>

          </ul>
          <div class="space"></div>
        
        </form>
  </div><!-- .card -->

</div><!-- .content -->

<?php include('layout/footer.php') ?>