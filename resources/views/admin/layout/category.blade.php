    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Tambah Kategori</button></h6>
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
                                <th>{{ ucfirst(trans($v->name)) }}</th>
                                <th>{{ $v->counts }}</th>
                                <th>
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" onclick="del({{ $v->id }})" id="brb2{{ $v->id }}" data-catname="{{ $v->name }}" title="Hapus" {{ $v->counts>0 ? 'disabled' : '' }}><i class="fas fa-trash-alt"></i></button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        @php
            use \App\Models\brand;
            $brand = Brand::all();
        @endphp
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="formX">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX">
                            <table class="table text-dark">
                                <tr>
                                    <td class="align-middle">Nama</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text"/></td>
                                </tr>
                            </table>
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

    <!-- Modal delete -->
    <div class="modal fade" id="delBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Delete Brand" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
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


        $('#submitBtn').on('click', function (e) {
            var name = $('#iName').val();

            if (name=="" || name==null) {
                toastr.error('Fill category name first!');
                $('#iName').select().focus();
            } else {
                $.ajax({
                    type: "POST",
                    url: "{{ route('categoryIn') }}",
                    dataType: "json",
                    data: {name:name},
                    success: function (response) {
                        console.log(response)
                        if(response.status=="ok") {
                            toastr.success('Category added successfully!');
                            location.reload(true);
                        } else {
                            toastr.error('Category '+response.data+' exist!');
                            $('#iName').select().focus();
                        }
                    }
                });
            }


        });

        function del(id) {
            var name = $('#brb2'+id).data('catname');
            $('#delbr').text(name);
            $('#delBrand').modal('show');
            $('#delid').val(id);
        }

        $('#delConfirm').on('click', function (x) {
            var id = $('#delid').val();
            
            $.ajax({
                type: "DELETE",
                url: "{{ route('catDel') }}",
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