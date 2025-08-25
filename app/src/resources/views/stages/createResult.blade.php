<html lang=“ja”>
<body>

<h1>{{$title}}</h1>
<form method="post" action={{url('stages/index')}}>
    @csrf
    <p>ステージを作成しました</p>
    <input type="submit" name="create" value="戻る">
</form>
</body>
</html>
