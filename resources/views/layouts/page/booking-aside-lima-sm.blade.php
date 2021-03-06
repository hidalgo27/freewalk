

<div id="form"  class="result mt-2">
    <div class="box-form border rounded shadow bg-white">

        <form method="post" id="reg-form" class="px-0 m-3 ">
            @csrf
            <div id="datepicker"></div>
            <input type="hidden" name="text_grupo_title" value="{{$destino_grupos->titulo}}">
            <textarea name="txta_body_mail" class="d-none">{{$destino_grupos->body_email}}</textarea>
            <div class="form-group">
                <p>@lang('home.dates'): <input class="form-control form-control-sm" type="text" id="datepicker2" name="txt_date"></p>
            </div>

            <div class="form-group">
                <input class="form-control form-control-sm" name="txt_name" type="text" placeholder="@lang('home.your_name')" required data-error="Please enter your name">
            </div>
            <div class="form-group">
                <input class="form-control form-control-sm" name="txt_email" type="text" placeholder="@lang('home.write_email')" required data-error="Please enter your email">
            </div>

            <div class="form-group">
                <select class="form-control form-control-sm" id="lname1" name="slc_size">
                    <option value="" disabled selected>@lang('home.size_group')</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>


            @if ($destino_grupos->destino->tours->count() > 0)
                <div class="form-group">
                    <select class="form-control form-control-sm" id="nombretour" name="slc_tour">
                        <option value="" disabled selected>@lang('home.free_departure')</option>
                        @foreach($destino_grupos->destino->tours as $tours)
                            <option value="{{$tours->titulo}}">{{$tours->titulo}}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
                <select class="form-control form-control-sm" id="nombretour" name="slc_referencia">
                    <option value="" disabled selected>@lang('home.how_find')</option>
                    <option value="google-organic">Google Organic Result</option>
                    <option value="google-ads">Google Ads</option>
                    <option value="blogs">Blogs</option>
                    <option value="another-fwtp">Another FWTP Location</option>
                    <option value="word-of-mouth">Word of mouth</option>
                    <option value="facebook">Facebook</option>
                    <option value="instagram">Instagram</option>
                    <option value="travel-guides">Travel guides</option>
                    <option value="hotel">Hotel, hostel or Airbnb</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control form-control-sm" name="txta_comment" id="comment" rows="1" placeholder="@lang('home.any_message')"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-send btn-lg px-5 ">@lang('home.book_now')</button>
                <!-- <small class="text-danger d-block">In Lima: No Free Tours on Sundays</small> -->
                
            </div>

        </form>

    </div>
</div>





