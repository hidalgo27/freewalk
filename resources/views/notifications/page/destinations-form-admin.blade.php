@extends('layouts.page.mail.emai-destination-admin')
@section('content')

    <tbody>
    <tr>
        <td>Name</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>Tour</td>
        <td>{{$text_grupo_title}}</td>
    </tr>
    <tr>
        <td>Date</td>
        <td>{{$date}}</td>
    </tr>
    <tr>
        <td>Nro Pax</td>
        <td>{{$size}}</td>
    </tr>
    <tr>
        <th>Starting Time:</th>
        <th>{{$tour}}</th>
    </tr>
    <tr>
        <th colspan="2">Message</th>
    </tr>
    <tr>
        <th colspan="2">{{$comment}}</th>
    </tr>
    <tr>
        <th colspan="2">I found you by<br></th>
    </tr>
    <tr>
        <th colspan="2">{{$referencia}}<br></th>
    </tr>
    </tbody>
@endsection
