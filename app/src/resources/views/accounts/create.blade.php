<?php
function escapeHtml($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<html lang="ja">
<head>
    <title>{{$title}}</title>
</head>
<body>
<h1>■アカウント削除</h1>
<form method="post" action="{{url('accounts/store')}}">
    @csrf

    <table border="1">
        <tr>
            <td>アカウント名</td>
            <td><input type="text" name="name" size="30"></td>
            <td>パスワード</td>
            <td><input type="text" name="password" size="30"></td>
        </tr>
    </table>
    <input type="submit" value="作成">
</form>
<form method="post" action="{{url('accounts/show')}}">
    @csrf
    <input type="submit" value="アカウント一覧へ">
</form>
<form method="post" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="管理一覧へ">
</form>


</body>
</html>
