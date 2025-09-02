@extends('Layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert-box alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection