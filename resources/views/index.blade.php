@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    @if (Session::get('success'))
    <div class="alert alert-success">
        <br>{{Session::get('success')}}<br>
    </div>
    @endif


    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
        @foreach($tasks as $task)
            <tr>
                    <tr class="text-secondary">
                        <th>Tarea</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                    <tr>
                        <td class="fw-bold">{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->due_date}}</td>
                        <td>
                            <span class="badge bg-warning fs-6">{{$task->status}}</span>
                        </td>
                        <td>
                            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-warning">Editar</a>

                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tr>
                @endforeach
            </table>
            {{$tasks->links()}}
    </div>
</div>
@endsection
