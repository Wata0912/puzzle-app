<h1>■{{$title}}</h1>

<form method="post" action="{{url('stages/index')}}">
    @csrf
    <table border="1">
        {{-- アカウント分繰り返す--}}
        @foreach($Cells as $Cell)
            <tr>
                <td>Cell:{{$Cell['id']}} X:{{$Cell['x']}} Y:{{$Cell['y']}} オブジェクト:{{$Cell->objects->name}}</td>
            </tr>

        @endforeach
    </table>
</form>
<form method="post" action="{{url('stages/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
