@extends('layouts.login')

@section('content')
{!! Form::open(['url' => '/posts/newpost']) !!}
  {{ Form::hidden('id',$user->id) }}
  {{ Form::textarea('posts',null,['placeholder'=>'何を呟こうか...?']) }}
  {{ Form::submit('投稿') }}
  <!-- 投稿ボタンを画像にする -->
  {{ csrf_field() }}
{!! Form::close() !!}

<div>
@foreach($posts as $posts)
  <tr>
  <!-- フォロー機能実装後改善 -->
    <td>{{ $posts->posts }}</td>
  </tr>
  <br>
@endforeach
</div>

@endsection
