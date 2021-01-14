<div class="form-group">
  <label for="user_id">ユーザー名</label>
  <select name="user_id" class="form-control">
    @foreach($users as $user)
      <option value="{{ $user -> id }}">{{ $user -> name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="type_id">種別</label>
  <select name="type_id" class="form-control">
    @foreach($types as $type)
      <option value="{{ $type -> id }}">{{ $type -> name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="amount">金額</label>
  <input type="text" name='amount' class="form-control" value="{{ $amount }}">
</div>

<div class="form-group">
  <label for="note">備考</label>
  <input type="text" name='note' class="form-control" value="{{ $note }}">
</div>

<input type='submit' value="送信" class="btn btn-primary">
