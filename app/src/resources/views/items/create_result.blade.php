<html lang=“ja”>
<body>

<h1>アイテム作成</h1>
<form method="post" action={{url('items/index')}}>
    @csrf
    <p>アイテムを作成しました</p>
    <input type="submit" name="create" value="戻る">
</form>
</body>
</html>
