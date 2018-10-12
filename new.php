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

          </ul><!-- .definition-table -->
          <div class="space"></div>
        </form>
  </div><!-- .card -->

</div><!-- .content -->

<?php include('layout/footer.php') ?>