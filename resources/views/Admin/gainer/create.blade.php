@extends('Admin.layout.Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{route('user.store')}}" class="text-right font-size-20" method="post" >
                    @csrf
                    <div class="form-group">
                        <label class=" label-primary" for="name">name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label class=" label-primary " for="email">email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class=" label-primary" for="password">password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success form-control" type="submit" value="create">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
