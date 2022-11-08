@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-2 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic Layout</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Slider Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @php($i = 1)
                            @foreach($slide as $item)
                            <tr>
                                <td>{{ $i++}} </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ Str::limit($item->title, 10) }}</td>
                                <td>{{ Str::limit($item->short_description, 20) }}</td>
                                <td>
                                    <div class="avatar avatar-online">
                                            <img src="{{ asset($item->slider_image) }}" alt="Avatar" class="px-40 py-40 ">
                                    </div>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

@endsection
