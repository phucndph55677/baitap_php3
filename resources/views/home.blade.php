@extends('layouts.main')

@section('title', 'Trang Chủ')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Danh Sách Khóa Học</h1>

        <h2>Khóa học mới nhất</h2>
        <div class="row">
            @foreach($newCourses as $course)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <a href="{{ route('course.detail', $course->id) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2>Khóa học giá thấp nhất</h2>
        <div class="row">
            @foreach($cheapCourses as $course)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <p>Giá: {{ $course->price }}</p>
                            <a href="{{ route('course.detail', $course->id) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
