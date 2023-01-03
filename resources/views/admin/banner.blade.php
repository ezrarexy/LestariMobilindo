@extends('admin.layout.thf')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Banner</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button type="button" id="addImgBtn" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Banner</button></h6>
            <form id="formImg" enctype="multipart/form-data">
                <input id="iAddImg" name="img" type="file" hidden>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Preview</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody id="bannerContainer">
                    </tbody>
                </table>

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

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('[data-bs-toggle="tooltip"]').tooltip();
            LoadImg();
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
                                url: "{{ route('addBanner') }}",
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

            function LoadImg() {
                $.ajax({
                    type: "GET",
                    url: "/banners/get",
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "ok") {
                            $('#bannerContainer').empty();
                            $.each(response.msg, function (i, val) {
                                $('#bannerContainer').append('<tr><td><a target="_blank" href="/assets/uploads/banner/'+val.img+'"><img class="bannerImg" height="50px" src="/assets/uploads/banner/'+val.img+'"/></td><td><button class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" title="Hapus" onclick="idrop('+val.id+')"><i class="fas fa-trash-alt"></i></button></a></td></tr>');
                            });
                        } else {
                            toastr.error('Something\'s wrong!');
                            $('#myModal2').toggle('hide');
                        }                  
                    }
                });   

                $('[data-bs-toggle="tooltip"]').tooltip('dispose');
                $('[data-bs-toggle="tooltip"]').tooltip();
            }


            function idrop(id) {
                var cimg = 0;
                $('.bannerImg').each(function (i, e) {
                    cimg++;
                });

                if (cimg > 1) {
                    $.ajax({
                        url: '{{ route('delBanner') }}',
                        type: 'DELETE',
                        data: {id:id},

                        success: function (reply) {
                            if (reply.success=="ok") {
                                toastr.success(reply.msg);
                                LoadImg();
                            } else {
                                toastr.error('Somethings wrong!');
                            }
                        }
                    });
                } else {
                    toastr.error("Tidak bisa menghapus satu-satunya banner yang ada!");
                }


            }

    </script>
@endsection