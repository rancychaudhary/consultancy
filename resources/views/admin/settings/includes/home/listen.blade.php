<div class="tab-pane fade" id="listen" role="tabpanel">
    {{-- listen Section --}}
    <fieldset class="border p-3">
        <legend class="float-none w-auto legend-title">Listen Section</legend>
        <div class="row">
            <div class="mb-4 col-md-6">
                <label for="aboutus_title" class="form-label">Listen Title</label>
                <input type="text" class="form-control" id="listen_title" name="listen_title"
                    placeholder="Listen Title" value="{{ $settings['listen_title'] }}" />
                @error('listen_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="listen_subtitle" class="form-label">Listen Subtitle</label>
                <input type="text" class="form-control" id="listen_subtitle" name="listen_subtitle"
                    placeholder="Listen Subtitle" value="{{ $settings['listen_subtitle'] }}" />
                @error('listen_subtitle')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="listen_button" class="form-label">Listen Button Text</label>
                <input type="text" class="form-control" id="listen_button" name="listen_button"
                    placeholder="Listen Button Text" value="{{ $settings['listen_button'] }}" />
                @error('listen_button')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4 col-md-6">
                <label for="aboutus_link" class="form-label">About Us Link</label>
                <input type="text" class="form-control" id="aboutus_link" name="aboutus_link"
                    placeholder="About Us Link" value="{{ $settings['aboutus_link'] }}" />
                @error('aboutus_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div> --}}

            <div class="mb-4">
                <label for="listen_description" class="form-label">Listen Description</label>
                <textarea class="form-control" id="listen_description" name="listen_description"
                    placeholder="Listen Description" rows="4">{{ $settings['listen_description'] }}</textarea>

                @error('listen_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

        </div>
    </fieldset>
</div>
