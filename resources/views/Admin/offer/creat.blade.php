@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد code </h1>
            @include('Admin.layout.notification')
            <form class="form-control font-size-20" action="{{route('offers.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="code">code</label>
                    <input class="form-control" type="text" id="code" name="code">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="starts_at">starts at</label>
                    <input type="date" id="starts_at" name="starts_at" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="expires_at">expires at</label>
                    <input type="date" id="expires_at" name="expires_at" class="form-control">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection
