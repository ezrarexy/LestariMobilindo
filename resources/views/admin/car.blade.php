@extends('admin.layout.thf')

@section('stylesheet')
    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    
@switch($pej->link)
    @case('cars')
        @include('admin/layout/cars')
        @break
    @case('brands')
        @include('admin/layout/brand')
        @break
    @case('categories')
        @include('admin/layout/category')
        @break
@endswitch

@endsection

@section('scripts')

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery_number.min.js') }}"></script>

    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
            $('.harga').number(true, 2);
        } );
    </script>

@endsection