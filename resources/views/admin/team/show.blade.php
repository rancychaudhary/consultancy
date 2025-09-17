@extends('layouts.admin.master')
@section('content')

<div class="container mt-5">
    <h2 class="mb-3">Teams Details</h2>
    <a href="{{route('admin.team.index')}}" class="btn btn-secondary mb-3">Back to List</a>

    <div class="card">
        <div class="card-body">
             <p><strong>Order</strong> {{ $team->order}}</p>
              <p><strong>Status</strong> {{ $team->status}}</p>
            <h3 class="card-title">{{ $team->title}}</h3>
            <h6 class="text-muted">Slug: {{ $team->slug}}</h6>
            <p><strong>Views:</strong> {{ $team->view}}</p>
            <p><strong>image:</strong> {{ $team->image }}</p>
                <img class="img_fluid" src="{{asset( $team->image)}}" alt="">
            <p><strong>Short Description:</strong> {{ $team->short_description}}</p>
            <p><strong>Description:</strong>{{ $team->description}}</p>
@if($team->image_1 || $team->image_2)
                <div class="row">
                    @if($team->image_1)
                        <div class="col-md-6">
                            <img src="{{ asset($team->image_1) }}" alt="Image 1" class="img_fluid">
                        </div>
                    @endif
                    @if($team->image_2)
                        <div class="col-md-6">
                            <img src="{{ asset($team->image_2) }}" alt="Image 2" class="img_fluid">
                        </div>
                    @endif
                </div>
            @endif
            
            <p><strong>Seo Title</strong> {{ $team->seo_title}}</p>
            <p><strong>Meta Keywords</strong>{{ $team->meta_keywords}}</p>
            <p><strong>Meta Description:</strong> {{ $team->meta_description}}</p>
            <p><strong>Seo Schema:</strong>{{ $team->seo_schema}}</p>


        </div>
    </div>
</div>

@endsection
