@foreach ($item as $item)
                    <tr>
                      
                      <td>{{$item->email}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->rol}}</td>
                      <td><a href="" onclick="agregar_id_usuario({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#cambiar_password" class="btn btn-secondary"><i class="fa-solid fa-lock-open"></i></a></td>

                      <td><div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="{{$item->id}}"
                        {{$item->activo ? 'checked' : ''}} >
                      </div></td>
                      <td>
                        <a href="{{ route("usuarios.edit",$item->id) }}" data-bs-toggle="modal" data-bs-target="#cambiar_password" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                      </td>
                    </tr>
@endforeach