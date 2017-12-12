@extends('layouts.header-and-footer')
@section('content')
    <div class="main">
        <div class="content">
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        @if(Session::has('success'))
                            <p style="color: #07DBCF">{{ Session::get('success') }}</p>
                        @endif
                        {!! Form::open(['method' => 'POST', 'url' => 'contact-us']) !!}
                        @guest
                        <div>
                            <span><label>Name *</label></span>
                            <span><input name="userName" type="text" class="textbox" required></span>
                        </div>
                        <div>
                            <span><label>E-mail *</label></span>
                            <span><input name="userEmail" type="text" class="textbox" required></span>
                        </div>
                        <div>
                            <span><label>Phone</label></span>
                            <span><input name="userPhone" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Subject *</label></span>
                            <span><textarea name="userMsg" required="required"></textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" value="Submit" class="myButton"></span>
                        </div>
                        @else
                            <div>
                                <span><label>Name *</label></span>
                                <span><input name="userName" type="text" class="textbox" required
                                             value="{{ Auth::user()->name }}"></span>
                            </div>
                            <div>
                                <span><label>E-mail *</label></span>
                                <span><input name="userEmail" type="text" class="textbox" required
                                             value="{{ Auth::user()->email }}"></span>
                            </div>
                            <div>
                                <span><label>Phone</label></span>
                                <span><input name="userPhone" type="text" class="textbox"
                                             value="{{ Auth::user()->phone }}"></span>
                            </div>
                            <div>
                                <span><label>Subject *</label></span>
                                <span><textarea name="userMsg" required="required"></textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" value="Submit" class="myButton"></span>
                            </div>
                            @endguest
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="contact_info">
                        <h3>Find Us Here</h3>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Giao+th%C3%B4ng+V%E1%BA%ADn+t%E1%BA%A3i/@21.0277745,105.8006411,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab424a50fff9:0xbe3a7f3670c0a45f!8m2!3d21.0277695!4d105.8028298"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <br>
                            <small>
                                <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Giao+th%C3%B4ng+V%E1%BA%ADn+t%E1%BA%A3i/@21.0277745,105.8006411,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab424a50fff9:0xbe3a7f3670c0a45f!8m2!3d21.0277695!4d105.8028298"
                                   style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                        </div>
                    </div>
                    <div class="company_address">
                        <h3>Company Information :</h3>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone:(00) 222 666 444</p>
                        <p>Fax: (000) 000 00 00 0</p>
                        <p>Email: <span>info@mycompany.com</span></p>
                        <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection