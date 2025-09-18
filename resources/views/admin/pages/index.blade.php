@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Pages</h5>
            <small class="text-muted float-end">
                <a href="{{ route('pages.create') }}"
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
                        @foreach ($pages as $pages)
                            <tr>
                                <td>{{ $pages->id }}</td>
                                {{-- <td><img class="img-table" src="{{ asset($pages->image) }}" alt="{{ $pages->title }}"></td> --}}
                                 <td>
                                    <a href="{{ asset($pages->image) }}" data-fancybox="gallery">
                                        <img src="{{ asset($pages->image) }}" class="img-table" alt="{{ $pages->title }}">
                                    </a>

                                </td>
                                <td>{{ $pages->title }}</td>
                                <td>{{ $pages->order }}</td>
                                <td>
                                    @if ($pages->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$pages->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}
{{--
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="ri-eye-fill"></i></a> --}}
                                             <a href="{{route('pages.edit', $pages->id)}}" class="btn btn-primary btn-sm">
                                               <i class="tf-icons bx bx-edit text-white"></i></a>

                                               <form action="{{ route('pages.destroy', $pages->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                                    class="tf-icons bx bx-trash text-white"></i></button>
                                            </form>
                                    {{-- <button type="button" class="btn btn-sm btn-danger"><i
                                            class="ri-delete-bin-5-line"></i></button> --}}

                                    {{-- {{$pages->actions}} --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $pagess->links() }} --}}
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
        </script>
    @endpush
     {{-- <script>
        $('.delete_page').click(function(e) {
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
    </script> --}}
@endsection
