<html lang=“ja”>
<body>

<h1>■{{$title}}</h1>

<form method="post" action={{url('logout')}}>
    @csrf
    <input type="submit" name="logout" value="ログアウト">
</form>
<form method="post" action={{url('accounts/show')}}>
    @csrf
    <input type="submit" name="show" value="管理アカウント一覧">
</form>

<form method="post" action={{url('items/create')}}>
    @csrf
    <input type="submit" name="itemsCreate" value="アイテム作成">
</form>
<form method="post" action={{url('items/index')}}>
    @csrf
    <input type="submit" name="index" value="アイテム一覧">

</form>
<form method="post" action={{url('users/index')}}>
    @csrf
    <input type="submit" name="index" value="ユーザー一覧">
</form>

<form method="post" action={{url('stages/index')}}>
    @csrf
    <input type="submit" name="stageIndex" value="ステージ一覧">
</form>

</body>
</html>

