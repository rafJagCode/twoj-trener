<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Zorganizuj event</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <div class="modal-body">
          <form id="modalform" class="form-horizontal" method="POST" action="{{ route('fullcalendar.create' , $user->id) }}">
            @csrf
              <p> Organizator: {{$user->firstName}} {{$user->secondName}} </p>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Tytuł" />
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="start" id="start" placeholder="Data rozpoczęcia" />
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="end" id="end" placeholder="Data zakończenia" />
                  </div>
              </div>
              <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="description" id="description" placeholder="opis" rows="3"></textarea>
              </div>
  
              <div class="form-group">
              <select class="jsmultiple2" name="users[]" id="users" multiple="multiple" placeholder="Dodaj osoby do eventu">
                  @foreach($users as $user)
                  <option value='{{$user->id}}'> {{$user->email}} </option>
                  @endforeach
              </select>
            </div>
             
              <div class="modal-footer">
                <button id="closebtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">Dodaj event</button>
              </div>
  
          </form>
        </div>    
        </div>
      </div>
    </div>  