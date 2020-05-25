@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection
@section('business-card-js')
    <script src="{{ asset('/js/apend_icons_to_disciplines.js') }}"></script>
@endsection
<<<<<<< HEAD
<div class="modal fade" id="business-card-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
=======
<div class="modal fade" id="business-card-modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Twoja Wizytówka</h5>
            </div>
            <div class="modal-body">

<<<<<<< HEAD
                <form method="POST" action="{{ route('trainer-dashboard.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Imię" name="firstName" id="firstName"
                                   value="{{$user->firstName}}">
=======
                <form action="{{ route('users.update','testowanie')}}" method="POST">

                @csrf
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" name="firstName" id="firstName" class="form-control" {{-- placeholder="Imię" --}}>
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
<<<<<<< HEAD
                            <input type="text" class="form-control" placeholder="Nazwisko" name="secondName"
                                   id="secondName" value="{{$user->secondName}}">
=======
                            <input type="text" name="secondName" id="secondName" class="form-control" {{-- placeholder="Nazwisko" --}}>
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" name="secondName" id="city" class="form-control" {{-- placeholder="Nazwisko" --}}>
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
                    <div class="form-row mb-3">
                        <div class="col">
<<<<<<< HEAD
                            <input type="phoneNumber" name="phoneNumber" value="{{user->$phoneNumber}}" class="form-control" placeholder="Numer telefonu">
=======
                            <input type="tel" name="phoneNumber" class="form-control" placeholder="Numer telefonu">
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
                        </div>
                    </div>

                    <div class="row text-center disciplines">
<<<<<<< HEAD

                        @foreach($disciplines as $discipline)
=======
                        @foreach($disciplines ?? '' as $discipline)
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30

                            <div class="discipline col-md-6 col-sm-12 text-left">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input my-checkbox" name="disciplines[]"
                                           id="{{ $discipline->name }}" value="{{$discipline->id}}"
                                           @foreach($checkedDisciplines as $ch)
                                           @if($ch->name===$discipline->name))
                                           checked=checked
                                        @endif
                                        @endforeach>
                                    <label class="custom-control-label my-label" for="{{ $discipline->name }}">
                                        <p>{{ $discipline->name }}</p> <img
                                            class="discipline-icon"
                                            src=""
                                            alt="{{ $discipline->name }}"></label>
                                </div>
                            </div>

                        @endforeach

<<<<<<< HEAD
                    </div>
                    <div class="modal-footer">
                        <button type="button" role="button" class="btn btn-secondary" data-dismiss="modal">Zamknij
                        </button>
                        <button type="submit" role="button" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
                    </div>
                </form>

            </div>

        </div>
=======
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                        <button type="submit" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
                    </div>
                </form>

>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
    </div>
</div>
