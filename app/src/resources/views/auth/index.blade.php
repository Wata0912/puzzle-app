<?php

function escapeHtml($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>
<html lang="ja">
@extends('layouts.app')
@section('title','ログイン画面')
@section('body')

    <form method="post" action={{url('login')}}>
        @csrf
        @if($error_id == 1)
            <p>名前又はパスワードが間違っています</p>
        @endif
        <label>
            <input name="name" value="<?php
        if (isset($_POST['name'])) {
            echo escapeHtml($_POST['name']);
        }
        ?>"></label><br>
        <label>
            <input name="password" value="<?php
                                       if (isset($_POST['password'])) {
                                           echo escapeHtml($_POST['password']);
                                       }
                                       ?>">
            <input type="submit" name="login" value="ログイン">
        </label>

    </form>
@endsection
</html>



