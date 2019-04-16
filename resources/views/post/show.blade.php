@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="columns is-centered">
    <div class="column is-two-thirds">
      <br>
      <!-- add spacing -->
      <div class="notification">
        <article class="message is-dark" style="box-shadow:3px 3px 5px rgba(0,0,0,0.3);">
          <div class="message-header">
            <p>{{ $post->title }}</p>
            <button class="delete" aria-label="delete"></button>
          </div>
          <div class="message-body">
            {{ $post->description }}
            <!-- links -->
            <br>&nbsp;
            <nav class="level">
              <div class="level-left">
                <div class="level-item">
                  <p class="subtitle is-5">
                    <strong>123</strong> views
                  </p>
                </div>
              </div>
              <div class="level-right">
                {{--
                <p class="level-item"><a>Published</a></p> --}}
                <p class="level-item"><a class="button is-info is-small">share</a></p>
                <p class="level-item"><a class="button is-success is-small">View</a></p>
              </div>
            </nav>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
@endsection