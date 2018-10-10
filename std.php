<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php') ?>
  <div class="content">

    <div class="card e-card">
      <div class="card-header">
        This is header
      </div>
      <div class="card-body">
        This is body
      </div>
      <div class="card-footer">
        This is footer
      </div>
    </div><!-- .card -->

    <div class="space-sm"></div>

    <div class="e-select">
      <select class="select">
        <option value="1">Apple</option>
        <option value="2">Orange</option>
        <option value="3">Banana</option>
      </select>
    </div>

    <div class="e-select">
      <select class="select">
        <option value="1">Apple</option>
        <option value="2">Orange</option>
        <option value="3">Banana</option>
      </select>
    </div>

    <div class="space-sm"></div>

<!--     <label class="e-radio">
      <input type="radio" value="1" name="gg">
      <span></span>
    </label>
    <span>One</span> -->

    <div class="space-sm"></div>

    <div class="h-card">

      <div class="h-filter-container">

        <div class="h-filter-item-container">
          <div class="h-filter-item">
            <label class="h-filter-label">Fruits</label>
            <label class="h-filter-select">
              <select>
                <optgroup label="Fruits">
                  <option value="1">Apple</option>
                  <option value="2">Orange</option>
                  <option value="3">Banana</option>        
                </optgroup>
              </select>
            </label>
          </div>
        </div>

        <div class="h-filter-item-container">
          <div class="h-filter-item">
            <label class="h-filter-label">Fruits</label>
            <label class="h-filter-select">
              <select>
                <optgroup label="Fruits">
                  <option value="1">Apple</option>
                  <option value="2">Orange</option>
                  <option value="3">Banana</option>        
                </optgroup>
              </select>
            </label>
          </div>
        </div>

      </div>

      <div class="h-filter-container">

        <div class="h-filter-item-container">
          <div class="h-search-button-container">
            <button class="h-m-auto">Search</button>
          </div>
          <div class="h-filter-link-container">
            <a href="#" class="h-f-l">This is left link</a>
            <a href="#" class="h-f-r">This is right link</a>
          </div>
        </div>

      </div>

    </div>

    <div class="space-sm"></div>

    <div class="h-card">

      <button class="btn h-button-sm">Button</button>
      <button class="btn h-button">Button</button>
      <a href="#" class="btn h-button-sm">Link Button</a>
      <button class="btn h-button-lg">Button</button>

      <div class="space-sm"></div>

      <a href="#" class="btn h-button-sm">Link Button</a>

      <div class="space-sm"></div>

      <a href="#" class="btn h-button-sm h-button-f-w">Link Button</a>

      <div class="space-sm"></div>

      <div class="btn-group">
        <button class="btn h-button-sm">Button</button>
        <button class="btn h-button-sm">Button</button>
        <button class="btn h-button-sm">Button</button>
      </div>

    </div>

    <div class="space"></div>

    <div class="h-card">
      <div class="table-responsive">
        <table class="table h-fix-table">
          <thead>
            <tr>
              <th>Content</th>
              <th>Content</th>
              <th>Content</th>
              <th>Content</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="h-table-td-info">
                  <div class="h-table-td-header">
                    <span>00327607</span><br>
                    <span>Mg Mg</span><span class="h-vertical-bar"></span><span>54 years old</span>
                  </div>
                  <div class="space-xxm"></div>
                  <div class="h-table-td-content">
                    <div class="h-caller">
                      <span class="h-table-td-label">Region </span><span>Yangon</span>
                    </div>
                    <div class="h-caller">
                      <span class="h-table-td-label">Duty </span><span>Officer</span>
                    </div>
                  </div>
                  <div class="h-table-td-content">
                    <div class="h-caller">
                      <span class="h-table-td-label">Condition</span>
                    </div>
                    <div class="h-table-td-item-group">
                      <span class="h-badge-round">Social insurance</span>
                      <span class="h-badge-round">Social</span>
                      <span class="h-badge-round h-border-radius-10">Social insurance</span>
                      <span class="h-badge-round h-border-radius-10">Social insurance</span>
                      <span class="h-badge-round h-border-radius-10">Social insurance</span>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="h-table-td-info">
                  <div class="h-table-td-content">
                    <div class="h-caller">
                      <span class="h-table-td-label h-l-b">Region</span><span>Yangon</span>
                    </div>
                    <div class="space-xxm"></div>
                    <div class="h-caller">
                      <span class="h-table-td-label h-l-b">Duty</span><span>Officer</span>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="h-table-td-info">
                  <div class="h-table-td-content">
                    <div class="h-caller">
                      <span class="h-table-td-label h-l-b">Region</span><span>Yangon</span>
                    </div>
                    <div class="space-xxm"></div>
                    <div class="h-caller">
                      <span class="h-table-td-label h-l-b">Duty</span>
                      <span class="h-l-b">Officer</span>
                      <span class="h-l-b">Officer</span>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <button class="btn h-button-sm h-button-f-w">Button</button>
                <div class="space-xxm"></div>
                <button class="btn h-button-sm h-button-f-w h-button-primary">Button</button>
                <div class="h-caller">
                  <span class="h-table-td-label h-l-b">Date</span>
                  <span>2018/10/04 11:08</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="space"></div>

    <div class="h-card">

      <label class="h-checkbox">
        <input type="checkbox" name="">
        <span></span>
      </label>
      <span>Hello</span>
      <label class="h-checkbox">
        <input type="checkbox" name="">
        <span></span>
      </label>
      <span>Hello</span>

      <div class="space-sm"></div>

      <a href="#">This is a link</a>
      <a href="#" class="h-text-dec-none">This is a link</a>

    </div>

    <div class="space"></div>

    <div class="h-card">
      <div class="h-file-upload-container">
        <label class="h-file-upload">
          <input type="file" name="" class="ty">
          <div class="h-file-upload-row h-center h-dim">
            <i class="fas fa-image h-file-upload-icon"></i>
          </div>
          <div class="h-file-upload-row h-center h-dim">
            Select to update
          </div>
          <div class="h-file-upload-row h-center">
            Select to update
          </div>
          <div class="h-file-upload-row h-center">
            <a href="javascript:void(0)">Select to update</a>
          </div>
        </label>
      </div>
    </div>

    <div class="space"></div>

    <div class="h-card">
      <canvas id="myChart" width="100%" height="40px"></canvas>
    </div>

    <div class="space"></div>

  </div>

</div>

<?php include('layout/footer.php') ?>