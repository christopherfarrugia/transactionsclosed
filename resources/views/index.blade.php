@extends('layouts.app')

@section('content')

    <section id="hero">
        <div class="container">
            <h1>Selling Real Estate Just Got Easier</h1>
            <h2>Our U.S. based transaction coordinators handle contract to close so you can focus on prospecting.</h2>
            <button class="btn btn-green">Get Started</button>
        </div>
    </section>


    <section id="how-it-works">
        <div class="container">
            <div class="house-for-sale">
                <img src="img/layout/house-for-sale.png" alt="house-for-sale img-fluid">
            </div>
            <div class="text">
                <h3>How Does it Work?</h3>
                <p>Quickly and easily set up a new transaction with our streamlined process. We begin working as soon as your contract is uploaded.</p>

                <hr>

                <div class="steps">
                    <div class="step1">
                            <p><span class="number">Step 1</span></p>
                            <p>Choose whether you have the buyer, seller or both.</p>
                        </div>
                        <div class="step2">
                            <p><span class="number">Step 2</span></p>
                            <p>Upload your contract and addenda.</p>
                        </div>
                        <div class="step3">
                            <p><span class="number">Step 3</span></p>
                            <p>Watch your transaction coordinator finish the deal!</p>
                        </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>


    <section id="pricing">
        <div class="container">
            <h2>Transaction Coordinator Pricing</h2>
            <h3>Take these tasks off of your plate and get back to selling.</h3>

            <div class="pricing-tables">
                <div class="pricing-table">
                    <h3>Buyer Side</h3>
                    <p><span class="pricing">$195</span></p>
                    <ul>
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
              
                    <div class="card-button">
                        <a href="" class="btn btn-green">get started</a>
                    </div>
                    
                    
                    </div><!-- END PRICING TABLE -->

                    <div class="pricing-table">
                        <h3>Both Sides</h3>
                        <p><span class="pricing">$450</span></p>
                        <ul>
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
                            <li>Add open houses to the MLS	</li>
                            <li>Track deadlines and receipt of earnest money	</li>
                            <li>Notify agent of missing paperwork	</li>
                            <li>Ensure closing agent receives all paperwork	</li>
                        </ul>
                        
                        <div class="card-button">
                            <a href="" class="btn btn-green">get started</a>
                        </div>
                    </div>
                
                    <div class="pricing-table">
                        <h3>Seller Side</h3>
                        <p><span class="pricing">$295</span></p>
                        <ul>
                            <li>Track all contract deadlines</li>
                            <li>Communicate each step of the way</li>
                            <li>Review contracts & addenda</li>
                            <li>Prepare amendments & addenda</li>
                            <li>Create timeline for agent and customer</li>
                            <li>Submit listings for broker signature</li>
                            <li>Schedule appraisal</li>
                            <li>Ensure disclosures are delivered to buyer</li>
                            <li>Input listing into the MLS</li>
                            <li>Add open houses to the MLS	</li>
                            <li>Track deadlines and receipt of earnest money	</li>
                            <li>Notify agent of missing paperwork	</li>
                            <li>Ensure closing agent receives all paperwork	</li>
                        </ul>
                        
                        <div class="card-button">
                            <a href="" class="btn btn-green">get started</a>
                        </div>
                    </div>




                </div><!-- END PRICING TABLE -->
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
    
@endsection
