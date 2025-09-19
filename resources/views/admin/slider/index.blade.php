@extends('layouts.admin.master')
@php
    // $title = 'Sliders';
    // = 'slider';
@endphp

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Sliders</h5>
            <small class="text-muted float-end">
                <a href="{{ route( 'slider.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2"><i
                        class="ri-add-line ri-lg"></i>
                    Create</a>
            </small>
        </div>
    </div>

    <div class="card">
        @if (!$sliders->isEmpty())
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($sliders as $key => $slider)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="{{ asset($slider->image) }}" class="fro-dropzone-image-a fancybox"
                                            data-fancybox="images" target="_blank">
                                            <img src="{{ asset($slider->image) }}" class="img-table"
                                                alt="{{ $slider->title }}">
                                        </a>
                                    </td>
                                    <td>{{ $slider->title }}</td>

                                    <td>{{ $slider->order }}</td>
                                    <td>
                                        @if ($slider->status)
                                            <span class="badge bg-label-success me-1">Published</span>
                                        @else
                                            <span class="badge bg-label-danger me-1">Draft</span>
                                        @endif
                                    </td>
                                    <td class="">
                                        <a href="{{ route('slider.edit', $slider->id) }}" type="button"
                                            class="btn btn-sm btn-icon btn-primary">
                                            <i class="tf-icons bx bx-edit text-white"></i>
                                        </a>
                                        <form action="{{ route( 'slider.destroy', $slider->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger delete_popup">
                                                <i class="tf-icons bx bx-trash text-white"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                    {{ $sliders->links() }}
                </div>
            </div>
        @else
            <div class="card-body">
                <h6>No Data Found!</h6>
            </div>
        @endif
    </div>
@endsection

@push('js')
    <script>
        documentaddEventListener('DOMContentLoaded', function() {
            Fancyboxbind("[data-fancybox='images']", {
                // Customize your FancyBox options here
                infinite: true,
                buttons: ["zoom", "slideShow", "fullScreen", "download", "thumbs", "close"],
            });
        });
    </script>

    <script>
        $('delete_popup')click(function(e) {
            epreventDefault();

            Swalfire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            })then((result) => {
                if (resultisConfirmed) {
                    $(this)closest("form")submit();
                }
            });

        });
    </script>
@endpush
