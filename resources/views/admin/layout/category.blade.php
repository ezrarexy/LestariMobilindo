    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Add Category</button></h6>
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
                                <th>{{ ucfirst(trans($v->name)) }}</th>
                                <th>{{ $v->counts }}</th>
                                <th></th>
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
                <form id="formX">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 ">
                        <form id="formX">
                            <table class="table text-dark">
                                <tr>
                                    <td class="align-middle">Name</td>
                                    <td><input class="form-control inputX" name="name" id="iName" type="text"/></td>
                                </tr>
                            </table>
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
    </script>
@endsection