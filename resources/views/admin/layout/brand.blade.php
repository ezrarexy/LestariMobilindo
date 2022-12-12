

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $pej->name }}</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button class="btn btn-primary" id="btnAdd" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Add {{ $pej->name }}</button></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th># of Cars</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k => $v)
                            <tr>
                                <th><img src="{{ asset('/img/brand/'.$v->logo) }}" width="50px" height="50px" alt=""> {{ ucfirst(trans($v->name)) }}</th>
                                <th>{{ $v->counts }}</th>
                                <th><button class="btn" data-toggle="tooltip" data-placement="top" title="Edit" {{ $v->counts>0 ? 'disabled' : '' }}><i class="fas fa-edit"></i></button> <button class="btn" data-toggle="tooltip" data-placement="top" title="Delete" {{ $v->counts>0 ? 'disabled' : '' }}><i class="fas fa-trash-alt"></i></button> </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        @php
            $brand = \App\Models\Brand::all();
        @endphp
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX" method="POST" action="{{ route('brandIn') }}" enctype="multipart/form-data">
                            @csrf
                            <table class="table text-dark">
                                <tr>
                                    <td  class="align-middle">Brand Logo</td>
                                    <td  class="align-center text-center">
                                        <label for="image-picker">
                                            <img id="image-preview" src="{{ asset('/img/upload.svg') }}" style="width: 100px; height: 100px;" alt="your image" />
                                        </label>
                                        <input id="image-picker" class="inputX" name="logo" type="file" accept="image/*" style="visibility:hidden; position: absolute;" />                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Name</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text"/></td>
                                </tr>
                            </table>
                            <input type="submit" id="btnGo" hidden>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                    <button type="button" class="btn btn-success" name="price" id="submitBtn"><i class="fas fa-save"></i> Add</button>
                </div>
            </div>
        </div>
    </div>


    @section('scriptInput')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            })

            $("#image-picker").change(function (event) {
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#image-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            $('#submitBtn').on('click', function() {
                var logo = $('#image-picker').get(0).files;
                var name = $("#formX :input")[1].value;
 
                if(logo.length > 0 && name != ""){
                    $('#btnGo').click();
                } else {
                    toastr.error('Fill all input first!');
                }



            });

        </script>
    @endsection