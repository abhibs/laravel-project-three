@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Edit Package</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Package</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('package-update', $data->id) }}">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Add Name" value="{{ $data->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Icon </label>
                                        <input type="text" name="icon" class="form-control" id="inputEmail4"
                                            placeholder="Add Icon" value="{{ $data->icon }}">
                                        @error('icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Amount </label>
                                        <input type="text" name="amount" class="form-control" id="inputEmail4"
                                            placeholder="Add Amount" value="{{ $data->amount }}">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="row">
                                        @foreach ($detail as $item)
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputEmail4" class="form-label"> Condition </label>
                                                <select class="form-select" name="condition[]" id="example-select">
                                                    <option value="1"
                                                        @if ($item->condition == 1) selected @endif>Checked</option>
                                                    <option value="0"
                                                        @if ($item->condition == 0) selected @endif>Unchecked</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputEmail4" class="form-label"> Description </label>
                                                <input type="text" name="description[]" class="form-control"
                                                    id="inputEmail4" placeholder="Add Description"
                                                    value="{{ $item->description }}">

                                            </div>
                                        @endforeach

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



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    Package</button>

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
                                            <label for="inputEmail4" class="form-label"> Condition </label>
                                            <select class="form-select" name="condition[]" id="example-select">
                                                <option selected="">Choose Package Checked or Unchecked</option>
                                                <option value="1">Checked</option>
                                                <option value="0">Unchecked</option>
                                            </select>
                                        </div>

                                    <div class="form-group col-md-6 mb-3">
                                            <label for="inputEmail4" class="form-label"> Description </label>
                                            <input type="text" name="description[]" class="form-control" id="inputEmail4"
                                                placeholder="Add Description">

                                        </div>

                                </div>

        <div class="col-2 offset-5 form-group"><button style="border: none;" class="form-control text-danger removeGrossBtn2" id=""><i class="fa fa-minus"></i></button></div></div></div> `
        }
    </script>
@endsection
