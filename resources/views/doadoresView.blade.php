<section>
    <form action="{{url('/doador/inserir')}}" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="doador" name="txNomeDoador" />
        </div>

        <div>
            <input type="submit" value="Salvar"  />
        </div>
    </form>
</section>

<section>
    <div>
        <h2>doadores</h2>
    </div>
    <table border="1">
        @foreach($doadores as $doador)
        <tr>
            <td>
                {{$doador->idDoador}}
            </td>

            <td>
                {{$doador->nomeDoador}}
            </td>

            <td>
            <a href="/doadores-view/{{$doador->idDoador}}">
                excluir
            </a> 
            </td>
        </tr>
        @endforeach
    </table>
</section>
