@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection
@section('trainer-dashboard')
    <div class="content">
        
        <div>



            <form action="{{route('user.search')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="row text-center disciplines">
                        @foreach($allDisciplines ?? '' as $discipline)
                            <div class="discipline col-md-6 col-sm-12 text-left">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input my-checkbox"
                                           name="disciplines[]"
                                           id="{{ $discipline->name }}" value="{{$discipline->id}}">
                                    <label class="custom-control-label my-label" for="{{ $discipline->name }}">
                                        <p>{{ $discipline->name }}</p> <img
                                            class="discipline-icon"
                                            src="{{asset("/images/$discipline->name.png")}}"
                                            alt="{{ $discipline->name }}"></label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    @if ($matchedTrainers->count()!=0 && $mesage ?? ''!=null )
                        <div class="alert alert-success card  mb-3 col-lg-12">
                            {!! $mesage !!}
                        </div>
                    @endif

                    <div class="form-row mb-3 col-lg-6">
                        <div class="col">
                            <input type="search" name="city" class="form-control" placeholder="Miasto">
                        </div>
                        <div class="input-group-append flex-center">
                            <button class="btn btn-warning" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @if (Session::has('brak_wprowadzenia'))
        <div class="alert alert-danger card">
            {{ Session::get('brak_wprowadzenia') }}
        </div>
        @endif
        @if($matchedTrainers->count()!=0 && $city!=null)
            @foreach($matchedTrainers as $user)
            <div class="row-cols-1 trainer-item ">
                <div class=" thumbnail">
                    <div class="col100">
                        <h2>
                            <a href="http://127.0.0.1:8000/trainer/{{$user->id}}" title="{{ $user-> firstName }} {{ $user-> secondName }}">{{ $user-> firstName }} {{ $user-> secondName }} </a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col25">
                            <img src="{{url('/images/profile.jpg')}}" alt="brak zdjecia " class="pull-left  trainer-photo " style="height: 20px  width:20px borderiradius:50%">
                        </div>
                        <div class="col75">
                            <div class="row">
                                <div class="col100">
        
                                    <div class="text">
                                        <h3>Miasto: <strong>{{ $user -> city }}</strong></h3>
                                    </div>
                                    <div class="text">
                                    <h2>Specializuje się w treningu:</h2>
                                    </div>
                                    @for ($i = 1; $i < $trenerDisciplines->count(); $i+=2)
                                        @if ($trenerDisciplines[$i-1]==$user->id)
                                            <div class="text">
                                                @foreach($allDisciplines ?? '' as $discipline)
                                                    @if ($discipline->id==$trenerDisciplines[$i])
                                                        <label class="my-label">
                                                            <p>{{ $discipline->name }}</p> <img
                                                                class="discipline-icon"
                                                                src="{{asset("/images/$discipline->name.png")}}"
                                                                alt="{{ $discipline->name }}">
                                                        </label>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                    @endfor
                                    
        
                                    <div class="col100 ">
                                        {{-- @foreach ($collection as $dyscipline) --}}
                                        <div class="text">
                                            <span class="dyscipline ">{{-- {{$dyscipline->name}} --}}</span>
        
                                        </div>
                                       {{--  @endforeach --}}
        
                                    </div>
        
        
                                </div>
        
                            </div>
                        </div>
        
        
                    </div>
        
        
        
                </div>
        
            </div>
            @endforeach
        @elseif($city ?? ''!=null)
            <div class="alert alert-success card">
                <h1>Nie mamy trenerów w tym mieście</h1>
            </div>
        @endif

    </div>
@endsection