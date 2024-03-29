@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h1>タスク新規作成ページ</h1>
    
    <div class='row'>
        <div>
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                 <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group"></div>
                     {!! Form::label('content', 'タスク:') !!}
                     {!! Form::text('content', null, ['class' => 'form-control']) !!}
            　　</div>
            　　
            　　{!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
        
        　　{!! Form::close() !!}
        
        </div>
    </div>
@endsection