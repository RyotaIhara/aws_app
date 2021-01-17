@if (count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<div class="form-group">
  <label for="name">ユーザー名</label>
  <input type="text" name='user_name' class="form-control" value="{{ $user_name }}">
</div>

<div class="form-group">
  <label for="email">メールアドレス</label>
  <input type="text" name='email' class="form-control" value="{{ $email }}">
</div>

<div class="form-group">
  <label for="password">パスワード　※英数字8文字以上で入力してください</label>
  <input type="password" name='password' class="form-control">
</div>

<div class="form-group">
  <label for="password_confirm">パスワード確認</label>
  <input type="password" name='password_confirm' class="form-control">
</div>

<input type='submit' value="送信" class="btn btn-primary">
