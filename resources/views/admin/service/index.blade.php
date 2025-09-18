@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">service</h5>
            <small class="text-muted float-end">
                <a href="{{ route('service.create') }}"
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
                            {{-- <th>Image</th> --}}
                            <th>Title</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($service as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                {{-- <td><img class="img-table" src="{{ asset($service->image) }}" alt="{{ $service->title }}"></td> --}}
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->order }}</td>
                                <td>
                                    @if ($service->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$service->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}

                                            {{-- <a href="" class="btn btn-primary btn-sm">
                                                <i class="ri-eye-fill"></i></a> --}}
                                            <a href="{{route('service.edit', $service->id)}}" class="btn btn-primary btn-sm">
                                                <i class="tf-icons bx bx-edit text-white"></i></a>

                                                <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                                        class="tf-icons bx bx-trash text-white"></i></button>
                                                </form>
                                    {{-- <button type="button" class="btn btn-sm btn-danger"><i
                                            class="ri-delete-bin-5-line"></i></button> --}}

                                    {{-- {{$service->actions}} --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $services->links() }} --}}
            </div>
        </div>
    </div>
     {{-- <script>
        $('.delete_service').click(function(e) {
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
