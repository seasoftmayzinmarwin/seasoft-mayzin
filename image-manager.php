<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
<div class="content">
  <div class="card h-card h-p-40">
      <h2 class="fac-new-heading card-fw-bold">新規施設の登録</h2>
      <div class="space"></div>          
        <div class="card-small-short">
          JPG、PNG、GIF形式の画像ファイルをアップロードしてください
        </div>
        <div>
          <div class="card-alert space-pd-btm-md">
          ※1ファイルあたり最大10MBのファイルが登録可能です　※横1200px 縦675px以上の画像の登録を推奨しています
          </div>
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
            <input accept="image/jpeg, image/jpg, image/gif, image/png" multiple="" autocomplete="off" style="display: none;" type="file">
          </div>
        </div>
  </div><!-- .card -->
  <div class="space"></div>
  <div class="card h-card h-p-40">
      <h2 class="fac-new-heading card-fw-bold">新規施設の登録</h2>
      <div class="space"></div>
      <div class="common-filter-box">
        <form action="" method="get">
          <dl class="dl-filter-table space-pd-top-sm">
            <dt class="filter-table-head">
              <span class="filter-table-head filter-head-item-left">質問/回答 01
              </span>
            </dt>
            <dd class="filter-table-body">
              <input value="" name="position" class="definition-text-field card-wd-100" placeholder="都道府県・施設名・募集職種をスペース区切りで検索" maxlength="100" type="text">
            </dd>
          </dl>
          <dl class="dl-filter-table space-pd-btm-sm">
            <dt class="filter-table-head">
              <span class="filter-table-head filter-head-item-left">説明文の中から検索
              </span>
            </dt>
            <dd class="filter-table-body">
              <input value="" name="position" class="definition-text-field card-wd-100" placeholder="質問を入力してください" maxlength="100" type="text">
            </dd>
          </dl>
          <div class="filter-pannel-btn">
            <button type="submit" class="pannel-btn-submit pannel-btn-wd">
              <span class="icon-btn-blue">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
              <span class="">求人情報を絞り込む</span>
            </button>
            <a href="#" class="pannel-right-link pull-right">条件をクリア</a>
          </div>
        </form>
        <div class="space"></div>
      </div><!-- .card-filter-box -->
      <div class="space"></div>
      <div class="card-wd-360 space-mt-auto">
        <div class="card-switcher">
          <a class="card-switcher-item card-switcher-item-active" href="#">すべて</a>
          <a class="card-switcher-item" href="#">使用中の写真</a>
          <a class="card-switcher-item" href="#">未使用の写真</a>
        </div><!-- .card-swithcer -->
      </div>
      <div class="space"></div>
      <div class="">
        <dl class="search-inline-form">
          <span class="search-inline-item card-wd-27">
            <span>
            <dl class="search-inline-form">
              <span class="search-inline-item ">
              </span>
              <span class="search-inline-item search-inline-txt text-center">
                <span>
                <span class="card-fw-bold">該当件数 40件</span>
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
        <div class="space-pd-top-sm">
          <ul class="card-gallery">
            <li class="card-gallery-item space-mt-10">
              <div class="card-gallery-inner">
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img01.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img01.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
                <div class="card-alert">
                  <div class="card-xs-small-short space-pd-5">推奨サイズ以上の写真を登録すると、よりきれいに表示することができます</div>
              </div>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img01.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img01.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img01.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img01.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img01.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img01.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img08.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img08.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img02.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img02.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img03.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img03.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img04.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img04.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img05.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img05.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img06.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img06.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
             <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img07.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img07.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li> 
            <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img08.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img08.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
            <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img08.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img08.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  
                </figure>
              </div>
            </li>
            <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img02.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img02.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </figure>
              </div>
            </li>
            <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img01.jpg">
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img01.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </figure>
              </div>
            </li>
            <li class="card-gallery-item space-mt-10">
              <div>
                <figure class="card-upload-image">
                  <div class="thumb">
                    <img class="img-thumbnail" src="image/img08.jpg">
                    <figcaption class="card-upload-caption">代表の猿井です。</figcaption>
                    <div class="card-overlay">  
                      <div class="card-overlay-inner">
                        <ul class="card-inline-list">
                          <li class="card-inline-item">
                            <a class="card-link thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="説明文の編集" data-image="image/img08.jpg"data-target="#image-gallery">編集する</a>
                          </li>
                          <li class="card-inline-item">
                            <a class="card-link card-link-alert" href="#">削除する</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </figure>
              </div>
            </li>
          </ul>
        </div>
        <dl class="search-inline-form">
          <span class="search-inline-item card-wd-27">
            <span>
            <dl class="search-inline-form">
              <span class="search-inline-item ">
              </span>
              <span class="search-inline-item search-inline-txt text-center">
                <span>
                <span class="card-fw-bold">該当件数 40件</span>
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
      </div>
  </div><!-- .card -->
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog card-mx-900 modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="card-fw-bold" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body e-modal-body card-body-height">
                      <div class="card-img-edit">
                        <form action="">
                          <figure class='card-img-edit-figure'>
                          <div class="card-edit-fig-inner">
                            <div class="card-edit-image">
                              <div>
                                 <img id="image-gallery-image" class="img-fluid" src="">
                              </div>
                            </div>
                            
                          </div>
                          
                        </figure><!-- .card-img-edit-figure -->
                        <div class="card-edit-summary">
                          <div class="card-small-short">
                            画像サイズ：1092 × 675
                          </div>
                          <div class="space-pd-sm">
                            <textarea name="image-update-caption" class="card-textarea-sm u-hg-min-76" placeholder="" maxlength="40"></textarea>
                            <div class="pull-right card-small-short">0 文字 / 40文字 </div>
                          </div>
                          <div class="space-pd-top-sm card-small-short">※説明文はこの写真を使用しているほかの施設・求人にも反映されます</div>
                          <div class="space-pd-top-md">
                            <button type="button" class="blue-btn card-wd-100 card-fw-bold space-pd-sm">写真に説明文を追加する</button>
                          </div>
                        </div>
                        </form>
                      </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
      </div>
</div><!-- .content -->

<?php include('layout/footer.php') ?>