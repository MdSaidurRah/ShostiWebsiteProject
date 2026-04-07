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
            Print Time : {{$printTime}}
        </td>
    </tr>
</table>

<br/>


<table class="table table-sm">
    <thead>
    <tr>
        <th style="width: 5%;">SL</th>
        <th style="width: 20%;">Head</th>
        <th style="width: 15%;">Project</th>
        <th style="width: 10%;">Date</th>
        <th style="width: 10%;">Amount</th>
    </tr>
    </thead>

    <tbody>
    @foreach($expenseList as $index=>$expense)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                {{$expense->child_head_name}}
                <br/> > {{$expense->sub_head_name}}
                <br/> >>  {{$expense->expense_head}}
            </td>
            <td>{{$expense->project_name}}</td>
            <td>{{$expense->date}}</td>
            <td>{{$expense->amount}}</td>
        </tr>
    @endforeach
    </tbody>
</table>



</body>

</html>

