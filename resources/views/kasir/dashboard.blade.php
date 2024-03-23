@extends('layouts.master')



@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        
            <div class="box-body text-center">
                <br><br>
                <a href="{{ route('transaksi.baru') }}" class="btn btn-success btn-lg">Transaksi</a>
                <br><br><br>
            </div>

    </div>
</div>
<!-- /.row (main row) -->
@endsection