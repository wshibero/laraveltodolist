<html>
   <head>
      <title>View Student Records</title>
   </head>

   <body>
      <div>
         <table>
           <tr>
              <td><a href="/">Home</a</td>
              <td><a href="/all/items">All items</a></td>
              <td><a href="/item/create form">New Item</a></td>
              <td><a href="/about">About</a></td>
              <td><a href="/welcome php">Laravel docs</a></td>
           </tr>
         </table>
      </div>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Activity</td>
            <td>Description</td>
            <td>Completed</td>
         </tr>
         @foreach ($items as $item)
         <tr>
            <td><a href="/item/update form/{{ $item->id }}">{{ $item->id }}</a></td>
            <td>{{ $item->activity }}</td>
            <td>{{ $item->description }}</td>
            <td><a href="/item/completed/{{$item->id}}">{{ $item->complete }}</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>