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
    <form action="/item/update form/{{$item->id}}/edit" method="post">
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
       <label>Activity</label><br>
       <input type="text" name="activity" value="{{$item->activity}}"/><br/>
       <label>Description</label><br/>
       <textarea name="description">{{$item->description}}</textarea><br/>
       <input type="submit" value="Submit"/>
    </form>
 </body>
</html>