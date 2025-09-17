
@extends('layouts.admin.master')
@section('content')

<div class="container mt-5">
    {{-- <h2 class="mb-3">Blogs Details</h2>
    <a href="{{route('blogs.index')}}" class="btn btn-secondary mb-3">Back to List</a> --}}
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Blog Detail</h5>
            <small class="text-muted float-end">
                <a href="{{ route('blog.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    back
                </a>
            </small>
        </div>
    </div>

     <div class="card">
        <div class="card-body">
             <p><strong>Order</strong> {{ $blog->order}}</p>
              <p><strong>Status</strong> {{ $blog->status}}</p>
            <h3 class="card-title">{{ $blog->title}}</h3>
            <h6 class="text-muted">Slug: {{ $blog->slug}}</h6>
            <p><strong>Views:</strong> {{ $blog->view}}</p>
            <p><strong>image:</strong> {{ $blog->image }}</p>
                <img class="img_fluid"  src="{{asset($blog->image)}}" alt="">
            <p><strong>Short Description:</strong> {{ $blog->short_description}}</p>
            <p><strong>Description:</strong>{{ $blog->description}}</p>

            <p><strong>Seo Title</strong> {{ $blog->seo_title}}</p>
            <p><strong>Meta Keywords</strong>{{ $blog->meta_keywords}}</p>
            <p><strong>Meta Description:</strong> {{ $blog->meta_description}}</p>
            <p><strong>Seo Schema:</strong>{{ $blog->seo_schema}}</p>


        </div>
    </div>
</div>

@endsection
