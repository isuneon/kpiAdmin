@extends('template.layout')

@section('content')


    <div class="box-header">
        <h4 class="box-title">{{ trans('titles.UL') }}</h4>
    </div>

<div class="box-body">
    @if(count($usuarios) > 0)
        <table id="tabla_usuarios" class="display table table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10px">ID</th>
                    <th>{{ trans('forms.NMS') }}</th>
                    <th>Email</th>
                    <th>{{ trans('forms.CNTRY') }}</th>
                    <th>{{ trans('forms.INST') }}</th>
                    <th>{{ trans('forms.OCUP') }}</th>
                    <th>{{ trans('forms.C_DT') }}</th>
                    <th>{{ trans('forms.ACN') }}</th>
                </tr>
            </thead>
            <tbody>
              @foreach($usuarios AS $usuario)
                     <tr role="row" class="odd">
                        <td class="sorting_1">{{$usuario->id}}</td>
                        <td class="mailbox-messages mailbox-name" ><a href="javascript:void(0);" onclick="mostrarficha({{$usuario->id}});"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $usuario->nombres." ".$usuario->apellido }}</a></td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->co_usuario }}</td>
                        <td>{{ $usuario->created_at  }}</td>
                        <td><button class="btn  btn-success btn-xs" onclick="mostrarficha({{ $usuario->id }});" ><i class="fa fa-fw fa-eye"></i>Ver</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       {{ $usuarios->render()}}
         str_replace('/?', '?', $usuarios->render()

    @else
        <br/><div class='rechazado'><label style='color:#FA206A'>{{ trans('forms.NUL') }}</label>  </div>
    @endif
</div>

@endsection
