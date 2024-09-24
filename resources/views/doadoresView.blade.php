<table border="1">
    @foreach($doadores as $doador)
    <tr>
        <td>
            {{$doador->idDoador}}
        </td>

        <td>
            {{$doador->nomeDoador}}
        </td>
    </tr>
    @endforeach
</table>