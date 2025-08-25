<?php
function escapeHtml($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<html lang="ja">
<head>
    <title>アイテム作成</title>
</head>
<body>
<h1>■アイテム作成</h1>
<form method="post" action="{{url('items/store')}}">
    @csrf
    @if($error_id == 1)
        <p>すでに登録されています</p>
    @endif
    <table border="1">
        <tr>
            <td>アイテム名</td>
            <td><input type="text" name="name" size="30"></td>
        </tr>
    </table>
    <input type="submit" value="作成">
</form>
<form method="post" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>


</body>
</html>
