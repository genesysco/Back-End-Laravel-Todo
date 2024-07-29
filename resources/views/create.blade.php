@extends('layouts.layout');

@section('title','Creating Todo page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                @includeIf('errors')
                <div class="card">
                    <div class="card-header">
                    ایجاد تسک جدید
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <label for="title">
                                عنوان
                            </label>
                            <input type="text" class="form-control 
                            @error('title') border-danger @enderror" id="title" name="title" value="{{old('title')}}">
                            @error('title')
                                <span class="text-danger">فیلد عنوان نباید خالی باشد</span>
                            @enderror
                            <br>
                            <label for="description">
                                توضیحات
                            </label>
                            <textarea class="form-control 
                            @error('description') border-danger @enderror" id="description" name="description">{{old('description')}}</textarea>
                            @error('description')
                                <span class="text-danger">فیلد توضیحات نباید خالی باشد</span>
                            @enderror
                            <br>
                            <input type="submit" value="ارسال" class="btn btn-outline-dark mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection