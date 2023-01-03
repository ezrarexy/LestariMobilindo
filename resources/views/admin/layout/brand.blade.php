

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Merk</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button class="btn btn-primary" id="btnAdd" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Tambah Merk</button></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Mobil</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k => $v)
                            <tr>
                                <td><img src="{{ asset('/img/brand/'.$v->logo.'?v=$k') }}" width="50px" height="50px" alt=""> {{ ucfirst(trans($v->name)) }}</td>
                                <td>{{ $v->counts }}</td>
                                <td>
                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-placement="top" onclick="edit({{ $v->id }})" id="brb1{{ $v->id }}" data-brlogo="{{ $v->logo }}" data-brname="{{ $v->name }}"  title="Ubah" {{ $v->counts>0 ? 'disabled' : '' }}><i class="fas fa-edit"></i></button> 
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" onclick="del({{ $v->id }})" id="brb2{{ $v->id }}" data-brname="{{ $v->name }}" title="Hapus" {{ $v->counts>0 ? 'disabled' : '' }}><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Merk</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX" method="POST" action="{{ route('brandIn') }}" enctype="multipart/form-data">
                            @csrf
                            <table class="table text-dark">
                                <tr>
                                    <td  class="align-middle">Logo</td>
                                    <td  class="align-center text-center">
                                        <label for="image-picker">
                                            <img id="image-preview" src="{{ asset('/img/upload.svg') }}" style="width: 100px; height: 100px;" alt="your image" />
                                        </label>
                                        <input id="image-picker" class="inputX" name="logo" type="file" accept="image/*" style="visibility:hidden; position: absolute;" />                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Nama</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text"/></td>
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

    <div class="modal fade bd-modal-update" id="uBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Merk</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formUX" method="POST" action="{{ route('brandUp') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="id" id="uId" hidden>
                            <table class="table text-dark">
                                <tr>
                                    <td  class="align-middle">Logo</td>
                                    <td  class="align-center text-center">
                                        <label for="uLogo">
                                            <img id="Upreview" src="{{ asset('/img/upload.svg') }}" style="width: 100px; height: 100px;" alt="your image" />
                                        </label>
                                        <input id="uLogo" class="inputX" name="logo" type="file" accept="image/*" style="visibility:hidden; position: absolute;" />                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Nama</td>
                                    <td><input class="form-control inputX" name="name" id="uName" type="text"/></td>
                                </tr>
                            </table>
                            <input type="submit" id="UbtnGo" hidden>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                    <button type="button" class="btn btn-success" name="price" id="UsubmitBtn" ><i class="fas fa-save"></i> Ubah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delete -->
    <div class="modal fade" id="delBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Delete Brand" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Brand</h5>
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
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

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

            $("#uLogo").change(function (event) {
                UPreview(this);
                console.log(this);
                
            });
            
            function UPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#Upreview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#submitBtn').on('click', function() {
                var logo = $('#image-picker').get(0).files;
                var name = $('#formX :input')[1].val();
 
                if(logo.length > 0 && name != ""){
                    $('#btnGo').click();
                } else {
                    toastr.error('Fill all input first!');
                }

            });


            $('#UsubmitBtn').on('click', function() {
                var logo = $('#uLogo').get(0).files;
                var oname = $('#uName').data('origin');
                var name = $('#uName').val();
 
                if(logo.length > 0 || name !== oname){
                    $('#UbtnGo').click();
                } else {
                    toastr.error('Tidak ada perubahan!');
                }

            });            
            

            function edit(id) {
                $('#Upreview').attr('src','img/brand/'+$('#brb1'+id).data('brlogo'));
                $('#uName').val($('#brb1'+id).data('brname'));
                $('#uName').attr('data-origin',$('#brb1'+id).data('brname'));
                $('#uId').val(id);

                $('#uBrand').modal('show');
            }

            function del(id) {
                var name = $('#brb2'+id).data('brname');
                $('#delbr').text(name);
                $('#delBrand').modal('show');
                $('#delid').val(id);
            }


            $('#delConfirm').on('click', function (x) {
                var id = $('#delid').val();
               
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('brandDel') }}",
                    data: {id : id},
                    dataType: "json",
                    success: function (response) {
                        if (response.status=="ok") {
                            toastr.success(response.msg);
                            $('#delBrand').modal('hide');
                            location.reload();
                        } else {
                            toast.error(response.msg);
                        }
                    }
                });
            });


        </script>
    @endsection