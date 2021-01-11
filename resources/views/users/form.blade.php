<div class="form-group">
  <label for="name">ユーザー名</label>
  <input type="text" name='name' class="form-control" value="{{ $name }}">
</div>

<div class="form-group">
  <label for="email">メールアドレス</label>
  <input type="text" name='email' class="form-control" value="{{ $email }}">
</div>

<div class="form-group">
  <label for="password">パスワード</label>
  <input type="password" name='password' class="form-control">
</div>

<div class="form-group">
  <label for="password_confirmation">パスワード確認</label>
  <input type="password" name='password_confirmation' class="form-control">
</div>

<input type='submit' value="送信" class="btn btn-primary">
