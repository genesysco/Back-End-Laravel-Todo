@extends('layouts.layout');

@section('title','Updating Todo page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                @includeIf('errors')
                <div class="card">
                    <div class="card-header">
                    بروزرسانی تسک
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updater',['id' => $id->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <label for="title">
                                عنوان
                            </label>
                            <input type="text" class="form-control 
                            @error('title') border-danger @enderror" id="title" name="title" value="{{$id->title}}">
                            @error('title')
                                <span class="text-danger">فیلد عنوان نباید خالی باشد</span>
                            @enderror
                            <br>
                            <label for="description">
                                توضیحات
                            </label>
                            <textarea class="form-control 
                            @error('description') border-danger @enderror" id="description" name="description">{{$id->description}}</textarea>
                            @error('description')
                                <span class="text-danger">فیلد توضیحات نباید خالی باشد</span>
                            @enderror
                            <br>
                            <input type="submit" value="بروزرسانی" class="btn btn-outline-primary mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection