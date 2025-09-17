@extends('layouts.admin.master')
@php
    $title = 'Enquiries';
    // $name = 'enquiry';
@endphp

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Enquiry</h5>
            <small class="text-muted float-end">
                <a href="{{ route( 'enquiry.create') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2"><i
                        class="ri-add-line ri-lg"></i>
                    Create</a>
            </small>
        </div>
    </div>

    <div class="card">
        @if (!$enquirys->isEmpty())
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Language Test</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($enquirys as $key => $enquiry)
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $enquiry->full_name }}</td>

                                    <td class="text-capitalize">{{ $enquiry->preferred_country }}</td>

                                    <td class="text-capitalize">{{ $enquiry->language_test }}</td>

                                    <td class="text-capitalize">{{ $enquiry->priority }}</td>
                                    <td>
                                        @if ($enquiry->status)
                                            <span class="badge bg-label-success me-1">Checked</span>
                                        @else
                                            <span class="badge bg-label-danger me-1">Unchecked</span>
                                        @endif
                                    </td>
                                    <td class="">
                                        {{-- <a href="{{ route($name . '.edit', $enquiry->id) }}" type="button"
                                            class="btn btn-sm btn-icon btn-primary">
                                            <i class="tf-icons bx bx-edit text-white"></i>
                                        </a> --}}

                                        <a href="{{ route( 'enquiry.show', $enquiry->id) }}" type="button"
                                            class="btn btn-sm btn-icon btn-info">
                                            <i class="tf-icons bx bx-show-alt text-white"></i>
                                        </a>

                                        <form action="{{ route( 'enquiry.destroy', $enquiry->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-icon btn-danger delete_popup">
                                                <i class="tf-icons bx bx-trash text-white"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                    {{$enquirys->links() }}
                </div>
            </div>
        @else
            <div class="card-body">
                <h6>No Data Found!</h6>
            </div>
        @endif
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind("[data-fancybox='images']", {
                // Customize your FancyBox options here
                infinite: true,
                buttons: ["zoom", "slideShow", "fullScreen", "download", "thumbs", "close"],
            });
        });
    </script>

    <script>
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
    </script>
@endpush
