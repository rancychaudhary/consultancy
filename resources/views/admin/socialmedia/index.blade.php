@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Social Media</h5>
            <small class="text-muted float-end">
                <a href="{{ route('socialmedia.create') }}"
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
                            <th>Name</th>
                            <th>Icon</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($socialmedia as $socialmedia)
                            <tr>

                                <td>{{ $socialmedia->id }}</td>
                                {{-- <td><img class="img-table" src="{{ asset($socialmedia->image) }}"
                                        alt="{{ $socialmedia->title }}"></td> --}}
                                <td>{{ $socialmedia->name }}</td>
                                <td>{{ $socialmedia->icon }}</td>
                                <td>{{ $socialmedia->order }}</td>
                                <td>
                                    @if ($socialmedia->status == 1)
                                        <span class="badge bg-label-success">Publish</span>
                                    @else
                                        <span class="badge bg-label-danger">Draft</span>
                                    @endif {{-- {{$socialmedia->status}} --}}
                                </td>

                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i
                                            class="ri-edit-2-fill"></i></button> --}}

                                    <a href="{{ route('socialmedia.edit', $socialmedia->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ri-edit-2-fill"></i></a>
                                    <form action="{{ route('socialmedia.destroy', $socialmedia->id) }}" method="POST">
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
                {{-- {{ $socials->links() }} --}}
            </div>
        </div>
    </div>

@endsection
