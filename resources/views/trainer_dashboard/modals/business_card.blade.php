@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection


<div class="modal fade" id="business-card-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Twoja Wizytówka</h5>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('trainer-dashboard.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Imię" name="firstName"
                                   id="firstName"
                                   value="{{$user->firstName}}">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nazwisko" name="secondName"
                                   id="secondName" value="{{$user->secondName}}">
                        </div>
                    </div>


                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" name="phoneNumber" id="phoneNumber"
                                   class="form-control" placeholder="Numer telefonu" value="{{$user->phoneNumber}}">
                        </div>
                    </div>


                    <div class="form-row mb-3">
                        <div class="col">
                            <select id="citySelector" class="form-control selectpicker" data-live-search="true"
                                    data-style="btn-selection" name="city" id="city" value="{{$user->city}}">

                                @foreach($cities ?? '' as $city)
                                    <option class="city-choice"
                                            data-tokens="{{ $city['city'] }}">{{ $city['city'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row text-center disciplines">
                        @foreach($disciplines as $discipline)
                            <div class="discipline col-md-6 col-sm-12 text-left">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input my-checkbox"
                                           name="disciplines[]"
                                           id="{{ $discipline->name }}" value="{{$discipline->id}}"
                                           @foreach($checkedDisciplines as $ch)
                                           @if($ch->name===$discipline->name))
                                           checked=checked
                                        @endif
                                        @endforeach>
                                    <label class="custom-control-label my-label" for="{{ $discipline->name }}">
                                        <p>{{ $discipline->name }}</p> <img
                                            class="discipline-icon"
                                            src="{{asset("/images/$discipline->name.png")}}"
                                            alt="{{ $discipline->name }}"></label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="modal-footer">
                        <button type="button" role="button" class="btn btn-secondary" data-dismiss="modal">Zamknij </button>
                        <button type="submit" role="button" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
