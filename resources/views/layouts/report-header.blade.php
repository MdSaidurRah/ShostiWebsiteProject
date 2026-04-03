

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

<table style="margin-top:30px; width: 100%">
    <tr>
        <td width="80%">
            <h1>{{$organization->information_value}}</h1>
            <a href="https://aidbd.org/">{{$website->information_value}}</a>
            <p>
                {{$address->information_value}}
                <br/> Contact No: {{$contactNo->information_value}}
                <br/> Email :  {{$email->information_value}}</p>
        </td>
        <td width="20%">
            <img src="{{url($officialLogo->information_value)}}" width="70%">
        </td>
    </tr>
</table>
