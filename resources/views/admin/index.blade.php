@extends('admin.layout.thf')

@section('stylesheet')
    
@endsection

@section('content')

<div class="row">
    <div class="card col-md-5 border border-radius m-3">
        <h3 align="center"><a class="stretched-link" href="/cars">Mobil</a></h3>
        <table class="table table-stripped">
            <tr class="text-primary">
                <td>Baru</td>
                <td>{{ $pej->new }} unit</td>
            </tr>
            <tr class="text-warning">
                <td>Bekas</td>
                <td>{{ $pej->second }} unit</td>
            </tr>
            <tr class="text-secondary">
                <td>Indent</td>
                <td>{{ $pej->indent }} unit</td>
            </tr>
        </table>
    </div>
    <div class="card col-md-3 border border-radius m-3">
        <h3 align="center"><a class="stretched-link" href="/brands">Merk</a></h3>
        <h1 class="display-1" align="center">{{ $pej->brand }}</h1>
    </div>
    <div class="card col-md-3 border border-radius m-3">
        <h3 align="center"><a class="stretched-link" href="/categories">Kategori</a></h3>
        <h1 class="display-1" align="center">{{ $pej->category }}</h1>
    </div>
</div>

@endsection

@section('scripts')

@endsection