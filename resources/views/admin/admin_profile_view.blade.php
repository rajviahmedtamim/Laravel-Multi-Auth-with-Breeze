@extends('admin.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Name : {{ $adminData->name }}</h5>
                            <h5 class="card-title text-primary">Email : {{ $adminData->email }}</h5>
                            <h5 class="card-title text-primary">Username : {{ $adminData->username }}</h5>
                            <a href="{{ route('edit.profile') }}" class="btn btn-sm btn-outline-primary">Edit Profile</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-5 px-0 px-md-4">
                            <img
                                src="{{ (!empty($adminData->profile_image))? url('public/upload/admin_images/'.$adminData->profile_image):url('public/upload/no_image.jpg') }}"
                                height="100"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
