@extends('layout.default')

@section('content')

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
@stop
