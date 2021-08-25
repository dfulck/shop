@extends('client.layout.index')



@section('index')
    <div class="container-fluid box_product">
        <div class="row bg-gray">
            <div class="col-sm-12 bg-white">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="" action="{{route('users.verify',$users)}}" method="post">
                            @csrf
                            <h1 >احراز ایمیل</h1>
                            <div class="">
                                <div class="form-group">
                                    <label for="for-input-email">{{$users->email}}</label>
                                    <input type="number" name="code" id="for-input-email" class="form-control" placeholder="take your code for verify">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-success" value="verify">
                                </div>
                            </div>
                            <a class="btn btn-danger my-3" href="{{route('users.create')}}">if you dont give a code click hear</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('client.layout.errors')
@endsection
