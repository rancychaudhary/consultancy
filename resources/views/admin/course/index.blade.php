@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Course</h5>
            <small class="text-muted float-end">
                <a href="{{ route('course.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    + Create
                </a>
            </small>
        </div>
    </div>
    <div class="card">
        {{-- <h5 class="card-header">Striped rows</h5> --}}
        <div class="card_body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($course as $course)
                            <tr>

                                <td>{{ $course->id }}</td>
                                {{-- <td>{{ $key + 1 }}</td> --}}
                                <td>
                                    <a href="{{ asset($course->image) }}" data-fancybox="gallery">
                                        <img src="{{ asset($course->image) }}" class="img-table" alt="{{ $course->title }}">
                                    </a>

                                </td>
                                {{-- <td><img class="img-table" src="{{ asset($course->imaget) }}" alt="{{ $course->title }}"></td> --}}
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->order }}</td>
                                <td>
                                    @if ($course->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$course->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}

                                    <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-sm">
                                        <i class="tf-icons bx bx-show-alt text-white"></i></a>
                                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary btn-sm">
                                        <i class="tf-icons bx bx-edit text-white"></i></a>
                                    <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                                class="tf-icons bx bx-trash text-white"></i></button>
                                    </form>
                                    {{-- <form action="{{ route($name . '.destroy', ${$name}->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete_course')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger delete_{{$name}}">
                                                <i class="tf-icons bx bx-trash text-white"></i>
                                            </button>
                                        </form> --}}


                                    {{-- <button type="button" class="btn btn-sm btn-danger"><i
                                            class="ri-delete-bin-5-line"></i></button> --}}

                                    {{-- {{$course->actions}} --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $courses->links() }} --}}
            </div>
        </div>
    </div>
    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Fancybox.bind("[data-fancybox='gallery']", {
                    // Customize your FancyBox options here
                    infinite: true,
                    buttons: ["zoom", "slideShow", "fullScreen", "download", "thumbs", "close"],
                });
            });

            $('.delete_popup').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).closest("form").submit();
                    }
                });

            });
        </script>
    @endpush
@endsection
