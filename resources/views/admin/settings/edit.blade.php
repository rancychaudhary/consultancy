@extends('layouts.admin.master')
{{-- @php
    $title = 'Settings';
    $name = 'setting';
@endphp --}}

@section('content')
    <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="card card-primary shadow br-8">
            <div class="card-body">
                <div class="row">
                    @include('admin.settings.includes.sidenav')

                    <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">

                        {{-- Global --}}
                        @include('admin.settings.includes.global')

                        {{-- Home  --}}
                        @include('admin.settings.includes.home')

                        {{-- Contact Us --}}
                        @include('admin.settings.includes.contact')

                    </div>
                </div>

                <div class="card-footers">
                    <button type="submit" class="btn btn-sm btn-primary flex justify-items-center">
                        <i class='bx bx-refresh'></i> Update
                        Settings</button>
                </div>


            </div>
        </div>
        {{-- <div class="card card-primary shadow br-8">
            <div class="card-body">
                <div class="row">
                    <div class="tab-pane fade active show" id="counter" role="tabpanel">

    <fieldset class="border p-3">
        <legend class="float-none w-auto legend-title">Counter Section</legend>
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="mb-2">
                    <label for="home_counter_students_title" class="form-label">Students Assisted Title </label>
                    <input type="text" class="form-control" id="home_counter_students_title" name="home_counter_students_title" value="International Students Assisted">
                </div>

                <div class="mb-2">
                    <label for="home_counter_students" class="form-label">No. of Students Assisted</label>
                    <input type="text" id="home_counter_students" name="home_counter_students" class="form-control" value="10000">
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mb-2">
                    <label for="home_counter_scholarship_title" class="form-label">Scholarship Approved Title </label>
                    <input type="text" class="form-control" id="home_counter_scholarship_title" name="home_counter_scholarship_title" value="Scholarship Approved">
                </div>

                <div class="mb-2">
                    <label for="home_counter_scholarship" class="form-label">No. of Scholarship Approved</label>
                    <input type="text" id="home_counter_scholarship" name="home_counter_scholarship" class="form-control" value="1000">
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mb-2">
                    <label for="home_counter_enrolled_title" class="form-label">Enrolled Students Title </label>
                    <input type="text" class="form-control" id="home_counter_enrolled_title" name="home_counter_enrolled_title" value="Enrolled in IELTS/PTE classes">
                </div>

                <div class="mb-2">
                    <label for="home_counter_enrolled" class="form-label">No. of Enrolled Students</label>
                    <input type="text" id="home_counter_enrolled" name="home_counter_enrolled" class="form-control" value="2500">
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mb-2">
                    <label for="home_counter_affilated_title" class="form-label">Affilated College Title </label>
                    <input type="text" class="form-control" id="home_counter_affilated_title" name="home_counter_affilated_title" value="Affilated College">
                </div>

                <div class="mb-2">
                    <label for="home_counter_affilated" class="form-label">No. of Affilated College</label>
                    <input type="text" id="home_counter_affilated" name="home_counter_affilated" class="form-control" value="300">
                </div>
            </div>
        </div>
    </fieldset>
</div>
                </div>
                </div>
        </div> --}}


    </form>
@endsection
