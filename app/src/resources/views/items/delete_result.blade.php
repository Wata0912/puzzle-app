<html lang=“ja”>
<body>

<h1>アイテム削除</h1>
<form method="post" action={{url('items/index')}}>
    @csrf
    <p>アイテムを削除しました</p>
    <input type="submit" name="index" value="戻る">
</form>
</body>
</html>
