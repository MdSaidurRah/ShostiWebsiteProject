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
            <p >Project Name : {{$expense[0]->project_name}}</p>
            <p >Reference NO : {{$expense[0]->expense_reference_no}}</p>
        </td>
        <td>
            Print Time : {{$printTime}}
        </td>
    </tr>
</table>

<br/>
<table class="table table-sm table-bordered">

    <tr>
        <td>Expense Head</td>
        <td>
            {{$expense[0]->expense_head}}
            <br/> -- {{$expense[0]->sub_head_name}}
            <br/> -- --  {{$expense[0]->child_head_name}}
        </td>
    </tr>

    <tr>
        <td>Amount </td>
        <td>{{$expense[0]->amount}}</td>
    </tr>
    <tr>
        <td>Date </td>
        <td>{{$expense[0]->date}}</td>
    </tr>
    <tr>
        <td>Payment Mode </td>
        <td>{{$expense[0]->payment_mode}}</td>
    </tr>
    <tr>
        <td>Payment Status </td>
        <td>{{$expense[0]->payment_status}}</td>
    </tr>
    <tr>
        <td>Expense Status </td>
        <td>{{$expense[0]->expense_status}}</td>
    </tr>
    <tr>
        <td>Create Time  </td>
        <td>{{$expense[0]->createdAt}}</td>
    </tr>

</table>



</body>

</html>

