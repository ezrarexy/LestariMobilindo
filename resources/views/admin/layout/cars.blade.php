@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/fileinput.min.css') }}">

    <style>
		.imgPreview2 {
			width: 100px;
			height: 100px;
			background: url({{ asset('/img/upload.jpg') }});
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}

        .imgPreview3 {
			height: 100px;
			display: block;
		}
    </style>

@endsection

    <h1 class="h3 mb-2 text-gray-800">Semua Mobil</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button class="btn btn-primary" id="btnAdd" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Tambah Mobil</button></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Merk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($data as $k => $v)
                            <tr class="align-middle">
                                <th class="align-middle"><img src="{{ asset('/img/products/'.$v->img[0]) }}" width="50px" height="50px" alt=""> {{ ucfirst(trans($v->name)) }} <span class="badge badge-{{ $v->condition_id==1 ? 'success' : ($v->condition_id==2 ? 'warning' : 'primary') }}">{{ $v->condition }}</span> </th>
                                <th class="align-middle">{{ ucfirst(trans($v->brand)) }}</th>
                                <th class="align-middle">{{ ucfirst(trans($v->category)) }}</th>
                                <th class="align-middle">Rp.<span class="harga">{{ $v->price }}</span>,-</th>
                                <th class="align-middle">
                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-placement="top" onclick="edit({{ $v->id }})" id="brb1{{ $v->id }}" data-name="{{ $v->name }}" data-brand="{{ $v->brand_id }}" data-cat="{{ $v->category_id }}" data-condition="{{ $v->condition_id }}" data-img="{{ json_encode($v->img) }}" data-spec="{{ $v->spec }}" data-detail="{{ $v->detail }}" data-price="{{ $v->price }}" title="Ubah" ><i class="fas fa-edit"></i></button> 
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" onclick="del({{ $v->id }})" id="brb2{{ $v->id }}" data-name="{{ $v->name }}" title="Hapus" ><i class="fas fa-trash-alt"></i></button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{-- Modal insert --}}
    <div id="myModal" class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        @php
            use \App\Models\brand;
            use \App\Models\category;
            use \App\Models\condition;

            $brand = Brand::all();
            $category = Category::all();
            $condition = Condition::all();
        @endphp
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="formX" method="POST" action="/car/in" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX" enctype="multipart/form-data">
                            @csrf
                            <table class="table text-dark">
                                <tr>
                                    <td class="align-middle">Merk</td>
                                    <td>
                                        <select class="form-control inputX" name="brand" id="iBrand" required>
                                            <option value="" disabled selected>===== Brand =====</option>
                                            @foreach ($brand as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Nama</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text" required/></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Kategori</td>
                                    <td>
                                        <select class="form-control inputX" name="category" id="iCategory" required>
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
                                        <select class="form-control inputX" name="condition" id="iCondition" required>
                                            <option value="" disabled selected>===== Condition =====</option>
                                            @foreach ($condition as $k => $v)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Harga</td>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp</div>
                                            </div>
                                            <input type="text" name="price" class="form-control inputX" id="iPrice" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Spesifikasi <span class="badge badge-warning" id="wSpec" hidden>!</span></td>
                                    <td><textarea id="iSpec" class="form-control inputX" name="spec" rows="10" cols="50"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Keterangan</td>
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
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                    <button type="button" class="btn btn-success" name="price" id="submitBtn"><i class="fas fa-save"></i> Tambah</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal update --}}
    <div id="myModal2" class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Mobil</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-detail" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Detail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-img" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Gambar</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-detail" role="tabpanel" aria-labelledby="pills-detail-tab" tabindex="0">
                                <form id="formUX" enctype="multipart/form-data">
                                    @csrf
                                    <input type="number" name="id" id="uId" hidden>
                                    <table class="table text-dark">
                                        <tr>
                                            <td class="align-middle">Merk</td>
                                            <td>
                                                <select class="form-control" name="brand" id="uBrand" disabled>
                                                    <option value="" disabled selected>===== Brand =====</option>
                                                    @foreach ($brand as $k => $v)
                                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Nama</td>
                                            <td><input class="form-control updateX" name="name" onkeyup="uCheck()" id="uName" type="text"/></td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Kategori</td>
                                            <td>
                                                <select class="form-control updateX" name="category" onchange="uCheck()" id="uCategory">
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
                                                <select class="form-control" name="condition" id="uCondition" disabled>
                                                    <option value="" disabled selected>===== Condition =====</option>
                                                    @foreach ($condition as $k => $v)
                                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Harga</td>
                                            <td>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp</div>
                                                    </div>
                                                    <input type="text" name="price" onkeyup="uCheck()" class="form-control updateX" id="uPrice">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Spesifikasi <span class="badge badge-warning" id="wSpec2" hidden>!</span></td>
                                            <td><textarea id="uSpec" class="form-control updateX" name="spec" rows="10" cols="50"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Keterangan</td>
                                            <td><textarea class="form-control updateX" name="detail" onkeyup="uCheck()" id="uDetail" type="text"></textarea></td>
                                        </tr>
                                    </table>
                                    <input type="submit" id="uBtnGo" hidden>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-img" role="tabpanel" aria-labelledby="pills-img-tab" tabindex="0">
                                <table width="50%" class="table table-bordered table-inverse">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Preview</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="uProImg">
                                    </tbody>
                                </table>
                                <button id="addImgBtn" class="btn btn-primary float-right">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </button>
                                <form id="formImg" enctype="multipart/form-data">
                                    <input id="iAddImg" name="img" type="file" hidden>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                    <button type="button" class="btn btn-success" name="submit" id="uSubmitBtn"><i class="fas fa-save"></i> Ubah</button>
                </div>
            </div>  
        </div>
    </div>

    <!-- Modal delete -->
    <div class="modal fade" id="delPro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Delete Brand" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Product</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <h3>Hapus <span class="text-primary font-weight-bold" id="delbr"></span>? </h3>
                <input type="number" id="delid" hidden>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger" id="delConfirm"><i class="fas fa-trash-alt"></i> Hapus</button>
            </div>
        </div>
        </div>
    </div>

    @section('scriptInput')
        <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
        <script src="{{ asset('assets/js/fileinput.min.js') }}"></script>
        <script>
            var uTab = "#pills-detail";
            var uChange = false;
            var uModal = false;
            var irowz = 0;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.nav-pills button').on('shown.bs.tab', function (e) {
                var x = $('#'+e.currentTarget.id).data('bs-target');
                uTab = x; 

                uCheck();

            });

            var isPhoto = false;
            $('#iPrice').number(true,0);
            var spec = document.getElementById("iSpec");
            CKEDITOR.replace(spec,{
                language:'id-ID'
            });
            CKEDITOR.config.allowedContent = true;

            var usPhoto = false;
            $('#uPrice').number(true,0);
            var spec2 = document.getElementById("uSpec");
            CKEDITOR.replace(spec2,{
                language:'id-ID'
            });
            CKEDITOR.config.allowedContent = true;

            CKEDITOR.instances.uSpec.on('change', function() { 
                if (uModal) uChange = true;
            });

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

            $('#uPict').on('filebatchselected', function(event, files) {
                $('#wPict').attr('hidden',true);
                usPhoto = true;
            });

            $('#uPict').on('filecleared', function(event) {
                usPhoto = false;
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
                            safe = false;
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
                        safe = false;
                        return false;
                    } else {
                        if(!isPhoto){
                            toastr.error('Fill all input first!');
                            $('#wPict').attr('hidden',false);
                            safe = false;
                            return false;
                        } 
                    }
                });

                if (safe) {
                    $.LoadingOverlay("show");
                    $('#btnGo').click();
                } 
            });

            $('#myModal').on('hidden.bs.modal', function (e) {
                $('#formX').trigger("reset");
                CKEDITOR.instances.iSpec.setData('');
            });

            $('#myModal2').on('hidden.bs.modal', function (e) {
                $('#formX').trigger("reset");
                CKEDITOR.instances.iSpec.setData('');
            });

            function edit(id) {
                elem = $('#brb1'+id);
                img = elem.data('img');

                $('#uBrand').val(elem.data('brand'));
                $('#uName').val(elem.data('name'));
                $('#uCondition').val(elem.data('condition'));
                $('#uCategory').val(elem.data('cat'));
                $('#uDetail').text(elem.data('detail'));
                $('#uPrice').val(elem.data('price'));
                $('#uId').val(id);

                $('#uName').attr("data-origin", elem.data('name'));
                $('#uCategory').attr("data-origin", elem.data('cat'));
                $('#uDetail').attr("data-origin", elem.data('detail'));
                $('#uPrice').attr("data-origin", elem.data('price'));
                $('#uSpec').attr("data-origin", elem.data('spec'));

                $('#iAddImg').attr("data-id", id);

                CKEDITOR.instances["uSpec"].setData(elem.data('spec'));

                $('#uSubmitBtn').attr('disabled',true);

                $('#myModal2').modal('show');

                LoadImg(id);

                uModal = true;
            }

            function uCheck() {
                var ele = $('.updateX');
                $.each(ele, function (i, v) { 
                    if (v.id !== 'uSpec') {
                        x = $('#'+v.id).val();
                        y = $('#'+v.id).data('origin');

                        if (x !== y) uChange = true;
                    }
                });

                if (uChange && uTab==="#pills-detail") {
                    $('#uSubmitBtn').attr('disabled',false);
                } else $('#uSubmitBtn').attr('disabled',true);
            }

            $('#uSubmitBtn').click(function (e) { 
                e.preventDefault();                
                var fd = $('#formUX').serializeArray();

                fd.push({name: "spec", value: CKEDITOR.instances.uSpec.getData()});

                try {
                    $.ajax({
                    type: "PUT",
                    url: "{{ route('uCar') }}",
                    data: fd,
                    dataType: "json",
                    success: function (response) {
                        if(response.status=="ok") {
                            toastr.success(response.msg);
                            $.LoadingOverlay("hide");
                            $('#myModal2').modal('hide');
                            location.reload();
                        } else {
                            toastr.error("Produk gagal diperbaharui!");
                            console.log(response.msg);
                        }
                    }
                    });
                } catch (error) {
                    console.log(error);
                }


            });

            function idrop(id,img,cnt) {
                var cimg = 0;
                $('.imgPreview3').each(function (i, e) {
                    cimg++;
                });

                if (cimg > 1) {
                    $.ajax({
                        url: '{{ route('carImgDel') }}',
                        type: 'DELETE',
                        data: {id:id,img:img},

                        success: function (reply) {
                            if (reply.success=="ok") {
                                toastr.success(reply.msg);
                                // location.reload();
                                $(cnt).remove();
                            } else {
                                toastr.error('Somethings wrong!');
                            }
                        }
                    });
                } else {
                    toastr.error("Tidak bisa menghapus satu-satunya gambar produk yang ada!");
                }


            }
            
            function del(id) {
                var name = $('#brb2'+id).data('name');
                $('#delbr').text(name);
                $('#delPro').modal('show');
                $('#delid').val(id);
            }

            $('#delConfirm').on('click', function (x) {
                var id = $('#delid').val();
               
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('carDel') }}",
                    data: {id : id},
                    dataType: "json",
                    success: function (response) {
                        if (response.status=="ok") {
                            toastr.success(response.msg);
                            $('#delPro').modal('hide');
                            location.reload();
                        } else {
                            toast.error(response.msg);
                        }
                    }
                });
            });

            $('#myModal2').on('hide.bs.modal', function (e) {
                $('#uProImg').empty();
                irowz = 0;
            });

            $('#addImgBtn').on('click', function() {
                $('#iAddImg').click();
            });


            $('#iAddImg').on('change', function () { 
                var id = $('#iAddImg').data('id');

                var fileInput = $(this);
                if (fileInput.length && fileInput[0].files && fileInput[0].files.length) {
                    var url = window.URL || window.webkitURL;
                    var image = new Image();
                    image.onload = function() {
                        var a=(fileInput[0].files[0].size);
                        if(a > 2000000) {
                            toastr.error('Maksimum gambar 2MB!');
                        } else {   
                            $.LoadingOverlay("show");
                            var fd = new FormData(document.getElementById('formImg'));

                            fd.append("id",id);

                            $.ajax({
                                type: "POST",
                                url: "{{ route('addImgPro') }}",
                                data: fd,
                                success: function (response) {
                                    if (response.status == "ok"){
                                        toastr.success(response.msg);
                                        LoadImg(id);
                                        $.LoadingOverlay("hide");
                                    } else {
                                        toastr.error(response.msg);
                                        $.LoadingOverlay("hide");
                                    }
                                },
                                cache: false,
                                contentType: false,
                                processData: false
                            });

                        }
                    };
                    image.onerror = function() {
                        toastr.error('Gambar tidak valid!');
                    };
                    image.src = url.createObjectURL(fileInput[0].files[0]);
                }

            });

            function LoadImg(id) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('getImgPro') }}",
                    data: {id:id},
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "ok") {
                            $('#uProImg').empty();
                            $.each(response.msg, function (i, val) {
                                $('#uProImg').append('<tr id="irow'+irowz+'"><td><img id="imgPrev'+irowz+'" class="imgPreview3" src="/img/products/'+val+'"/></td><td><button class="btn btn-danger" onclick="idrop(\''+id+'\',\''+val+'\',irow'+irowz+')"><i class="fa fa-minus-circle"></i></button></td></tr>');
                                irowz++;
                            });
                        } else {
                            toastr.error('Something\'s wrong!');
                            $('#myModal2').toggle('hide');
                        }                  
                    }
                });   
            }

        </script>
    @endsection