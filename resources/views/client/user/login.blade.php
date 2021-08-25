@extends('client.layout.index')



@section('index')
    <div class="container-fluid box_product">
        <div class="row bg-gray">
            <div class="col-sm-12 bg-white">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="text-center text-bold" action="{{route('users.login')}}" method="post">
                            @csrf
                            <h1 >login</h1>
                            <div class="">
                                <div class="form-group">
                                    <label for="for-input-email">email</label>
                                    <input type="email" name="email" id="for-input-email" class="form-control" placeholder="put your email">
                                </div>
                                <div class="form-group">
                                    <label for="for-input-pass">password</label>
                                    <input type="password" name="password" id="for-input-pass" class="form-control" placeholder="put your password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-success" value="login">
                                </div>
                            </div>
                        </form>
                        @include('client.layout.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
