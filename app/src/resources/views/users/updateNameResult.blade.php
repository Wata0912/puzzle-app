<html lang=“ja”>
<body>

<h1>{{$title}}</h1>
<form method="post" action={{url('users/index')}}>
    @csrf
    <p>名前を変更しました</p>
    <input type="submit" name="create" value="戻る">
</form>
</body>
</html>
