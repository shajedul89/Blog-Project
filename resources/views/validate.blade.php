{{--Error Handling:--}}
{{----------------------------------------------------------}}
@if($errors -> any())

    <p class="alert alert-danger"> {{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

@endif

{{--Success Message:--}}
{{--=====================================================--}}

@if(Session::Has('success'))

    <p class="alert alert-success"> {{Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>

@endif

