@extends('layouts.layout')

@section('title','Todos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <h4 class="mb-4">{{$id->title}}</h4>
                <div class="card">
                    <div class="card-header">
                        توضیحات
                    </div>
                    <div class="card-body">
                        {{ $id->description }}
                    </div>
                    <hr>
                    <div>
                        <a href="{{route('changer',['id' => $id->id])}}" class="btn btn-outline-primary m-3">تغییر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection