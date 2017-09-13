@extends('layouts.page')
@section('content')
<section class="SPBanerSec SPBanerSecabout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="SpBanerSingle">
                    <h2>About Us</h2>
                    <p>Creative. Responsive. On Mission.</p>
                    <div class="slideBtn">
                        <a href="{{ url('/work_with_us') }}">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="abContentSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <div class="DesignHead aboutHead">
                    <h2>Experience <span>Microtech</span></h2>
                    <h3> is recognized as a <span>Excellent Digital Agency</span> by </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="experienceMic">
                    <h2>Highest level of client satisfaction</h2>
                    <p>One goal above all others: In-house team of web designers, developers and SEO experts uphold the highest standards for project planning and execution. Dedicated to building the perfect website for client’s company <span>on-time</span> and <span>on budget</span>.                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="expImg">
                    <img src="./images/comp.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="BGrowR">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="expImg Apadding35">
                    <img src="./images/web-app-developer-bangladesh'.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="experienceMic Apadding35">
                    <h2>Collaboration</h2>
                    <p>Assembling a talented team of digital strategists, designers, developers, marketers, communications specialists, project managers and business developers to work in a collaborative manner on our client projects. Builded on each other’s expertise, working together in teams to generate great outcomes for projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abContentSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="experienceMic Apadding35">
                    <h2>Aims</h2>
                    <p>to provide high-quality training with quick turn-around time. MicroTech helping to build the knowledge & skill bridge between industries & manpower by 
                        training new immigrants and existing personnel to make a better future in abroad
                    </p>
                    <p>At <span>MicroTech </span>gave our training to many students successfully past few years and some 
                        of them are doing a job in the respected field in USA respected industry successfully with attractive salary.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="expImg Apadding35">
                    <img src="./images/web-app-developer.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="BGrowR">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="expImg Apadding35">
                    <img src="./images/web-app-developer-bangladesh1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="experienceMic Apadding35">
                    <h2>Training</h2>
                    <p>MicroTech has for more than four years of supported Learning delivery by expert information technology professionals successfully and satisfying our valuable trainee. Offering online and offline training for the key areas such as Software testing, Selenium, QTP testing, Java, C#, Oracle Database Administrator training, and much more. </p>
                    <p>Expertise in training with quality of demos and samples which is keenly focused on our business. We have a mature learning proven process where you able to rely on us; feel free to see our testimonials & references.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {% include abcontent-section_us.html %} -->
@include('sections.ready-to-discuss-your-project')
@include('sections.blog-jobs-and-careers')

@include('sections.languages-we-speak')
<section class="signupSec">
    @include('sections.sign-up-to-get-the-latest-on-digital-trends')
</section>

@endsection

