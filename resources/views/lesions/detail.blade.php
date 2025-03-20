@extends('layouts.main')

@section('title', 'Chi Tiết Bài Học')

@section('content')
    <div class="container">
        <h1>{{ $lesion->title }}</h1>
        <p>{{ $lesion->content }}</p>
        <img src="{{ $lesion->image }}" alt="Image for lesion" class="img-fluid">
    </div>
@endsection
