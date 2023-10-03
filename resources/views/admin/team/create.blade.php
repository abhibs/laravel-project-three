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

                                <li class="breadcrumb-item active">Add Team</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('team-store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Add Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Role </label>
                                        <input type="text" name="designation" class="form-control" id="inputEmail4"
                                            placeholder="Add Role">
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label"> Photo</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{ url('no_image.jpg') }} "
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="inputEmail4" class="form-label"> Social Media Icons </label>
                                            <input type="text" name="icon[]" class="form-control" id="inputEmail4"
                                                placeholder="Add Social Media Icons">

                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <label for="inputEmail4" class="form-label">Social Media Url </label>
                                            <input type="text" name="url[]" class="form-control" id="inputEmail4"
                                                placeholder="Add Social Media Url">

                                        </div>
                                        <div
                                            class="col-2 offset-5
                                                form-group">
                                            <button id="btnCakePrice2" style="border: none;"
                                                class="form-control text-danger" type="button"><i
                                                    class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div id="WeightContainer2"></div>

                                </div>



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add Team</button>

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

        $("#btnCakePrice2").bind("click", function() {
            var div = $("<div />");
            div.html(GetDynamicWeight2(""));
            $("#WeightContainer2").append(div);
        });
        $("body").on("click", ".removeGrossBtn2", function() {
            $(this).closest(".dynamicRadio2").remove();
        });

        function GetDynamicWeight2(value) {
            return `<div class="dynamicRadio2">
                            <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Social Media Icons </label>
                                        <input type="text" name="icon[]" class="form-control" id="inputEmail4"
                                            placeholder="Add Social Media Icons">

                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Social Media Url </label>
                                        <input type="text" name="url[]" class="form-control" id="inputEmail4"
                                            placeholder="Add Social Media Url">

                                    </div>

                                </div>

        <div class="col-2 offset-5 form-group"><button style="border: none;" class="form-control text-danger removeGrossBtn2" id=""><i class="fa fa-minus"></i></button></div></div></div> `
        }
    </script>
@endsection
