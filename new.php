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
                  <span class="definition-head-item definition-head-item-left">都道府県・市区町村
                  </span>
                </dt>
                <dd class="definition-table-body e-fac-new-left">
                  <div class="card-option">
                  <label class="card-selectbox e-">
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