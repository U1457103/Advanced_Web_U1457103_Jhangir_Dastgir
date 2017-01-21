@extends('layout')

@section('content')

  <h1>Are They Good? Are They Bad?</h1>

  <p>
   What do you think!!! Click On The Singers And Write Your Comments!!
  </p>




    <form method="POST">
      {{csrf_field()}}
      <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="search" placeholder="Search For The Singer">
        <span class="input-group-btn">
            <button class="btn btn-default-sm" type="submit"></button>

        </span>
    </div>
  </form>




@foreach ($songs as $song)

    <div>
    <a role="button" class="btn btn-sucess" href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

@endforeach



@stop
