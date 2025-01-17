<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tes Minat dan Bakat') }}
        </h2>
    </x-slot>


    <div class="container py-12">
      <div class="card">
        <div class="card-body">
          <div class="empty-state" data-height="400" style="height: 400px;">
            <div class="empty-state-icon">
              <i class="fas fa-question"></i>
            </div>
            <h2>Currently Under Maintenance Service</h2>
            <p class="lead">
              Mohon maaf fitur ini belum selesai, silahkan coba fitur yang lain.
            </p>
          </div>
        </div>
      </div>

        <div class="card">
            <div class="card-header">
              <h4>Select</h4>
            </div>
            <div class="card-body">
              <div class="section-title mt-0">Default</div>
              <div class="form-group">
                <label>Default Select</label>
                <select class="form-control">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                </select>
              </div>
              <div class="section-title">Select 2</div>
              <div class="form-group">
                <label>Select2</label>
                <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 499.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-v71l-container"><span class="select2-selection__rendered" id="select2-v71l-container" title="Option 1">Option 1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="form-group">
                <label>Select2 Multiple</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 499.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="section-title">jQuery Selectric</div>
              <div class="form-group">
                <label>jQuery Selectric</label>
                <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below"><div class="selectric-hide-select"><select class="form-control selectric" tabindex="-1">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select></div><div class="selectric"><span class="label">Option 1</span><b class="button">▾</b></div><div class="selectric-items" tabindex="-1" style="width: 499.5px;"><div class="selectric-scroll"><ul><li data-index="0" class="selected highlighted">Option 1</li><li data-index="1" class="">Option 2</li><li data-index="2" class="">Option 3</li><li data-index="3" class="">Option 4</li><li data-index="4" class="">Option 5</li><li data-index="5" class="last">Option 6</li></ul></div></div><input class="selectric-input" tabindex="0"></div>
              </div>
              <div class="form-group">
                <label>jQuery Selectric Multiple</label>
                <div class="selectric-wrapper selectric-form-control selectric-selectric"><div class="selectric-hide-select"><select class="form-control selectric" multiple="" tabindex="-1">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select></div><div class="selectric"><span class="label">Option 1</span><b class="button">▾</b></div><div class="selectric-items" tabindex="-1"><div class="selectric-scroll"><ul><li data-index="0" class="">Option 1</li><li data-index="1" class="">Option 2</li><li data-index="2" class="">Option 3</li><li data-index="3" class="">Option 4</li><li data-index="4" class="">Option 5</li><li data-index="5" class="last">Option 6</li></ul></div></div><input class="selectric-input" tabindex="0"></div>
              </div>
              <div class="form-group">
                <label class="form-label">Icons input</label>
                <div class="selectgroup w-100">
                  <label class="selectgroup-item">
                    <input type="radio" name="transportation" value="2" class="selectgroup-input">
                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-mobile"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="transportation" value="1" class="selectgroup-input" checked="">
                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-tablet"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="transportation" value="6" class="selectgroup-input">
                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-laptop"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="transportation" value="6" class="selectgroup-input">
                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Your skills</label>
                <div class="selectgroup selectgroup-pills">
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">HTML</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                    <span class="selectgroup-button">CSS</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                    <span class="selectgroup-button">PHP</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                    <span class="selectgroup-button">JavaScript</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                    <span class="selectgroup-button">Ruby</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                    <span class="selectgroup-button">Ruby</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                    <span class="selectgroup-button">C++</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</x-app-layout>