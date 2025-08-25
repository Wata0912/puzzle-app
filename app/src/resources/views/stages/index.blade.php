<h1>■{{$title}}</h1>

@foreach($stages as $stage)
    <form method="post" action="{{url('stages/showCell')}}">
        @csrf
        <table border="1">
            {{-- アカウント分繰り返す--}}

            <tr>
                <td>ステージID:{{$stage['id']}} ステージ名:{{$stage['name']}}
                    <input type="hidden" name="id" value="{{$stage->id}}">
                    <button type="submit">参照</button>
                </td>
            </tr>
        </table>
    </form>
@endforeach
<form method="post" action="{{url('stages/createStage')}}">
    @csrf
    <input type="submit" value="作成">
</form>
<form method="post" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
