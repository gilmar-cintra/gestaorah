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
                    <h2 class="modal-title" id="editFormTitle">Modal title</h2>
                </div>
                <div class="modal-body">
                   <div id="formEdit">

                   </div>
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

            var polos = @json($polos);

            $('#editFormTitle').empty();
            $('#editFormTitle').append(polos[polo]["name"]);

            html =
                '<div class="form-group"><label>Nome</label><input type="text" class="form-control" name="name" value="'+polos[polo]["name"]+'"></div>'+
                '<div class="form-group"><label>Representante</label><input type="text" class="form-control" name="representative" value="'+polos[polo]["representative"]+'"></div>'+
                '<div class="form-group"><label>Telefone</label><input type="text" class="form-control" name="phone" value="'+polos[polo]["phone"]+'"></div>'+
                '<div class="form-group"><label>Celular</label><input type="text" class="form-control" name="cel" value="'+polos[polo]["cel"]+'"></div>'+
                '<div class="form-group"><label>Whatsapp</label><input type="text" class="form-control" name="whatsapp" value="'+polos[polo]["whatsapp"]+'"></div>'+
                '<div class="form-group"><label>E-mail</label><input type="text" class="form-control" name="email" value="'+polos[polo]["email"]+'"></div>'+
                '<div class="form-group"><label>Site</label><input type="text" class="form-control" name="site" value="'+polos[polo]["site"]+'"></div>'+
                '<div class="form-group"><label>Facebook</label><input type="text" class="form-control" name="facebook" value="'+polos[polo]["facebook"]+'"></div>'+
                '<div class="form-group"><label>Instagram</label><input type="text" class="form-control" name="instagram" value="'+polos[polo]["instagram"]+'"></div>'+
                '<div class="form-group"><label>Rua/Avenida/Viela</label><input type="text" class="form-control" name="address" value="'+polos[polo]["address"]+'"></div>'+
                '<div class="form-group"><label>Número/Complemento</label><input type="text" class="form-control" name="number" value="'+polos[polo]["number"]+'"></div>'+
                '<div class="form-group"><label>Vila/Bairro</label><input type="text" class="form-control" name="neighborhood" value="'+polos[polo]["neighborhood"]+'"></div>'+
                '<div class="form-group"><label>Cidade</label><input type="text" class="form-control" name="city" value="'+polos[polo]["city"]+'"></div>'+
                '<div class="form-group"><label>Estado</label><input type="text" class="form-control" name="state" value="'+polos[polo]["state"]+'"></div>'+
                '<div class="form-group"><label>CEP</label><input type="text" class="form-control" name="zipcode" value="'+polos[polo]["zipcode"]+'"></div>'+
                '<div class="form-group"><label>Latitude</label><input type="text" class="form-control" name="latitude" value="'+polos[polo]["latitude"]+'"></div>'+
                '<div class="form-group"><label>Longitude</label><input type="text" class="form-control" name="longitude" value="'+polos[polo]["longitude"]+'"></div>'+
                '<div class="form-group"><label>Descrição</label><textarea type="text" class="form-control" name="description" rows="10">'+polos[polo]["description"]+'</textarea></div>';






            $('#formEdit').empty();
            $('#formEdit').append(html);

            /*
                       $('#ListEmail').append(
                           //cria um elemento li e põe o texto como o valor do input
                           $('<li>').text(polos[polo]["id"]);

                          $('<li>').text(polos[polo]["imageUrl"])
                          $('<li>').text(polos[polo]["address"])
                          $('<li>').text(polos[polo]["number"])
                          $('<li>').text(polos[polo]["neighborhood"])
                          $('<li>').text(polos[polo]["city"])
                          $('<li>').text(polos[polo]["state"])
                          $('<li>').text(polos[polo]["zipcode"])
                          $('<li>').text(polos[polo]["latitude"])
                          $('<li>').text(polos[polo]["longitude"])

            )

             */

            $("#myModal").modal();
        }
    </script>
@endsection
