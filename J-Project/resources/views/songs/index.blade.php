@extends('layout')

@section('content')

<h2>Search for the Singer</h2>

    <form method="POST">
      {{csrf_field()}}
      <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="search" placeholder="Search For The Singer">
        <span class="input-group-btn">
            <button class="btn btn-default-sm" type="submit"></button>

        </span>
    </div>
  </form>


  <p>Are They Good? Are They Bad?</p>

  <p>
   What do you think!!! Click On The Singers And Write Your Comments!!
  </p>




@foreach ($songs as $song)

    <div>
    <a role="button" class="btn btn-sucess" href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

@endforeach



@stop
