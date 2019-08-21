@extends('layouts.app')

@section('content')
    <div class="center_box cb">
        <div class="uo_tabs cf">
            <a href="#"><span>profile</a>
            <a href="#"><span>Reviews</span></a>
            <a href="#"><span>orders</span></a>
            <a href="#" class="active"><span>My Address</span></a>
            <a href="#"><span>Settings</span></a>
        </div>
        <div class="page_content bg_gray">
            <div class="uo_header">
                <div class="wrapper cf">
                    <div class="wbox ava">
                        <figure><img src="imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
                    </div>
                    <div class="main_info">
                        <h1>Helena Afrassiabi</h1>
                        <div class="midbox">
                            <h4>560 points</h4>
                            <div class="info_nav">
                                <a href="#">Get Free Points</a>
                                <span class="sepor"></span>
                                <a href="#">Win iPad</a>
                            </div>
                        </div>
                        <div class="stat">
                            <div class="item">
                                <div class="num">30</div>
                                <div class="title">total orders</div>
                            </div>
                            <div class="item">
                                <div class="num">14</div>
                                <div class="title">total reviews</div>
                            </div>
                            <div class="item">
                                <div class="num">0</div>
                                <div class="title">total gifts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uo_body">
                <div class="wrapper">
                    <div class="uofb cf">
                        <div class="l_col adrs">
                            <h2>Add New Address</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/" method="POST">
                                @csrf
                                <div class="field">
                                    <label>Name *</label>
                                    <input type="text" name="name" value="" palceholder="" class="vl_empty" />
                                </div>
                                <div class="field">
                                    <label>Your city *</label>
                                    <select class="vl_empty" id="city" name="city">
                                        <option class="plh"></option>

                                        @foreach ($cities as $city)
                                            <option value="{{$city->name}}">{{$city->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="field">
                                    <label>Your area *</label>
                                    <input type="text" id="area" name="area" value="" palceholder="" disabled class="vl_empty" />
                                </div>

                                <div class="field">
                                    <label>Street</label>
                                    <input type="text" value="" name="street" palceholder="" class="vl_empty" />
                                </div>
                                <div class="field">
                                    <label>House # </label>
                                    <input type="text" value="" name="house" palceholder="House Name / Number" />
                                </div>

                                <div class="field">
                                    <label class="pos_top">Additional information</label>
                                    <textarea name="additional_info"></textarea>
                                </div>

                                <div class="field">
                                    <input type="submit" value="add address" class="green_btn" />
                                </div>
                            </form>
                        </div>

                        <div class="r_col">
                            <h2>My Addresses</h2>

                            @if ($addresses)
                            <div class="uo_adr_list">
                                @foreach ($addresses as $address)
                                <div class="item">
                                    <h3>{{$address->name}}</h3>
                                    <p>
                                        {{implode(', ', $address->full)}}
                                    </p>
                                    @if (!empty($address->additional_info))
                                        <small>{{$address->additional_info}}</small>
                                    @endif
                                    <div class="actbox">
                                        <a href="#" class="bcross"></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
@endsection

