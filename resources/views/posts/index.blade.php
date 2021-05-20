@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>
<!-- 投稿フォーム -->
<div id=PostInput>
  <img src="images/dawn.png" alt="icon">
  <form method=post action="/postForm">
    <input type="text" name="new_post" value="何を呟こうか...?">
  </form>
  <img src="images/post.png" alt="button">
</div>
<!-- 投稿一覧 -->
@endsection
