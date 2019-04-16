@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <br> 
            <!-- add spacing -->
            <div class="notification">
                <ul> <!-- change to table and reformat to table -->
                @foreach ($posts as $post)
                    <li>
                    <strong>{{ $post->title }}</strong>
                    {{ $post->description }}
                    </li>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
