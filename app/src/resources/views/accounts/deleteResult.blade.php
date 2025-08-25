<html lang=“ja”>
<body>

<h1>アカウント削除</h1>
<form method="post" action={{url('accounts/show')}}>
    @csrf
    <p>アカウントを削除しました</p>
    <input type="submit" name="index" value="戻る">
</form>
</body>
</html>
