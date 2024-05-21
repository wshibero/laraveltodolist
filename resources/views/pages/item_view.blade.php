@extends('layout.default')

@section('content')

      <table border = 1>
         <thead>
            <tr>
               <th>ID</th>
               <th>Activity</th>
               <th>Description</th>
               <th>Completed</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            @foreach ($items as $item)
            <tr>
               <td>{{ $item->id }}</a></td>
               <td>{{ $item->activity }}</td>
               <td>{{ $item->description }}</td>
               <td><a href="/item/completed/{{$item->id}}">{{ $item->complete }}</a></td>
               <td><button><a href="/item/update form/{{ $item->id }}">Edit</a></button><button><a href="/item/delete/{{$item->id}}">Delete</a></button</td>
            </tr>
            @endforeach
         </tbody>
      </table>
@stop