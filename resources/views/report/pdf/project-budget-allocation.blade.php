<!DOCTYPE html>

<html>

<head>

    <title>Aid BD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body, #wrapper, #content {
            font-family:sans-serif;
        }
        table{
            font-family:sans-serif;
        }
        table tr{
            font-family:sans-serif;
        }
        table td{
            font-family:sans-serif;
        }
        a:link, a:visited {
            font-family:sans-serif;
        }
        p {
            font-family:sans-serif;
        }
    </style>
</head>

<body>


<?php
    $organization =  DB::table('system_information')
        ->where('information_key','Organization Name')
        ->select('*')->first();
    $website =  DB::table('system_information')
        ->where('information_key','Organization Website')
        ->select('*')->first();

    $contactNo =  DB::table('system_information')
        ->where('information_key','Phone No')
        ->select('*')->first();

    $address =  DB::table('system_information')
        ->where('information_key','address')
        ->select('*')->first();

    $email =  DB::table('system_information')
        ->where('information_key','Email')
        ->select('*')->first();

    $officialLogo =  DB::table('system_information')
        ->where('information_key','Official Logo')
        ->select('*')->first();
?>

<table style="width: 100%">
    <tr>
        <td width="80%">
            <h1>{{$organization->information_value}}</h1>
            <a href="https://shostiarcstudio.com">{{$website->information_value}}</a>
            <p>
                {{$address->information_value}}
                <br/> Contact No: {{$contactNo->information_value}}
                <br/> Email :  {{$email->information_value}}</p>
        </td>
        <td width="20%">
            <img src="{{public_path($officialLogo->information_value)}}" width="70%">
        </td>
    </tr>
</table>

<h3 style="text-align: center">{{$reportTitle}}</h3>

<table style="width: 100%">
    <tr style="background: #e5e0df">
        <td>
            <p >Project Name : {{$project->project_name}}</p>
        </td>
        <td>
            <p > Print Time : {{$printTime}}</p>
        </td>
    </tr>
</table>

<br/>


<table class="table table-sm table-bordered" >

    <thead>
    <tr>

        <th>Sl</th>
        <th colspan="3">Head Name</th>
        <th style="text-align: center">Allocation</th>
        <th style="text-align: center">Burn</th>
        <th style="text-align: center">Remain</th>
    </tr>
    </thead>
    <tbody>
    @foreach($budgetHeads as $head)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td colspan="3">{{$head->head_name}}</td>
            <td style="text-align: center">{{$head->budget_allocation}}</td>
            <td style="text-align: center">{{$head->budget_burn}}</td>
            <td style="text-align: center">{{$head->budget_allocation - $head->budget_burn}}</td>
        </tr>


            <?php
            $subHeads = DB::table('projectbudgetheads')
                ->where('head_category',"SubHead")
                ->where('project_id',$project->id)
                ->where('main_head_id',$head->head_id)
                ->select('*')->get();
            ?>
        @foreach($subHeads as $subHead)
            <tr>
                <td></td>
                <td>{{$loop->iteration}}</td>
                <td colspan="2">{{$subHead->head_name}}</td>
                <td style="text-align: center">{{$subHead->budget_allocation}}</td>
                <td style="text-align: center">{{$subHead->budget_burn}}</td>
                <td style="text-align: center">{{$subHead->budget_allocation - $subHead->budget_burn}}</td>
            </tr>

                <?php
                $childHeads = DB::table('projectbudgetheads')
                    ->where('head_category',"ChildHead")
                    ->where('project_id',$project->id)
                    ->where('sub_head_id',$subHead->head_id)
                    ->where('main_head_id',$head->head_id)
                    ->select('*')->get();
                ?>
            @foreach($childHeads as $childHead)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$childHead->head_name}}</td>
                    <td style="text-align: center">{{$childHead->budget_allocation}}</td>
                    <td style="text-align: center">{{$childHead->budget_burn}}</td>
                    <td style="text-align: center">{{$childHead->budget_allocation - $childHead->budget_burn}}</td>
                </tr>
            @endforeach
        @endforeach
    @endforeach

    </tbody>

</table>



</body>

</html>

