@extends('layout.default')

@section('content')
    <form action="/item/update form/{{$item->id}}/edit" method="post">
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
       <label>Activity</label><br>
       <input type="text" name="activity" value="{{$item->activity}}"/><br/>
       <label>Description</label><br/>
       <textarea name="description">{{$item->description}}</textarea><br/>
       <input type="submit" value="Submit"/>
    </form>
@stop