





 
@extends('layouts.app')


@section('content')
    <div class="content">
       <h1>Services</h1>
      <ul>
        @foreach($data as $item)

      <li>{{ $item }}</li>


    @endforeach

      </ul>
    </div>
@endsection