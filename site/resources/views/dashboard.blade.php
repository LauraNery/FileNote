@extends('layouts.app')

@section('content')
    @forelse($notes as $key => $note) 
       <div class= "card border border-2 shadow p-3">

           <div class="card-header"></div>
           <div class="card-body"></div>
        </div>

       @empty
    @endforelse
@endsection
