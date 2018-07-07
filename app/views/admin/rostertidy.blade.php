@extends('layouts.master')

@section('title')
@parent
| Roster Tidy
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Roster Tidy Up Information</h2>
    </div>
</div>
    
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-condensed" id="datatable">
                    <thead>
                        <tr>
                            <th>CID</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Added to Roster</th>
                            <th>Last Controlled</th>
                            <th>Last Site Activity</th>
                            <th>Last Mentoring Session</th>
                        </tr> 
                    </thead> 
                    <tbody>
                        @foreach($users as $user)
                        <tr> 
                            <th scope="row">{{ $user->id }}</th> 
                            @if($user->visitor == 1)
                            <td>{{ $user->full_name }} - <b>Visitor</b></td>
                            @elseif($user->loa == 1)
                            <td>{{ $user->full_name }} - <b>LOA</b></td>
                            @else
                            <td>{{ $user->full_name }}</td>
                            @endif

                            <td>{{ $user->rating_short }}</td>

                            <td>{{ date('j M Y', strtotime($user->created_at)) }}</td>
                            
                            @if($user->controlActivity())
                            <td>{{ date('j M Y', strtotime($user->controlActivity()->date)) }}</td>
                            @else
                            <td><em>N/A since 01 May 2016</em></td>
                            @endif

                            @if($user->siteActivity())
                            <td>{{ date('j M Y', strtotime($user->siteActivity()->created_at)) }}</td>
                            @else
                            <td><em>N/A since 01 May 2016</em></td>
                            @endif

                            @if($user->trainingHistory())
                            <td>{{ date('j M Y', strtotime($user->trainingHistory()->date)) }}</td>
                            @else
                            <td><em>N/A since 01 May 2016</em></td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$("#datatable").DataTable({
			"lengthChange": false,
			"bPaginate": false,
	        "bFilter": true,
	        "bInfo": false
		});
	});
</script>

@stop