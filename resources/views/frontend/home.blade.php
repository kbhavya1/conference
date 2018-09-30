@extends('layouts.index')
@section('content')
    <div class="info_slide">
        <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 slide-pic" src="{{ asset('images/img1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 slide-pic" src="{{ asset('images/img2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 slide-pic" src="{{ asset('images/img3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="main-content h-75">
        <div class="heading" style="padding-left: 5vh;padding-top: 5vh;">
            <h3>CCEM OVERVIEW</h3>
        </div>
        <div class="discription col-md-6" style="float: left;font-size: 12px;">
            <p>
            <h5 style="padding-bottom: 1vh;">Conference Scope</h5>
            The Seventh <strong> IEEE International Conference on Cloud Computing in Emerging Markets (CCEM)</strong> continues the highly
            successful CCEM conference series which was originally launched in 2012.

            Cloud computing has emerged as a dominant and transformational paradigm in information technology over the last
            few years and is beginning to effect a multitude of industries such as government,
            finance, telecommunications, education, retail, energy and utilities, and transportation. Research in this
            field has become very active and spans a number of areas including virtualization, networking, storage, security,
            management of cloud services, efficient cloud architectures, massive multi-tenancy, and design of cloud applications and services.
            Cloud computing continues to be the way of the future and many studies indicate that more than 50% of all information technology
            will be in this new paradigm within the next five to ten years. This transformation has great implications for emerging markets
            which have the potential to leap frog mature markets in their adoption of cloud computing, combine cloud computing and
            mobile technologies to introduce unique services that can transform the lives of billions, drive a much larger scale of adoption and challenge existing price points,
            while presenting unique challenges in areas such as security and user interfaces to cloud computing.
            </p>
            <p>
            <h5 style="padding-bottom: 1vh;">The goal</h5>
            This research driven innovation conference has established itself as a unique conference that combines top notch peer-reviewed
            research papers (acceptance rate less than 10%), invited talks from renowned industry and government leaders, posters and demos
            showcasing latest innovations, a startup showcase highlighting the vibrant and fast growing business ecosystem around cloud,
            tutorials on cutting edge topics, and a doctoral symposium featuring some of the deep research topics being pursued by academic leaders.
            </p>
            <p>
            <h5 style="padding-bottom: 1vh;">Conference Format</h5>
            The conference will be a Two day event that spans invited talks, tutorials, peer reviewed paper presentations,
            a panel, and a technology showcase.
            </p>
        </div>
        <br/>
        <br/>
        <div class="bullets col-md-6" style="float:left;font-size: 12px;">
            <ul>
                <li>
                    <strong>
                        Design of Cloud Computing services, especially for emerging markets – infrastructure, platform, database,
                        software, network, storage, e-governance, and business process
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Utilizing/enhancing the Cloud for Big data & Predictive analytics
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Social & Mobile computing advances leveraging the Cloud
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Internet of Things enabled by Cloud, Big Data & AI
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Big Data Analytics & AI driven predictive computing
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Intersection of Cloud with Cognitive Computing and Artificial Intelligence
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Deep Learning in Cloud Environments
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Conversational AI & Multimodal Interactions
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        AI Infused Automation
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Advances in virtualization of hardware & software services, Cloud Networking
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Security, privacy, governance, and compliance management in cloud
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        DevOps, Monitoring, management, & maintenance in Cloud Computing environments
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Performance optimization in Hybrid Cloud Environments
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Cloud Computing Solutions for different Industries & verticals
                    </strong>
                </li>
                <br/>
                <li>
                    <strong>
                        Legal Aspects & Service Level Agreements in Cloud Computing & Data Privacy
                    </strong>
                </li>
            </ul>
        </div>
    </div>
 @endsection
