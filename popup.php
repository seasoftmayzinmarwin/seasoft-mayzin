<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
  <div class="content">

    <div class="h-card">
      <button class="btn h-button-sm open_popup popup_name_1">Button</button>
      <button class="btn h-button-sm open_popup popup_name_2">Show Loading</button>
    </div>

    <div class="space"></div>

    <div class="h-wrapper"></div>

    <div class="h-popup-container h-w-auto" popup_name = "1">
      <div class="h-popup-header">
        <span>Header</span>
        <a href="javascript:void(0)" class="h-popup-close"><i class="fas fa-times"></i></a>
      </div>
      <div class="h-popup-body">
        <span>Body</span>
      </div>
      <div class="h-popup-footer">
        <span>Footer</span>
      </div>
    </div>

    <div class="h-popup-container h-p-30" popup_name = "2">
      <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>

  </div>

</div>

<?php include('layout/footer.php') ?>