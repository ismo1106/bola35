@extends('crudbooster::admin_template')

@section('content')
<link rel="stylesheet" href="{{ asset('plugin/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" />
<script type="text/javascript" src="{{ asset('plugin/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script>
$(function () {
    $('#date_match').datetimepicker({
        autoclose : true
    });
    
    $('#id_liga').change(function (){
        var id_liga = $(this).val();
        $('#id_team_home').html('<option>Loading...</option>');
        $.get("{{ url('/getteam') }}",{
            txtIdLiga : id_liga
        }, function(response){
            $('#id_team_home').html('<option>** Select Team Home</option>');
            $.each(response,function(i,obj) {
                $("<option value='"+obj.value_select+"'>"+obj.label_select+"</option>").appendTo("#id_team_home");
            });
            $('#id_team_home').trigger('change');
        });
        
        $('#id_team_away').html('<option>Loading...</option>');
        $.get("{{ url('/getteam') }}",{
            txtIdLiga : id_liga
        }, function(response){
            $('#id_team_away').html('<option>** Select Team Home</option>');
            $.each(response,function(i,obj) {
                $("<option value='"+obj.value_select+"'>"+obj.label_select+"</option>").appendTo("#id_team_away");
            });
            $('#id_team_away').trigger('change');
        });
    });
});
</script>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Match
            </div>
            <form class="form-horizontal" method="post" action="{{ url('/storematch') }}">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 text-right">Datetime Match</label>
                        <div class="col-md-6">
                            <input name="date_match" id="date_match" type="text" class="form-control input-sm" required />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 text-right">Select Liga</label>
                        <div class="col-md-6">
                            <select class="form-control input-sm" name="id_liga" id="id_liga">
                                <option>** Select Liga</option>
                                @foreach($liga as $l)
                                <option value="{{ $l->id }}">{{ $l->liga_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 text-right">Select Team Home</label>
                        <div class="col-md-6">
                            <select class="form-control input-sm" name="id_team_home" id="id_team_home">
                                <option>** Select Team Home</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 text-right">Select Team Away</label>
                        <div class="col-md-6">
                            <select class="form-control input-sm" name="id_team_away" id="id_team_away">
                                <option>** Select Team Away</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-sm btn-primary" name="submit" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection