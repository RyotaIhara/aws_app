<form action="{{route($target . '.destroy', $type->id)}}" method="post">
  @csrf
  @method('delete')
  <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？");'>
</form>
