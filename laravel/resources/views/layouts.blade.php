@extends('layouts.footer')
@section('footer')
    @parent
@stop

{{--<div id="dcMain"></div>--}}
{{--@yield('content')--}}
{{--@yield('content','')--}}
@extends('layouts.content')
@yield('content')

@extends('layouts.left')
@section('left')
    @parent
@stop



@extends('layouts.header')
@section('header')
    @parent
@stop


