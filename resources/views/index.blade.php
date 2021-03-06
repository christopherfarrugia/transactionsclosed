@extends('layouts.app')

@section('content')

<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 px-3">
                <h1>Selling Real Estate Just Got Easier</h1>
                <h2>Our U.S. based transaction coordinators handle contract to close so you can focus on prospecting.
                </h2>
                <button class="btn btn-green" data-toggle="modal" data-target="#SignUpModalCenter">Get Started</button>
            </div>
            <div class="col-xs-6"></div>
        </div>
    </div>
</section>



<section id="how-it-works">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <img src="img/layout/house-for-sale.png" alt="house-for-sale" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">How Does it Work?</h3>
                <p class="text-center">Quickly and easily set up a new transaction with our streamlined process. We
                    begin working as soon as
                    your contract is uploaded.</p>
                <hr>

                <div class="row text-center">
                    <div class="col">
                        <p><span class="stepnumber">1</span></p>
                        <p>Choose whether you have the buyer, seller or both.</p>
                    </div>
                    <div class="col">
                        <p><span class="stepnumber">2</span></p>
                        <p>Upload your contract and addenda.</p>
                    </div>
                    <div class="col">
                        <p><span class="stepnumber">3</span></p>
                        <p>Watch your transaction coordinator finish the deal!</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>



<section id="pricing">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
                <h2>Transaction Coordinator Pricing</h2>
                <h3>Take these tasks off of your plate and get back to selling.</h3>
            </div>
        </div>
        <div class="row">
            <div class="card col-md-12 col-sm-12 col-lg-4">
                <div class="card-body">
                    <h3 class="card-title">Buyer Side</h3>
                    <h6 class="card-subtitle m-2">$245</h6>
                    <ul class="text-left">
                        <li>Track all contract deadlines</li>
                        <li>Communicate each step of the way</li>
                        <li>Review contracts &amp; addenda</li>
                        <li>Prepare amendments &amp; addenda</li>
                        <li>Create timeline for agent and customer</li>
                        <li>Schedule inspections</li>
                        <li>Schedule photo shoot</li>
                        <li>Ensure disclosures are delivered to buyer</li>
                        <li>Track deadlines</li>
                        <li>Track earnest money deposits</li>
                        <li>Notify agent of missing paperwork</li>
                        <li>Ensure closing agent receives all paperwork</li>
                    </ul>

                    <button class="btn btn-green" data-toggle="modal" data-target="#SignUpModalCenter">Get
                        Started</button>
                </div>
            </div>
            <div class="card col-md-12 col-sm-12 col-lg-4 shadow">
                <div class="card-body">
                    <h3 class="card-title">Both Sides</h3>
                    <h6 class="card-subtitle m-2">$495</h6>
                    <ul class="text-left">
                        <li>Track all contract deadlines</li>
                        <li>Communicate each step of the way</li>
                        <li>Review contracts & addenda</li>
                        <li>Prepare amendments & addenda</li>
                        <li>Create timeline for agent and customer</li>
                        <li>Submit listings for broker signature</li>
                        <li>Schedule inspections</li>
                        <li>Schedule photo shoot</li>
                        <li>Schedule appraisal</li>
                        <li>Ensure disclosures are delivered to buyer</li>
                        <li>Input listing into the MLS</li>
                        <li>Add open houses to the MLS </li>
                        <li>Track deadlines and receipt of earnest money </li>
                        <li>Notify agent of missing paperwork </li>
                        <li>Ensure closing agent receives all paperwork </li>
                    </ul>
                    <button class="btn btn-green" data-toggle="modal" data-target="#SignUpModalCenter">Get
                        Started</button>
                </div>
            </div>
            <div class="card col-md-12 col-sm-12 col-lg-4">
                <div class="card-body">
                    <h3 class="card-title">Seller Side</h3>
                    <h6 class="card-subtitle m-2">$295</h6>
                    <ul class="text-left">
                        <li>Track all contract deadlines</li>
                        <li>Communicate each step of the way</li>
                        <li>Review contracts & addenda</li>
                        <li>Prepare amendments & addenda</li>
                        <li>Create timeline for agent and customer</li>
                        <li>Submit listings for broker signature</li>
                        <li>Schedule appraisal</li>
                        <li>Ensure disclosures are delivered to buyer</li>
                        <li>Input listing into the MLS</li>
                        <li>Add open houses to the MLS </li>
                        <li>Track deadlines and receipt of earnest money </li>
                        <li>Notify agent of missing paperwork </li>
                        <li>Ensure closing agent receives all paperwork </li>
                    </ul>
                    <button class="btn btn-green" data-toggle="modal" data-target="#SignUpModalCenter">Get
                        Started</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="testimonials">
    @foreach ($testimonials as $testimonial)
    <div class="container">
        <p>"{{ $testimonial->testimonial }}"</p>
        <cite>{{ $testimonial->author }}, {{ $testimonial->author_city }}</cite>
    </div>
    @endforeach
</section>


<!-- Modal -->
<div class="modal fade" id="SignUpModalCenter" tabindex="-1" role="dialog" aria-labelledby="SignUpModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SignUpModalLongTitle">Create a New Transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="" method="post" id="CreateNewTransaction">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="firstname" placeholder="Your First name" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="lastname" placeholder="Your Last name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="emailaddress" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="telephone" placeholder="Telephone Number" required>
                        </div>
                    </div>
                </form>






            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-green" form="CreateNewTransaction">Create Transaction</button>
            </div>
        </div>
    </div>
</div>

@endsection