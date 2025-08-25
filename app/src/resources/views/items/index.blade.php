<html lang=“ja”>
<body>

<h1>■{{$title}}</h1>
{{$items->links()}}
@foreach($items as $item)
    <form method="post" action="{{url('items/delete')}}">
        @csrf
        <table border="1">
            <tr>
                {{-- アカウント分繰り返す--}}

                <td>{{$item['id']}}:{{$item['name']}}<input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="name" value="{{$item->name}}">
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
<form method="post" action={{url('items/create')}}>
    @csrf
    <input type="submit" name="itemsCreate" value="アイテム作成">
</body>
</html>
