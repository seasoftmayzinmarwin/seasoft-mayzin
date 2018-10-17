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
                  <span class="definition-head-item definition-head-item-left">職種
                  </span>
                </dt>
                <dd class="definition-table-body">
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
              </dl>
            </li>
            <li class="definition-table-item">
              <dl class="dl-definition-table">
                <dt class="definition-table-head">
                  <span class="definition-head-item">
                    <span class="definition-label-red">必須
                    </span>
                  </span>
                  <span class="definition-head-item definition-head-item-left">役職・役割
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <input value="" name="position" class="definition-text-field card-wd-100 definition-txt-error" placeholder="内科医、看護師長、リーダーなど" maxlength="100" type="text">
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
                  <span class="definition-head-item definition-head-item-left">経験年数
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <div class="card-option">
                  <label class="card-selectbox">
                  <select name="career_year" id="facility_form_id" class="card-selectbox-select">
                    <option value="0">指定なし</option>
                    <option value="1">1年</option>
                    <option value="2">2年</option>
                    <option value="3">3年</option>
                    <option value="4">4年</option>
                    <option value="5">5年</option>
                    <option value="6">6年</option>
                    <option value="7">7年</option>
                    <option value="8">8年</option>
                    <option value="9">9年</option>
                  </select>
                  <span class="select-arrow"><i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                  </span>
                  </label>
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
                  <span class="definition-head-item definition-head-item-left">顔写真
                  </span>
                </dt>
                <dd class="definition-table-body ">
                  <span>JPG、PNG、GIF形式の画像ファイルをアップロードしてください<br>ご本人様の顔写真を登録してください。イラストや他人の顔写真の登録はお控えください</span>
                    <span class="definition-txt-alert card-fw-normal">※JPG、PNG、GIF形式の画像ファイルが登録できます<br>※1ファイルあたり最大10MBのファイルが登録できます<br>※横1200px 縦675px以上の画像の登録を推奨しています</span>
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
                  <span class="definition-head-item definition-head-item-left">質問/回答 01
                  </span>
                </dt>
                <dd class="definition-table-body">
                  <div class="space-pd-btm-sm">
                    <button type="button" class="card-btn">選択肢から質問を選ぶ</button>
                  </div>
                  <input value="" name="position" class="definition-text-field card-wd-100 definition-txt-error" placeholder="質問を入力してください" maxlength="100" type="text">
                  <span class="definition-txt-alert">質問は必須です</span><br>
                  <span>※質問は50文字以下でご入力ください</span><br>
                  <textarea name="access" class="card-textarea space-mt-10 definition-txt-error" placeholder="日比谷線六本木駅から徒歩2分" maxlength="2000" rows="1" style="overflow: hidden; overflow-wrap: break-word; height: 76px;"></textarea>
                </dd>
              </dl>
            </li>
          </ul>
      </form>

      <div class="space"></div>
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