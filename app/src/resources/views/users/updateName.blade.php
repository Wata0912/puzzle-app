<h1>{{$title}}</h1>

<form method="post" action="{{url('users/edit')}}">
    @csrf
    <table border="1">
        <tr>
            <td>{{$user->id}}:ユーザー名</td>
            <td><input type="text" name="name" size="30" value="{{$user['name']}}"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="{{$user['id']}}">
    <input type="submit" value="変更する">
</form>
<form method="post" action="{{url('users/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
