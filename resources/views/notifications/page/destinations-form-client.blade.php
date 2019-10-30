@extends('layouts.page.mail.email-destination')
    @section('content')
        <thead>
            <tr>
                <th style="width: 80.5px; border: 1px solid #e1e1e1; text-align: center;" colspan="4"><strong>{{$text_grupo_title}}</strong></th>
            </tr>
            <tr>
                <th style="width: 274.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">Pax Name:</th>
                <th style="width: 80.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">{{$name }}</th>
            </tr>
            <tr>
                <th style="width: 274.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">Size of Group:</th>
                <th style="width: 80.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">{{$size}}</th>
            </tr>
            <tr>
                <th style="width: 274.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">Date of the Tour:</th>
                <th style="width: 80.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">{{$date}}</th>
            </tr>
            <tr>
                <th style="width: 274.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">Starting Time:</th>
                <th style="width: 80.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">{{$tour}}</th>
            </tr>
{{--            <tr>--}}
{{--                <th style="width: 274.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">Meeting Points:</th>--}}
{{--                <th style="width: 80.5px; text-align: left; border: 1px solid #e1e1e1;" colspan="3">--}}
{{--                    <p><strong>*10am Pick up time: </strong><span style="font-weight: 400;">Join us <a href="https://www.google.com/maps/place/Calle+Schell+178,+Miraflores+15074/@-12.1228812,-77.031988,17z/data=!4m5!3m4!1s0x9105c818e2e9d1dd:0xdd4b052cbe084319!8m2!3d-12.1226729!4d-77.0306609?hl=en" target="_blank" rel="noopener">at Calle Schell N&deg; 178</a>, outside Oechsle Mall, in Miraflores.<br /></span></p>--}}
{{--                    <p><span style="font-weight: 400;">*</span><strong>11am &amp; 3pm Meet up times: </strong><span style="font-weight: 400;">Join us <a href="https://www.google.com/maps/place/Church+of+La+Merced/@-12.048218,-77.03284,16z/data=!4m5!3m4!1s0x0:0xd81ebfed4d7031cb!8m2!3d-12.048218!4d-77.0328404?hl=en" target="_blank" rel="noopener">in front of La Merced Church</a>, at Jiron de la Union in Lima Centre.</span></p>--}}
{{--                </th>--}}
{{--            </tr>--}}
        </thead>
    @endsection
