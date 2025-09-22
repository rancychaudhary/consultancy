@extends('layouts.admin.master')
@section('content')
   <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Teams Detail</h5>
            <small class="text-muted float-end">
                <a href="{{ route('team.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    back
                </a>
            </small>
        </div>
    </div>
    <div class="card">
        {{-- <h5 class="card-header">Striped rows</h5> --}}
         @if (!$team->isEmpty())
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
                        @foreach ($team as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                {{-- <td><img class="img-table" src="{{ asset($team->image) }}" alt="{{ $team->title }}"></td> --}}
                                 <td>
                                    <a href="{{ asset($team->image) }}" data-fancybox="gallery">
                                        <img src="{{ asset($team->image) }}" class="img-table" alt="{{ $team->title }}">
                                    </a>

                                </td>
                                <td>{{ $team->title }}</td>
                                <td>{{ $team->order }}</td>
                                <td>
                                    @if ($team->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$team->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}
                                    <a href="{{route('team.show', $team->id)}}" class="btn btn-primary btn-sm">
                                        <i class="tf-icons bx bx-show-alt text-white"></i></a>
                                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary btn-sm">
                                        <i class="tf-icons bx bx-edit text-white"></i></a>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                            class="tf-icons bx bx-trash text-white"></i></button>
                                    </form>
                                    {{-- <button type="button" class="btn btn-sm btn-danger"><i
                                            class="ri-delete-bin-5-line"></i></button> --}}

                                    {{-- {{$team->actions}} --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $teams->links() }} --}}
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
     {{-- <script>
        $('.delete_team').click(function(e) {
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
