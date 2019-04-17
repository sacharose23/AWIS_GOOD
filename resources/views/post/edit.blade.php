@extends('layouts.app')

@section('content')
<div class="container">
  <br>
  <div class="columns is-centered">
    <div class="column is-two-thirds">
      <div class="card">
        <div class="card-content">
          <form action="/post" method="post">
            @csrf
            <div class="columns is-centered">
              <div class="column">
                <div class="field">
                  <label class="label">Event Title</label>
                  <div class="control">
                    <input class="input" name="title" type="text" placeholder="Text input" value="{{$post->title}}">
                  </div>
                </div>
                <!-- <div class="field">
                    <div class="columns is-centered">
                      <div class="control column is-half">
                        <label class="label">Event Start Date</label>
                        <input class="input" name="event_start_date" type="date" placeholder="Text input">
                      </div>
                      <div class="control column is-half">
                        <label class="label">Event End Date</label>
                        <input class="input" name="event_end_date" type="date" placeholder="Text input">
                      </div>
                    </div>
                  </div> -->
                <div class="field">
                  <label class="label">Event Description</label>
                  <div class="control">
                    <textarea class="textarea" name="description" placeholder="e.g. Hello world">{{$post->description}}</textarea>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Event Address</label>
                  <div class="control">
                    <input class="input" name="address" type="text" placeholder="123 Unicorn Lane, Rainbow, CA 12345" value="{{$post->address}}">
                  </div>
                </div>
                <div class="field">
                  <div class=c ontrol>
                    <label class="label">Sign Up Deadline</label>
                    <input class="input" name="deadline" type="date" placeholder="Text input">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Event Link</label>
                  <div class="control">
                    <input class="input" name="url" type="text" placeholder="URL" value="{{$post->url}}">
                  </div>
                </div>
                <div class="columns">
                  <div class="column is-half">
                    <label class="label">Number of Volunteer Hours</label>
                    <input class="input" name="hours" type="text" placeholder="Please type in an integer value." value="{{$post->hours}}">
                  </div>
                  <div class="column is-half">
                    <label class="label">Number of Volunteers Needed</label>
                    <input class="input" name="num_volunteers" type="text" placeholder="Please type in an integer value." value="{{$post->num_volunteers}}">
                  </div>
                </div>
                <div class="columns">
                  <div class="column is-one-third">
                    <div class="field">
                      <label class="label">Recurring Status</label>
                      <div class="control" name="recurring_status">
                        <div class="select">
                          <select value="{{$post->recurring_status}}">
                              <option>No</option>
                              <option>Ongoing</option>
                              <option>Weekly</option>
                              <option>Monthly</option>
                              <option>Annually</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column is-one-third">
                    <div class="field">
                      <label class="label">Gender Specific</label>
                      <div class="control" name="gender_specific">
                        <div class="select">
                          <select value="{{$post->gender_specific}}">
                              <option>Male</option>
                              <option>Female</option>
                              <option>Any</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column is-one-third">
                    <div class="field">
                      <div class="control" name="members_only">
                        <label class="label">Members Only</label>
                        <label class="radio">
                            <input type="radio" name="members_only" value="1">
                            Yes
                          </label>
                        <label class="radio">
                            <input type="radio" name="members_only" value="0">
                            No
                          </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Organization Name</label>
                  <div class="control">
                    <input class="input" name="org_name" type="text" placeholder="Text input" value="{{$post->org_name}}">
                  </div>
                </div>
                <!-- <div class="field">
                    <label class="label">Affiliated Organizations</label>
                    <div class="control">
                      <input class="input" name="affiliated_orgs" type="text" placeholder="Text input" value="{{$post->affiliated_orgs}}">
                    </div>
                  </div> -->
                <div class="field">
                  <label class="label">Contact Name</label>
                  <div class="control">
                    <input class="input" name="spoc" type="text" placeholder="Text input" value="{{$post->spoc}}">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Contact Phone</label>
                  <div class="control">
                    <input class="input" name="spoc_phone" type="text" placeholder="949-867-5309" class="{{$post->spoc_phone}}">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Contact Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" name="spoc_email" type="email" placeholder="Email input" value="{{$post->spoc_email}}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                      </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                      </span>
                  </div>
                  <p class="help is-danger">This email is invalid</p>
                </div>
                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-link">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>      
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection
