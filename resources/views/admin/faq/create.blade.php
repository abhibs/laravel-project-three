@extends('admin.layout.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Add Faq</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Faq</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('faq-store') }}">
                                @csrf

                                <div class="row">




                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Question </label>
                                        <input type="text" name="question" class="form-control" id="inputEmail4"
                                            placeholder="Add Question">
                                        @error('question')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-12 mb-3">
                                        <label for="inputEmail4" class="form-label"> Answer </label>
                                        <textarea class="ckeditor form-control" name="answer"></textarea>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add Faq</button>

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
    </script>
@endsection
