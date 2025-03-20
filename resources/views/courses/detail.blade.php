@extends('layouts.main')

@section('title', 'Chi Tiết Khóa Học')

@section('content')
    <div class="container">
        <h1>{{ $course->title }}</h1>
        <p>{{ $course->description }}</p>
        <p><strong>Giới thiệu:</strong> {{ $course->introduction }}</p>
        <p><strong>Giá:</strong> {{ number_format($course->price, 2) }} VNĐ</p>
        
        <h3>Bài học trong khóa học</h3>
        <ul>
            @foreach($course->lesions as $lesion)
                <li>
                    <a href="{{ route('lesion.detail', $lesion->id) }}">{{ $lesion->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
