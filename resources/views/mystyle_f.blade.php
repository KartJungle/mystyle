@extends('layouts.app')

@section('content')
			<link href="css/creative.css" rel="stylesheet">
        <link href="css/kyc.css" rel="stylesheet">

        <style>

        .shade13 {
            background-color: #674633;
        }
        .shade12 {
            background-color:#794e45;
        }
        .shade11 {
            background-color:#7a5238;
        }
        .shade10 {
            background-color:#835a44;
        }
        .shade9 {
            background-color:#d6a07a;
        }
        .shade8 {
            background-color:#d6a384;
        }
        .shade7 {
            background-color:#e6ba9d;
        }
        .shade6 {
            background-color:#edbda6;
        }
        .shade5 {
            background-color:#f0c2a8;
        }
        .shade4 {
            background-color:#ebc6ac;
        }
        .shade3 {
            background-color:#f5d3b7;
        }
        .shade2 {
            background-color:#f7d9bd;
        }
        .shade1 {
            background-color:#fde1cc;
        }

        </style>
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Welcome to My Style</h1>
            <hr>
            <!-- multistep form -->

            <div class="">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-2">

                    </div>
                    <div class="col-sm-6">
                        <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <select class="form-control input-lg">
                                        <option>Size (S,M,L..)</option>
                                        <option>3XL</option>
                                        <option>4XL</option>
                                        <option>L</option>
                                        <option>M</option>
                                        <option>S</option>
                                        <option>XL</option>
                                        <option>XS</option>
                                        <option>XXL</option>
                                    </select>

                                </div>
                                <div class="col-xs-3 col-md-3">
                                    <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Waist ''" />
                                </div>
                                <div class="col-xs-3 col-md-3">
                                    <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Bust" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Weight" />
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Height" />
                                </div>

                            </div>



                            <select class="form-control input-lg">
                                <option>Skin Color</option>
                                <option class="shade13" value="Espresso-M13"></option>
                                <option class="shade12" value="Chestnut M12"></option>
                                <option class="shade11" value="Deep Bronze M11"></option>
                                <option class="shade10" value="Bronze M10"></option>
                                <option class="shade9" value="Golden Bronze M9"></option>
                                <option class="shade8" value="Golden Beige M8"></option>
                                <option class="shade7" value="Medium Beige M7"></option>
                                <option class="shade6" value="Medium - Pink Base M6"></option>
                                <option class="shade5" value="Apricot M5"></option>
                                <option class="shade4" value="Light Beige M4"></option>
                                <option class="shade3" value="Light Natural M3"></option>
                                <option class="shade2" value="Fair - Yellow Base M2"></option>
                                <option class="shade1" value="Very Fair M1"></option>

                            </select>



                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Favourite Color" />
                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Bugdget in Rupees" />
                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Recommendations for Shirt, Paints .. etc" />
                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Note to our Stylist" />

                            <br />
                            <span class="help-block" style="color:#faa51a">you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</header>

<script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script>
                    $("#color_me").change(function(){
                        var color = $("option:selected", this).attr("class");
                        $("#color_me").attr("class", color);
                    });
</script>
<script src="js/creative.min.js"></script>
@endsection
