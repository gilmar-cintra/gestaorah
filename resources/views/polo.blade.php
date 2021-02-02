@extends('app')

@section('title')
    Gerenciamento de Polos
@endsection

@section('content')
    <table class="table">
        <tbody>
    @foreach ($polos as $key=>$polo)
        @if ($loop->first)

        @else
        <tr class="table-row">
            <td class="table-img">
                @if($polo->imageUrl)
                    <img src="{{ $polo->imageUrl }}" alt="" width="100" height="100"/>
                @else
                    <img src="https://rah.ong.br/img/logos/logo_foto_profile.jpg" alt="" width="100" height="100"/>
                @endif
            </td>
            <td class="table-text">
                <h6>  {{ $polo->name }}</h6><br>
                <p>{{ $polo->description }}</p>
            </td>
            <td>
                <button type="button" class="btn btn-warning" onclick="editInfo({{$key}})">Editar</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Apagar</button>
            </td>

        </tr>
        @endif

    @endforeach
        </tbody>
    </table>

    

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">Modal title</h2>
                </div>
                <div class="modal-body">
                    <p>conteudo</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script>
        function editInfo(polo){

            $("#myModal").modal();
        }
    </script>
@endsection
