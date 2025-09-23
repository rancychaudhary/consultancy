@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Create Socialmedia</h5>
            <small class="text-muted float-end">
                <a href="{{ route('socialmedia.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    back
                </a>
            </small>
        </div>
    </div>
    <form action="{{ route('socialmedia.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="name"
                                        name="name">
                                </div>
                            </div>

                        </div>
                        <div class="my-4">
                            <label for="icon" class="form-label">Icons</label>
                            <input type="text" class="form-control" id="icon" name="icon"
                                placeholder="Enter new icon">
                        </div>
                         <div class="my-4">
                            <label for="link">Link</label>
                            <input type="url" name="link" id="link" class="form-control"
                                value="{{ old('link') }}">
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
                            <select class="form-select" name="status" id="status">
                                <option value="
                                0">Draft</option>
                                <option value="1">Published</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="order" class="form-label">order</label>
                            <input type="number" class="form-control" id="order" placeholder="Order" name="order">
                        </div>

                        <div class="mb-3">
                            <button type="submit"
                                class="btn btn-primary d-flex justify-content-between align-items-center gap-2">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
