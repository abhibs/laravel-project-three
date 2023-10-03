@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Edit About</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit About</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('about-update') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Enter Name" autocomplete="off" value="{{ $data->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Image </label>
                                        <input type="file" name="image" class="form-control"id="image">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> </label>
                                        <img id="showImage"
                                            src="{{ !empty($data->image) ? url($data->image) : url('no_image.jpg') }}"
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail4" class="form-label"> Content </label>
                                        <textarea class="ckeditor form-control" name="content">{!! $data->content !!}</textarea>
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Youtube Image </label>
                                        <input type="file" name="youtube" class="form-control"id="image1">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> </label>
                                        <img id="showImage1"
                                            src="{{ !empty($data->youtube) ? url($data->youtube) : url('no_image.jpg') }}"
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">URL </label>
                                        <input type="text" name="url" class="form-control" id="inputEmail4"
                                            placeholder="Enter Youtube URL" autocomplete="off" value="{{ $data->url }}">
                                        @error('url')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                </div>



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    About Us</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

        $(document).ready(function() {
            $('#image1').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage1').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
