@extends('Admin.layout.Admin')

@section('content')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".example1").pDatepicker();
        });
    </script>

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد code </h1>
            @include('Admin.layout.notification')
            <form class="form-control font-size-20" action="{{route('offers.update',$offer)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="code">code</label>
                    <input class="form-control" type="text" value="{{$offer->code}}" id="code" name="code">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="discount">discount</label>
                    <input class="form-control" type="text" value="{{$offer->discount}}" id="discount" name="discount">
                </div>
                <div class="form-group">
                    <input type="text" value="{{$offer->starts_at}}" disabled>
                    <label class="text-dark font-size-30  text-bold" for="starts_at">starts at</label>
                    <input type="date" id="starts_at"  name="starts_at" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" value="{{$offer->expires_at}}" disabled>
                    <label class="text-dark font-size-30  text-bold" for="expires_at">expires at</label>
                    <input type="date" id="expires_at"  name="expires_at" class="form-control">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection
