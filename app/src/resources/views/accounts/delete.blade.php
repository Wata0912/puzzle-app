<html lang=“ja”>
<body>

<h1>{{$title}}</h1>
<form method="post" action={{url('accounts/onDelete')}}>
    @csrf
    <p>{{$id}}:{{$name}}を削除しますか？</p>
    <input type="hidden" name="id" value={{$id}}>
    <input type="hidden" name="name" value="{{$name}}">
    <button type="submit">削除</button>
</form>
<form method="post" action="{{url('accounts/show')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
</body>
</html>
