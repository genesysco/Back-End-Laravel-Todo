@extends('layouts.layout')

@section('title','Todos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-4">تسک ها</h4>
                    <a href="{{ route('creator') }}" class="btn btn-outline-dark">ایجاد تسک جدید</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        تسک ها
                    </div>
                    <ul class="list-group list-group-flush">
                            
                        @foreach( $todos as $todo)
                            <li class="list-group-item d-flex justify-content-between">
                                {{$todo->title}}
                                <div class="d-flex">
                                    <a class="btn btn-dark" href="{{ route('shower', ['id' => $todo->id ]) }}">مشاهده</a>
                                    
                                    <form action="{{ route('deleter',['id'=>$todo->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="حذف" class="btn btn-danger" data-confirm-delete="true">
                                    </form>

                                    @if($todo->compeleted == 0)
                                        <a class="btn btn-outline-info" href="{{ route('confirmer', ['id' => $todo->id ]) }}">انجام شد</a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                            
                    </ul>
                </div>
            </div>
            {{ $todos->links() }}
        </div>
    </div>
@endsection