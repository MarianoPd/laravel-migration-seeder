@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($packages as $package)
        
            <div class="card col-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$package->name}}</h5>
                    <p class="card-text">{{$package->description}}</p>
                    <ul>
                        <li>Destination: {{$package->destination}}</li>
                        <li>Departure: {{$package->departure_from}}</li>
                        <li>Starting: {{$package->start_date}}</li>
                        <li>Ending: {{$package->end_date}}</li>
                        <li>Adults: {{$package->full_price}}$</li>
                        <li>Minors: {{$package->minors_price}}$</li>
                    </ul>
                </div>
            </div>
        
        @endforeach
</div>

</div>

@endsection