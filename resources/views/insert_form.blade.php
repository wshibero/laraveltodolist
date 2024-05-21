<!doctype html>
<html>
  <head>
    <title>Create a new Item</title>
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
    <div>
      <form action="/item/create form/new" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
        <label>activity</label><br/>
        <input type="text" name="activity" placeholder="enter the activity"/><br/>
        <label>description</label><br/>
        <textarea name="description" placeholder="enter the description"></textarea><br/>
        <label>complete</label><br/>
        <select name="complete">
          <option value="incomplete">incomplete</option>
          <option value="complete">complete</option>
        </select><br/>
        <input type="submit" value="submit"/>
      </form>
    </div>
  </body>
</html>