
@extends('layouts.admin.master')
@section('content')
    <div class="container mt-5">
        {{-- <h2 class="mb-3">Edit socialmedia</h2>
        <a href="{{ route('socialmedia.index') }}" class="btn btn-secondary mb-3">Back to List</a> --}}

         <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Edit Socialmedia</h5>
            <small class="text-muted float-end">
                <a href="{{ route('socialmedia.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    back
                </a>
            </small>
        </div>
    </div>

        <form action="{{ route('socialmedia.update', $socialmedia->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $media->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                            <label for="icon" class="form-label">Icons</label>
                            <input type="text" class="form-control" id="icon" name="icon"
                                placeholder="Enter new icon" value="{{ $socialmedia->icon }}">
                        </div>
                        <div class="my-4">
                                <label for="link">Link</label>
                                <input type="url" name="link" id="link" class="form-control"
                                    value="{{$socialmedia->link}}">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="status" class="form-label">status</label>
                                {{-- <input type="text" class="form-control" id="status" placeholder="status" name="status"> --}}
                                <select class="form-select" name="status" id="status"><option value="
                                    1">Published</option>
                                <option value="0">Draft</option></select>
                            </div>
                            <div class="mb-3">
                                <label for="order" class="form-label">order</label>
                                <input type="number" class="form-control" id="order" placeholder="Order" name="order" value="{{ $socialmedia->order }}">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary d-flex justify-content-between align-items-center gap-2">Update socialmedia</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>


@endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
