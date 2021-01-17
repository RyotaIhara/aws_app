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
  <label for="user_id">ユーザー名</label>
  <select name="user_id" class="form-control">
    @foreach($users as $user)
      <option value="{{ $user -> id }}">{{ $user -> user_name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="type_id">種別</label>
  <select name="type_id" class="form-control">
    @foreach($types as $type)
      <option value="{{ $type -> id }}">{{ $type -> type_name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="amount">金額（単位：円）</label>
  <input type="number" name='amount' class="form-control" value="{{ $amount }}">
</div>

<div class="form-group">
  <label for="note">備考</label>
  <textarea name='note' class="form-control" rows="3">{{ $note }}</textarea>
</div>

<input type='submit' value="送信" class="btn btn-primary">
