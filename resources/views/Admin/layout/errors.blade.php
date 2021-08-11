@if(count($errors->all())>0)
    <ul class="form-group text-center form-control bg-danger text-white">
        @foreach($errors->all() as $error)
            <li class="text-box text-dangerr">
                {{$error}}
            </li>
            <br>
        @endforeach
    </ul>
@endif
