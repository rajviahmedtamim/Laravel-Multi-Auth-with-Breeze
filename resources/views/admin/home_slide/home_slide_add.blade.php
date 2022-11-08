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
                    <form method="post" action="{{ route('store.homeSlider') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="basic-default-name" placeholder="Write title here..." />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Short Description</label>
                            <div class="col-sm-10">
                            <textarea
                                id="basic-default-message"
                                class="form-control"
                                name="short_description"
                                placeholder="Write short description here..."
                            ></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="formFile">Slider Image</label>
                            <div class="col-sm-10">
                                    <input class="form-control" name="slider_image" type="file" id="formFile"/>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
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
