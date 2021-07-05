@extends('layouts.login')

@section('content')
{!! Form::open() !!}
  {{ Form::hidden('id',$user->id) }}
  {{ Form::textarea('post',null,['placeholder'=>'何を呟こうか...?']) }}
  {{ Form::submit('投稿') }}
  <!-- 投稿ボタンを画像にする -->
{!! Form::close() !!}

@endsection
