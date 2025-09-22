@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Why Choose Us</h5>
            <small class="text-muted float-end">
                <a href="{{ route('whychooseus.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    + Create
                </a>
            </small>
        </div>
    </div>
    <div class="card">
        {{-- <h5 class="card-header">Striped rows</h5> --}}
         @if (!$whychooseus->isEmpty())
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
                        @foreach ($whychooseus as $whychooseus)
                            <tr>

                                <td>{{ $whychooseus ->id }}</td>
                                {{-- <td><img class="img-table" src="{{ asset($whychooseus->image) }}"
                                        alt="{{ $whychooseus->title }}"></td> --}}
                                         <td>
                                    <a href="{{ asset($whychooseus->image) }}" data-fancybox="gallery">
                                        <img src="{{ asset($whychooseus->image) }}" class="img-table" alt="{{ $whychooseus->title }}">
                                    </a>
                                </td>
                                <td>{{ $whychooseus->title }}</td>
                                <td>{{ $whychooseus->order }}</td>
                                <td>
                                    @if ($whychooseus->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$whychooseus->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}

                                    <a href="{{ route('whychooseus.edit', $whychooseus->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="tf-icons bx bx-edit text-white"></i></a>
                                    <form action="{{ route('whychooseus.destroy', $whychooseus->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete_popup"><i
                                                class="tf-icons bx bx-trash text-white"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $whychooseus->links() }} --}}
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

@endsection
