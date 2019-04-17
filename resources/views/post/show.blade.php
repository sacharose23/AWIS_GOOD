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
            <strong>Description:</strong> <br>{{ $post->description }}
            <hr>
            <h2 class="title is-4">Event Details:</h2>
            <strong>Starts:</strong> {{ $post->event_start_date }}<br>
            <strong>Ends:</strong> {{ $post->event_end_date }}<br>
            <strong>Location</strong>{{ $post->address }} <br>
            <strong>Deadline</strong>{{ $post->deadline }} <br>
            <strong>Url</strong>{{ $post->url }} <br>
            <strong>Hours</strong>{{ $post->hours }} <br>
            <strong>Number of Volunteers Needed</strong>{{ $post->num_volunteers }} <br>
            <strong>Gender</strong>{{ $post->gender_specific }} <br>
            <strong>Membership Required</strong>{{ $post->members_only }} <br>
            <hr>
            <h2 class="title is-4">Contact info:</h2>
            <strong>Organization Name</strong> {{ $post->org_name }} <br>
            <strong></strong> {{ $post->affiliated_orgs }} <br>
            <strong>Event Organizer</strong> {{ $post->spoc }} <br>
            <strong>Phone:</strong> {{ $post->spoc_phone }} / 
            <strong>Email:</strong> {{ $post->spoc_email }} <br>
  
            <br>
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
              </div>
            </nav>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
@endsection