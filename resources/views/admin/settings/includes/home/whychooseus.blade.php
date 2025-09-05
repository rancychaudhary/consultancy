<div class="tab-pane fade" id="whyChooseUs" role="tabpanel">
    {{-- About Us Section --}}
    <fieldset class="border p-3">
        <legend class="float-none w-auto legend-title">whychooseus Section</legend>
        <div class="row">
            <div class="mb-4 col-md-6">
                <label for="whyChooseUs_title" class="form-label">WhychooseUs Title</label>
                <input type="text" class="form-control" id="whyChooseUs_title" name="whyChooseUs_title"
                    placeholder="whyChooseUs Title" value="{{ $settings['whyChooseUs_title'] }}" />
                @error('whyChooseUs_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="whyChooseUs_subtitle" class="form-label">Whychooseus Subtitle</label>
                <input type="text" class="form-control" id="whyChooseUs_subtitle" name="whyChooseUs_subtitle"
                    placeholder="whyChooseUs Subtitle" value="{{ $settings['whyChooseUs_subtitle'] }}" />
                @error('whyChooseUs_subtitle')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-md-6">
                <label for="whyChooseUs_button" class="form-label">Whychooseus Button Text</label>
                <input type="text" class="form-control" id="whyChooseUs_button" name="whyChooseUs_button"
                    placeholder="whyChooseUs Button Text" value="{{ $settings['whyChooseUs_button'] }}" />
                @error('whyChooseUs_button')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4 col-md-6">
                <label for="whyChooseUs_link" class="form-label">About Us Link</label>
                <input type="text" class="form-control" id="whyChooseUs_link" name="whyChooseUs_link"
                    placeholder="About Us Link" value="{{ $settings['whyChooseUs_link'] }}" />
                @error('whyChooseUs_link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div> --}}

            <div class="mb-4">
                <label for="whyChooseUs_description" class="form-label">Whychooseus Description</label>
                <textarea class="form-control" id="whyChooseUs_description" name="whyChooseUs_description"
                    placeholder="whyChooseUs Description" rows="4">{{ $settings['whyChooseUs_description'] }}</textarea>

                @error('whyChooseUs_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

        </div>
    </fieldset>
</div>
