<div class="modal fade" id="rate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="message-title">Oceń Trenera</p>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">
{{--                <form method="POST" action="/rate/{{$user->id}}" enctype="multipart/form-data">--}}

                <form method="POST" action="{{route('rate',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label  class="cols-sm-2 control-label">Ocena</label>
                        <textarea class="form-control" name="stars" id="stars" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label  class="cols-sm-2 control-label">Treść</label>
                        <textarea class="form-control" name="note" id="note=" rows="3"></textarea>
                      </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-rounded btn-orange">Oceń</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
