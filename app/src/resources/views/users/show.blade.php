<h2>{{$user->id}}:{{ $user->name }} さんの所持アイテム一覧</h2>

<form method="post" action="{{url('users/show')}}">
    @csrf
    <table border="1">
        <tr>
            <td>
                @foreach ($user->items as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            </td>
        </tr>
    </table>
</form>
<form method="post" action="{{url('users/updateName')}}">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="submit" value="情報編集">
</form>

<form method="post" action="{{url('users/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
