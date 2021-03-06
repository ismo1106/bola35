@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="game-league">
            <div class="col-lg-3"> 
                <div class="panel panel-default poin">
                    <div class="panel-body play_game">
                        <a class="kuisplay" href="/play_game"> Play Now </a> 
                    </div>
                </div>    
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default poin">
                    <div class="panel-body poinskor">
                        <h3 class="j-poin">Poin Saya</h3>
                        <span class="points">0</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default poin">
                    <div class="panel-body poinskor">
                        <h3 class="j-poin">Social Media Share</h3>
                        <span class="points">0</span> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default poin">
                    <div class="panel-body poinskor">
                        <h3 class="j-poin">Peringkat Saya</h3>
                        <span class="points">67254</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <p class="text-center s-media"><b>Share Facebook dan Twitter sebagai pendukung penentuan kemenangan untuk jumlah poin yang sama.</b></p>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel board fixture">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table game summary">
                            <thead>
                                <tr>
                                    <th width="117">Tanggal</th>
                                    <th width="106">Partai</th>
                                    <th width="68">Skor Pertandingan</th>
                                    <th width="109">Poin Tebakkan Skor</th>
                                    <th width="104">Poin Tebakkan Hasil</th>
                                    <th width="73">Game Poin</th>
                                </tr>
                            </thead>
                            @foreach($home as $home)
                            <tbody>
                                <tr>
                                    <td >{{ $home->tanggal }}</td>
                                    <td class="match"> {{ $home->partai }} </td>
                                    <td> {{ $home->skor_pertandingan }} </td>
                                    <td class="tt"> {{ $home->poin_tebakan_skor }} </td>
                                    <td class="tt"> {{ $home->poin_tebakan_hasil }} </td>
                                    <td class="tt"> {{ $home->game_poin }} </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="iframe-banner">
                <iframe src="https://kuis.football5star.com/ads/gp_banner_358x400/index.html" height="402" width="361" frameBorder="0" scrolling="no" style="border:none;"></iframe>
            </div>
      
            <div class="panel board">
                <div class="panel-body">
                    <div>
                        <select style="width: 100%; padding: 5px;" onchange="showstandings(this.value);">
                            @foreach($masterliga as $masterliga)
                                <option value="ENG_1"> {{ $masterliga -> liga_name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="table-responsive" id="ENG_1">
                        <table class="table match">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="text-left">TIM</th>
                                    <th class="text-left">GP.</th>
                                    <th class="text-left">W</th>
                                    <th class="text-left">D</th>
                                    <th class="text-left">L</th>
                                    <th class="text-left">PT</th>
                                </tr>
                            </thead>
                            @foreach($masterteam as $masterteams)
                            <tbody>
                                <tr>
                                    <td class="text-left" style="padding:5px;"> <img src="/{{$masterteams->logo}}" class="logoteam"> </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->team_name}} </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->gp}} </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->w}} </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->d}} </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->l}} </td>
                                    <td class="text-left" style="padding:5px;"> {{$masterteams->pt}} </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row top_news">
        <div class="col-md-2">
            <a href="" class="thumbnail">
                <img src="..." alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                </div>
            </a> 
        </div>
    </div>
</div>
</div>
<br>

@endsection
