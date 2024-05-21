@extends('layout.default')

@section('content')

      <table class="data-table">
         <thead>
            <tr>
               <th class="data-table-items">ID</th>
               <th class="data-table-items">Activity</th>
               <th class="data-table-items">Description</th>
               <th class="data-table-items">Completed</th>
               <th class="data-table-items"></th>
               <th class="data-table-items"></th>
            </tr>
         </thead>
         <tbody>
            @foreach ($items as $item)
            <tr>
               <td class="data-table-items">{{ $item->id }}</a></td>
               <td class="data-table-items">{{ $item->activity }}</td>
               <td class="data-table-items">{{ $item->description }}</td>
               <td class="data-table-items complete-row">
                  <a class="complete" href="/item/completed/{{$item->id}}">
                     {{ $item->complete }}
                  </a>
               </td>
               <td class="data-table-items edit-row">
                  <button class="editbtn">
                     <a href="/item/update form/{{ $item->id }}">
                        Edit
                     </a>
                  </button>
               </td>
               <td class="data-table-items delete-row">
                  <button class="deletebtn">
                     <a href="/item/delete/{{$item->id}}">
                        Delete
                     </a>
                  </button>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
@stop