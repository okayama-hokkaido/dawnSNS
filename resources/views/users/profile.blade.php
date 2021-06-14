@extends('layouts.login')

@section('content')

{!! Form::open(['url' => '/users/update']) !!}

<img src="images/dawn.png" id="profile-icon"></img>

{{ Form::hidden('id',$user->id) }}

{{ Form::label('UserName') }}
{{ Form::text('username',$user['username'],['class' => 'input']) }}
<br>
{{ Form::label('MailAddress') }}
{{ Form::text('mail',$user['mail'],['class' => 'input']) }}
<br>
{{ Form::label('Password') }}
{{ Form::text('password',$user['password'],['readonly']) }}
<br>
{{ Form::label('new Password') }}
{{ Form::text('passwordConfirm',null,['class' => 'input']) }}
<br>
{{ Form::label('Bio') }}
{{ Form::textarea('bio',$user['bio'],['class' => 'input']) }}
<br>
{{ Form::label('Icon Image') }}
{{ Form::file('images') }}
<br>
{{ Form::submit('更新') }}
{!! Form::close() !!}

@endsection
