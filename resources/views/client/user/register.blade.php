@extends('client.layout.index')



@section('index')
    <div class="container-fluid box_product">
        <div class="row bg-gray">
            <div class="col-sm-12 bg-white">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="" action="{{route('users.store')}}" method="post">
                            @csrf
                            <h1 >فرم ثبت نام</h1>
                            <div class="">
                                <div class="form-group">
                                    <label for="for-input-email">email</label>
                                    <input type="email" name="email" id="for-input-email" class="form-control" placeholder="write your email">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-success" value="register-and-login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
