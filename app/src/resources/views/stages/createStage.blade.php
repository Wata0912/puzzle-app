<h1>■{{$title}}</h1>

<form method="post" action="{{url('stages/store')}}">
    @csrf
    <table border="1">
        <tr>
            <td>ステージ名<input type="text" name="name" size="30"></td>
        </tr>
        <tr>
            @for($i = 0; $i < 16 ; $i++)
                {{$i +1}}:
                <select name="fruits[]">
                    @foreach($options as $opt)

                        <option value="{{ $opt }}">{{ $opt }}</option>
                    @endforeach
                </select>
            @endfor

        </tr>
        <tr>
            <button type="submit">作成</button>
        </tr>

    </table>
</form>
<form method="post" action="{{url('stages/index')}}">
    @csrf
    <input type="submit" value="戻る">
</form>

