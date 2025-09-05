<div class="tab-pane fade" id="counter" role="tabpanel">
    {{-- About Us Section --}}
<fieldset class="border p-3">
        <legend class="float-none w-auto legend-title">Counter Section</legend>
        <div class="row">
            <div class="mb-4 col-md-6">
                <label for="counter_title" class="form-label">Counter Title</label>
                <input type="text" class="form-control" id="counter_title" name="counter_title"
                    placeholder="Counter Title" value="{{ $settings['counter_title'] }}" />
                @error('counter_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="counter_countdown" class="form-label"> Counter Countdown</label>
                <input type="text" class="form-control" id="counter_countdown" name="counter_countdown"
                    placeholder="Counter Countdown" value="{{ $settings['counter_countdown'] }}" />
                @error('counter_countdown')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="counter_subtitle" class="form-label"> Counter subtitle</label>
                <input type="text" class="form-control" id="counter_subtitle" name="counter_subtitle"
                    placeholder="Counter Subtitle" value="{{ $settings['counter_subtitle'] }}" />
                @error('counter_subtitle')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="counter_description" class="form-label">Counter Description</label>
                <textarea class="form-control" id="counter_description" name="counter_description"
                    placeholder="Counter Description" rows="4">{{ $settings['counter_description'] }}</textarea>

                @error('counter_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

              <div class="mb-4 col-md-6">
                <label for="counter_link" class="form-label">Counter Link</label>
                <input type="text" class="form-control" id="counter_link" name="counter_link"
                    placeholder="Counter Link" value="{{ $settings['counter_link'] }}" />
                @error('counter_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="counter_button" class="form-label">Counter Button Text</label>
                <input type="text" class="form-control" id="counter_button" name="counter_button"
                    placeholder="Counter Button Text" value="{{ $settings['counter_button'] }}" />
                @error('counter_button')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

        </div>
    </fieldset>
</div>
