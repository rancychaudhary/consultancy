@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Popup</h5>
            <small class="text-muted float-end">
                <a href="{{ route('popup.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    + Create
                </a>
            </small>
        </div>
    </div>
    <div class="card">
        @if (!$popup->isEmpty())
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
                            @foreach ($popup as $popup)
                                <tr>
                                    <td>{{ $popup->id }}</td>
                                    {{-- <td><img class="img-table" src="{{ asset($popup->image) }}" alt="{{ $popup->title }}"></td> --}}
                                    <td>
                                        <a href="{{ asset($popup->image) }}" data-fancybox="gallery">
                                            <img src="{{ asset($popup->image) }}" class="img-table"
                                                alt="{{ $popup->title }}">
                                        </a>

                                    </td>
                                    <td>{{ $popup->title }}</td>
                                    <td>{{ $popup->order }}</td>
                                    <td>
                                        @if ($popup->status == 1)
                                            <span class="badge bg-label-success">Publish</span>
                                        @else
                                            <span class="badge bg-label-danger">Draft</span>
                                        @endif
                                    </td>

                                    <td>

                                        <a href="{{ route('popup.edit', $popup->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ri-edit-2-fill"></i></a>
                                        <form action="{{ route('popup.destroy', $popup->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                                    class="ri-delete-bin-5-line"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $popups->links() }} --}}
                </div>
            </div>
             @else
            <div class="card-body">
                <h6>No Data Found!</h6>
            </div>
        @endif
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
    {{-- {{-- <script>
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
    </script> --}}
@endsection
