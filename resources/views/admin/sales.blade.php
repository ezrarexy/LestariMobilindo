@extends('admin.layout.thf')

@section('stylesheet')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <h1 class="h3 mb-2 text-gray-800">Sales</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button class="btn btn-primary" id="btnAdd" data-bs-toggle="modal" data-bs-target="#myModal2"><i class="fas fa-plus-circle"></i> Tambah Sales</button></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No. WA</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($data as $k => $v)
                            <tr class="align-middle">
                                <th class="align-middle">{{ ucfirst($v->name) }}</th>
                                <th class="align-middle">
                                    <a href="https://api.whatsapp.com/send?phone=62{{ $v->phone }}">+62{{ $v->phone }}</a>
                                </th>
                                <th class="align-middle">
                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-placement="top" onclick="edit({{ $v->id }})" id="brb1{{ $v->id }}" data-name="{{ $v->name }}" data-phone="{{ $v->phone }}" title="Ubah" ><i class="fas fa-edit"></i></button> 
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" onclick="del({{ $v->id }})" id="brb2{{ $v->id }}" data-name="{{ $v->name }}" title="Hapus" ><i class="fas fa-trash-alt"></i></button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div id="myModal2" class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Sales</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formSales">
                        <div class="input-group mb-3">
                            <input id="nama" type="text" class="form-control sales" aria-label="Nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input id="phone" type="text" class="form-control sales" name="phone" placeholder="Telpon / WhatsApp" aria-label="Phone" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                    <button type="button" class="btn btn-success" name="submit" id="SubmitBtn"><i class="fas fa-save"></i> Tambah</button>
                </div>
            </div>
        </div>
    </div>


    {{-- ======================= Modal Update ============================ --}}
    <div id="myModalU" class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Sales</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formUSales">
                        <div class="input-group mb-3">
                            <input id="Unama" type="text" class="form-control Usales" aria-label="Nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input id="Uphone" type="text" class="form-control Usales" name="phone" placeholder="Telpon / WhatsApp" aria-label="Phone" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                    <button type="button" class="btn btn-success" name="submit" id="USubmitBtn"><i class="fas fa-save"></i> Ubah</button>
                </div>
            </div>
        </div>
    </div>    


    <!-- Modal delete -->
    <div class="modal fade" id="delPro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="Delete Brand" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Sales</h5>
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

@endsection

@section('scripts')

    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery_number.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();

            $('input#phone').number( true, 0, ',', '');
        });

        $('#SubmitBtn').on('click', function(e) {
            $ok = true;
            $('.sales').each(function (i, e) {
                if ($('#'+e.id).val()==="") {
                    $ok = false;
                    $('#'+e.id).focus();
                    toastr.error('Isi semua kolom!');
                    return false;
                }

                if (i==1) {
                    if  ($('#'+e.id).val().length < 9 ) {
                        $ok = false;
                        toastr.error('Periksa kembali nomor telepon!');
                        $('#phone').focus();
                        return false;
                    }
                }
            });

            if($ok) {
                $.LoadingOverlay("show");
                $name = $('#nama').val();
                $phone = $('#phone').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('addSales') }}",
                    data: {nama:$name,phone:$phone},
                    dataType: "json",
                    success: function (response) {
                        if(response.status=='ok') {
                            $.LoadingOverlay("hide");
                            toastr.success(response.msg);
                            $('#myModal2').modal('hide');
                            location.reload();
                        } else {
                            $.LoadingOverlay("hide");
                            toastr.error(response.msg);
                        }
                    }
                });   
            }
        });

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
                url: "{{ route('delSales') }}",
                data: {id : id},
                dataType: "json",
                success: function (response) {
                    if (response.status=="ok") {
                        toastr.success(response.msg);
                        $('#delPro').modal('hide');
                        location.reload();
                    } else {
                        toastr.error(response.msg);
                    }
                }
            });
        });


        function edit(id) {
            elem = $('#brb1'+id);
            img = elem.data('img');

            $('#Unama').val( elem.data('name'));
            $('#Unama').attr('data-id', id);
            $('#Uphone').val( elem.data('phone'));

            $('#myModalU').modal('show');

        }

        $('#USubmitBtn').on('click', function(e) {
            $ok = true;
            $('.Usales').each(function (i, e) {
                if ($('#'+e.id).val()==="") {
                    $ok = false;
                    $('#'+e.id).focus();
                    toastr.error('Isi semua kolom!');
                    return false;
                }

                if (i==1) {
                    if  ($('#'+e.id).val().length < 9 ) {
                        $ok = false;
                        toastr.error('Periksa kembali nomor telepon!');
                        $('#Uphone').focus();
                        return false;
                    }
                }
            });

            if($ok) {
                $.LoadingOverlay("show");
                $name = $('#Unama').val();
                $phone = $('#Uphone').val();
                $id = $('#Unama').data('id');

                $.ajax({
                    type: "PUT",
                    url: "{{ route('chSales') }}",
                    data: {id:$id,nama:$name,phone:$phone},
                    dataType: "json",
                    success: function (response) {
                        if(response.status=='ok') {
                            $.LoadingOverlay("hide");
                            toastr.success(response.msg);
                            $('#myModalU').modal('hide');
                            location.reload();
                        } else {
                            $.LoadingOverlay("hide");
                            toastr.error(response.msg);
                        }
                    }
                });   
            }
        });



    </script>





@endsection