@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/fileinput.min.css') }}">
@endsection

    <h1 class="h3 mb-2 text-gray-800">{{ $pej->name }}</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button class="btn btn-primary" id="btnAdd" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Add Car</button></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($data as $k => $v)
                            <tr class="align-middle">
                                <th class="align-middle"><img src="{{ asset('/img/products/'.$v->img[0]) }}" width="50px" height="50px" alt=""> {{ ucfirst(trans($v->name)) }} <span class="badge badge-{{ $v->condition_id==1 ? 'success' : ($v->condition_id==2 ? 'warning' : 'primary') }}">{{ $v->condition }}</span> </th>
                                <th class="align-middle">{{ ucfirst(trans($v->brand)) }}</th>
                                <th class="align-middle">{{ ucfirst(trans($v->category)) }}</th>
                                <th class="align-middle">Rp.<span class="harga">{{ $v->price }}</span>,-</th>
                                <th class="align-middle"></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        @php
            $brand = \App\Models\Brand::all();
            $category = \App\Models\Category::all();
            $condition = \App\Models\Condition::all();
        @endphp
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="formX" method="POST" action="/car/in" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Car</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX" enctype="multipart/form-data">
                            @csrf
                            <table class="table text-dark">
                                <tr>
                                    <td class="align-middle">Brand</td>
                                    <td>
                                        <select class="form-control inputX" name="brand" id="iBrand">
                                            <option value="" disabled selected>===== Brand =====</option>
                                            @foreach ($brand as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Name</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text"/></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Category</td>
                                    <td>
                                        <select class="form-control inputX" name="category" id="iCategory">
                                            <option value="" disabled selected>===== Category =====</option>
                                            @foreach ($category as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Condition</td>
                                    <td>
                                        <select class="form-control inputX" name="condition" id="iCondition">
                                            <option value="" disabled selected>===== Condition =====</option>
                                            @foreach ($condition as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Price</td>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp</div>
                                            </div>
                                            <input type="text" name="price" class="form-control inputX" id="iPrice">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Specification <span class="badge badge-warning" id="wSpec" hidden>!</span></td>
                                    <td><textarea id="iSpec" class="form-control inputX" name="spec" rows="10" cols="50"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Detail</td>
                                    <td><textarea class="form-control inputX" name="detail" id="iDetail" type="text"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Picture <span class="badge badge-warning" id="wPict" hidden>!</span></td>
                                    <td><input id="iPict" name="pict[]" type="file" class="file" accept="image/jpg, image/jpeg, image/png" multiple data-msg-placeholder="Select {files} for upload..."></td>
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
        <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
        <script src="{{ asset('assets/js/fileinput.min.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var isPhoto = false;
            $('#iPrice').number(true,0);

            var spec = document.getElementById("iSpec");
            CKEDITOR.replace(spec,{
                language:'id-ID'
            });
            CKEDITOR.config.allowedContent = true;

            $("#iPict").fileinput({
                'showRemove': true,
                'allowedFileExtensions':['jpg', 'png', 'jpeg'],
                'resizeIfSizeMoreThan':1024,
            });

            $('#iPict').on('filebatchselected', function(event, files) {
                $('#wPict').attr('hidden',true);
                isPhoto = true;
            });

            $('#iPict').on('filecleared', function(event) {
                isPhoto = false;
            });

            $('#submitBtn').click(function (e) { 
                var safe = true;
                e.preventDefault();                
                var stack = $('.inputX');
                var x = $('#iPict').data('fileinput');
                
                $.each(stack, function (i, v) {
                    var ele = $('#'+v.id);
                    
                    var x = "";

                    if (v.id=="iSpec") {
                        x = CKEDITOR.instances.iSpec.getData();
                        if (x == null || x == "") { 
                            $('#wSpec').attr('hidden',false);
                            var safe = false;
                        }
                        else {
                            $('#wSpec').attr('hidden',true);
                        }
                    } else {
                        x = ele.val();
                    }

                    if (x == null || x == "") {
                        toastr.error('Fill all input first!');
                        ele.focus().select();
                        var safe = false;
                        return false;
                    } else {
                        if(!isPhoto){
                            toastr.error('Fill all input first!');
                            $('#wPict').attr('hidden',false);
                            var safe = false;
                            return false;
                        } else {
                            $.LoadingOverlay("show");
                            $('#btnGo').click();
                        }
                    }

                });

                if (safe) {

                    
                }



                
            });

            $('#myModal').on('hidden.bs.modal', function (e) {
                $('#formX').trigger("reset");
                CKEDITOR.instances.iSpec.setData('');
            });


        </script>
    @endsection