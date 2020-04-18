@extends('app')

@push('js')
    <script>
        // $(document)
    </script>
@endpush

@section('content')
    <div class="container">
        <h1>Blog Post Name </h1>
{{--        <h3>Hello {{ $name }}</h3>--}}
{{--        <h3>From {{ $address }}</h3>--}}
        <h3></h3>
    </div>
@endsection

{{--@section('qwe')--}}
{{--    <div class="container">--}}
{{--        <h1>Post 1</h1>--}}
{{--    </div>--}}
{{--@endsection--}}
