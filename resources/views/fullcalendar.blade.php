@extends('layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('css/jquery.datetimepicker.min.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
@section('content')
<!-- Button trigger modal -->
<button id="imp" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Modal
</button>
<button id="imp2" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatemodal">
  Modal2
</button>

 <!-- Modal -->
 <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="updatemodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="editModal">Edytuj event</h5>
         
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        <div id="eventinfo">
          <h5> <b>Organizator: </b> <p>{{$user->firstName}} {{$user->secondName}} </p></h5>
          <b>Nazwa eventu:</b> <p id="ititle"></p>
          <b>Start eventu:</b><p id="istart"></p>
          <b>Koniec eventu:</b><p id="iend"></p>

        </div>
        
        <form id="emodalform" class="form-horizontal" method="POST" action="{{ route('fullcalendar.update' , $user->id) }}">
          @csrf
           
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="title" id="etitle" placeholder="Tytuł" />
              </div>
            </div>
            <input style="display:none" type="text" class="form-control" name="id" id="eventId" placeholder="eventId" />
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="start" id="estart" placeholder="Data rozpoczęcia" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="end" id="eend" placeholder="Data zakończenia" />
                </div>
            </div>
            <div class="form-group">
              <label for="description">Opis</label>
              <textarea class="form-control" name="description" id="edescription" placeholder="opis" rows="3"></textarea>
            </div>

            <div class="form-group">
            <label for="eusers">Dodaj nowe osoby</label>
            <select class="jsmultiple2" name="users[]" id="eusers" multiple="multiple" placeholder="Dodaj osoby do eventu">
                @foreach($users as $usr)
                @if($user->id != $usr->id)
                <option value='{{$usr->id}}'> {{$usr->email}} </option>
                @endif
                @endforeach
            </select>
          </div>
           
            <div class="modal-footer">
              <button id="closebtn2" type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="submit" class="btn btn-secondary">Edytuj event</button>
            </div>
        </form>
        <form id="dmodalform"  class="form-horizontal" method="POST" action="{{ route('fullcalendar.delete' , $user->id) }}">
          @csrf
          <input style="display:none" type="text" class="form-control" name="deleteEventId" id="deleteEventId" placeholder="deleteEventId" />
          <button style="position: relative; bottom: 50px;" type="submit" id="deletebtn"  type="button" class="btn btn-danger">
            Usuń event
          </button>
        </form>
        <form id="lmodalform"  class="form-horizontal" method="POST" action="{{ route('fullcalendar.leave' , $user->id) }}">
          @csrf
          <input style="display:none" type="text" class="form-control" name="leaveEventId" id="leaveEventId" placeholder="leaveEventId" />
          <button style="position: relative;" type="submit" id="leavebtn"  type="button" class="btn btn-danger">
            Opuść event
          </button>
        </form>
      </div>    
      </div>
    </div>
  </div>  


@include('fullcalendar.modal')

<div class="container margbt">
    <div class="response"></div>
    <div id='calendar'></div>  
</div>


</body>
@include('fullcalendar.scripts')
@endsection