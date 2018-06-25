@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="heading">
            <h3>{{ trans('message.newtask') }}</h3>
        </div>
        <div class="contain">
            {!! Form::open(['url' => 'task', 'id' => 'form_add']) !!}
            <div class="form-group">
                {!! Form::label('name', trans('message.task')) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @include('common.error')
            </div>
            {{ Form::button('<i class="fas fa-plus"></i>  '.trans('message.addtask'), ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="heading">
            <h3>{{ trans('message.currenttask') }}</h3>
        </div>
        <div class="contain">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{ trans('message.task') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->name }}</td>
                        <td>
                            {!! Form::open(['url' => 'task/'.$task->id, 'method' => 'delete', 'id' => 'form_del']) !!}
                                {{ Form::button('<i class="fas fa-trash"></i>  '.trans('message.delete'), ['type' => 'submit', 'class' => 'btn_delete'] )  }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
