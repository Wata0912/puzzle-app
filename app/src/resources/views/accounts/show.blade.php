<html lang=“ja”>
<body>

<h1>■{{$title}}</h1>
@foreach($accounts as $account)
    <form method="post" action="{{url('accounts/delete')}}">
        @csrf
        <table border="1">
            <tr>
                {{-- アカウント分繰り返す--}}

                <td>{{$account['id']}}:{{$account['name']}}<input type="hidden" name="id" value="{{$account->id}}">
                    <input type="hidden" name="name" value="{{$account->name}}">
                    <button type="submit">削除</button>
                </td>

            </tr>
        </table>
    </form>
@endforeach
<form method="post" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
<form method="post" action={{url('accounts/create')}}>
    @csrf
    <input type="submit" name="accountCreate" value="新規アカウント作成">
</body>
</html>
