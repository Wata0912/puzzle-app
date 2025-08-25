<html lang=“ja”>
<body>

<h1>■{{$title}}</h1>
{{$users->links()}}

@foreach($users as $user)
    <form method="post" action="{{url('users/show')}}">
        @csrf
        <table border="1">
            <tr>
                {{-- アカウント分繰り返す--}}

                <td>ID:{{$user['id']}} ユーザー名:{{$user['name']}} クリアレベル{{$user['level']}}<input type="hidden"
                                                                                                         name="id"
                                                                                                         value="{{$user->id}}">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="submit">参照</button>
                </td>
            </tr>
        </table>
    </form>
@endforeach

<form method="post" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>

</body>
</html>

