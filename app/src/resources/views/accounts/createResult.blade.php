<html lang=“ja”>
<body>

<h1>アカウント作成</h1>
<form method="post" action={{url('accounts/show')}}>
    @csrf
    <p>アカウントを作成しました</p>
    <input type="submit" name="create" value="戻る">
</form>
</body>
</html>

