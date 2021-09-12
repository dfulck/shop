@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>create wallet</h1>
            @include('Admin.layout.notification')
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('wallet.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="amount">amount</label>
                    <input class="form-control" type="text" id="amount" name="amount">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="charge">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection
