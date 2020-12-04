@extends('layouts.master')

@section('title', 'Team')


@section('container')

<!-- Carousel Slider -->
<div class="site-blocks-cover overlay" style="background-image: url(images/img_team.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-md-12 text-center text-md-center" data-aos="fade-down" data-aos-delay="300">
                <h1 class="bg-text-secondary">Squad Manchester United <br>2019/2020</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1 class="text-black">Manchester United Players</h1>
            </div>
        </div>
                {{-- <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Pencet
        </button> --}}

        <!-- Modal -->
        <div class="row">
            @foreach( $player as $pl)
            <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                <div class="player mb-5">
                    <span class="team-number">{{ $pl->nomer_pemain}}</span>
                    <a href="/player/{{ $pl->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{ $pl->id }}">
                        <img src="{{ asset($pl->gambar) }}" alt="Image" class="img-fluid image rounded-circle">

                    </a>
                    <h2>{{ $pl->nama_pemain}}</h2>
                    <span class="position">{{ $pl->position }}</span>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{ $pl->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLongTitle">{{ $pl->nama_pemain }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-md-6 mt-5">
                                <img src="{{ asset($pl->gambar) }}" width="900"  class="card-img" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title text-black">Premier League Static</h4>
                                    <h5 class="card-title">{{ $pl->nama_pemain}}</h5>
                                        <hr>
                                        <h5 class="card-title">Penampilan : {{ $pl->penampilan}}  </h5>
                                        <h5 class="card-title">Goal       : {{ $pl->goal}} </h5>
                                        <h5 class="card-title">Shot       : {{ $pl->shot}} </h5>
                                        <h5 class="card-title">Shot On Target : {{ $pl->shot_ontarget}} </h5>
                                        <h5 class="card-title">Assist         : {{ $pl->assist}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach


{{--
            @foreach( $player as $pl)
            @endforeach --}}




















{{-- ini adalah tutup div colom --}}

        {{-- </div>
    </div>
</div> --}}

<!-- Content of Team -->




        </div>
    </div>
</div>

<!-- Content of Team -->


@endsection
