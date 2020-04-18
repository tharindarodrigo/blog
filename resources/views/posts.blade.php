@extends('app')

@push('css')
    <style>
        h1 {
            color: blue;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>POSTS</h1>
            </div>
            <div class="col">
                @if($x >= 10)
                    {{$x}} is greater than 10
                @else
                    {{$x}} is less than 10
                @endif
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush

{{--@section('qwe')--}}
{{--    <div class="container">--}}
{{--        <h1>Post 1</h1>--}}
{{--    </div>--}}
{{--@endsection--}}
