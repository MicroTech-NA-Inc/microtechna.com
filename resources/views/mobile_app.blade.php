@extends('layouts.page')
@section('content')
<section class="SPBanerSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>Mobile and Web Apps development</h2>
                    <p>It easier to build multiple mobile apps for different platforms quickly.<br>You can write code once in a web development language.</p>
                    <div class="slideBtn">
                        <a href="{{ url('/work_with_us') }}">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--ServicePage Baner End By Shagor-->

<!--SPerforPMainSec Start here By Shagor-->
<section class="SPerforPMainSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="SPerForMainLeft">
                    <div class="SingleCmFooter PerForLeftHeading">    
                        <h2>Services</h2>
                        <div class="FSerMenu PerForLeft">
                            <h1><a href="{{ url('/web_design') }}">Website Design</a></h1>
                            <h1><a href="{{ url('/performance_testing') }}">Performance Testing</a></h1>
                        </div>
                    </div>
                    <div class="SingleCmFooter PerForLeftHeading">    
                        <a href="{{ url('/performance_testing') }}" class="SperForLeftQute">Get a quote</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12">
                <div class="PerForRight">
                    <div class="singleSpItem SingleSpSix PerForPartOne">
                        <div class="SingleSpImage PerForSingleSpImage">
                            <img src="./images/ServiceItem1.jpg" alt="ServiceItem1.jpg">
                            <div class="SPSingleSpOver">
                                <a href="#" class="fa fa-link SpFaLink"></a>
                            </div>
                        </div>
                    </div>
                    <div class="PerForPartOne">
                        <h1>Mbile and Web App development</h1>
                        <p>Etiam porta sem malesuada magna mollis euismod. 
                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor 
                            auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta 
                            gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus 
                            auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. 
                            Pellentesque ornare sem lacinia quam venenatis vestibulum. 
                            Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus,
                            porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit
                            libero, a pharetra augue. Sed posuere consectetur est at
                            lobortis. Sed posuere consectetur est at lobortis.
                        </p>
                    </div>
                    <!--Accordian html Start here by Shagor-->
                    <div class="PerForPartOne Accordian">
                        <div class="row">
                            <div class="col-lg-7 noPaddingLeft">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                    <span></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Etiam porta sem malesuada magna mollis euismod. 
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor 
                                                    auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta 
                                                    gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus 
                                                    auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. 
                                                    Pellentesque ornare sem lacinia quam venenatis vestibulum. 
                                                    Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo,
                                                    tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit
                                                    libero, a pharetra augue. Sed posuere consectetur est at
                                                    lobortis. Sed posuere consectetur est at lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Collapsible Group Item #2
                                                    <span></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high 
                                                    life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum 
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee 
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt 
                                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings 
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you 
                                                    probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                    <span></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high 
                                                    life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum 
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee 
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt 
                                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings 
                                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you 
                                                    probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 noPaddingRight">
                                <div class="singleSpItem SingleSpSix AccordianRight">
                                    <div class="SingleSpImage PerAccordianImage">
                                        <img src="./images/ServiceItem1.jpg" alt="ServiceItem1.jpg">
                                        <div class="SPSingleSpOver">
                                            <a href="#" class="fa fa-link SpFaLink"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="singleSpItem SingleSpSix AccordianRight">
                                    <div class="SingleSpImage PerAccordianImage PerAccordianImageThree">
                                        <img src="./images/ServiceItem1.jpg" alt="ServiceItem1.jpg">
                                        <div class="SPSingleSpOver">
                                            <a href="#" class="fa fa-link SpFaLink"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="singleSpItem SingleSpSix AccordianRight">
                                    <div class="SingleSpImage PerAccordianImage">
                                        <img src="./images/ServiceItem1.jpg" alt="ServiceItem1.jpg">
                                        <div class="SPSingleSpOver">
                                            <a href="#" class="fa fa-link SpFaLink"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Accordian html End Here By Shasgor-->
                    <div class="PerForPartOne">
                        <h1>Web App development</h1>
                        <p>Etiam porta sem malesuada magna mollis euismod. 
                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor 
                            auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta 
                            gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus 
                            auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. 
                            Pellentesque ornare sem lacinia quam venenatis vestibulum. 
                            Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus,
                            porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit
                            libero, a pharetra augue. Sed posuere consectetur est at
                            lobortis. Sed posuere consectetur est at lobortis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection