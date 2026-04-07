<!DOCTYPE html>

<html>

<head>

    <title>Aid BD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            <p>Contact No: {{$contactNo->information_value}}</p>
            <p>Email :  {{$email->information_value}}</p>
        </td>
        <td width="20%" >
            <img src="{{public_path($officialLogo->information_value)}}" width="70%">
        </td>
    </tr>
</table>


<h3 style="text-align: center">Transaction Invoice</h3>

<table style="width: 100%">
    <tr style="background: #e5e0df">
        <td>
            <p>Transaction Type : {{$transaction[0]->transaction_type}}</p>
            <p>Reference No: {{$transaction[0]->reference_no}}</p>
        </td>
        <td>
            Print Date : {{$printTime}}
        </td>
    </tr>
</table>

<br/>
<table class="table table-bordered">

    <tr>
        <td>Transaction Type </td>
        <td>{{$transaction[0]->transaction_type}}</td>
    </tr>
    <tr>
        <td>Funding Source</td>
        <td>{{$transaction[0]->source}}</td>
    </tr>
    <tr>
        <td>Distributed To </td>
        <td>{{$transaction[0]->project_name}}</td>
    </tr>
    <tr>
        <td>Amount In USD</td>
        <td>{{$transaction[0]->amount_in_usd}}</td>
    </tr>
    <tr>
        <td>Amount In BDT </td>
        <td>{{$transaction[0]->amount_in_bdt}}</td>
    </tr>
    <tr>
        <td>Date </td>
        <td>{{$transaction[0]->transaction_date}}</td>
    </tr>

    <tr>
        <td>Remark Note </td>
        <td>
            <p> {{$transaction[0]->remark_note}}</p>
        </td>
    </tr>
    <tr>
        <td>Payment Mode </td>
        <td>{{$transaction[0]->payment_mode}}</td>
    </tr>
    <tr>
        <td>Payment Status </td>
        <td>{{$transaction[0]->payment_status}}</td>
    </tr>
    <tr>
        <td>Transaction Status </td>
        <td>{{$transaction[0]->transaction_status}}</td>
    </tr>
    <tr>
        <td>Create Time  </td>
        <td>{{$transaction[0]->createdAt}}</td>
    </tr>

</table>



</body>

</html>

