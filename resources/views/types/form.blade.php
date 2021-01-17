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
  <label for="name">種別名</label>
  <input type="text" name='type_name' class="form-control" value="{{ $type_name }}">
</div>

<input type='submit' value="送信" class="btn btn-primary">
