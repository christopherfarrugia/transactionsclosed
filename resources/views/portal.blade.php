@extends('layouts.portal')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-md-2 sidebar py-4">
            <button style="border-radius:50px;padding: .6rem 2rem">Create a New File</button>

            <ul>
                <li>Smith - 323 Main Street</li>
                <li>Johnson - 1650 Dares Beach Road</li>
                <li>Romero - 123 17th Street SW</li>
                <li>Weaver - 321 Blackberry Hill Road Apartment 50-C</li>
                <li>Ashton - 9281 19th St</li>
            </ul>
        </div>

        <div class="col-sm-8 col-sm-offset-3 col-md-10 col-md-offset-2 main py-4 px-4">

            <h1>Dashboard</h1>

            <h3>Listing Information</h3>

            <form action="/portal" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <section class="buyer">
                    <h3>Buyer Information</h3>

                    <div id="buyer-list" data-json="{{ json_encode($buyers) }}"></div>

                    <button type="button" id="add-buyer">Add a Buyer</button>
                </section>

                <section class="seller">
                    <h3>Seller Information</h3>

                    <div id="seller-list" data-json="{{ json_encode($sellers) }}"></div>

                    <button type="button" id="add-seller">Add a Seller</button>
                </section>

                <h3>Buyer's Agent Information</h3>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Telephone">
                    </div>

                </div>


                <h3>Listing Agent Information</h3>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Telephone">
                    </div>

                </div>


                <h3>Closing Company - Title or Attorney</h3>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Company">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Escrow Agent Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Telephone">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fax">
                    </div>

                </div>


                <h3>Upload Contract & Addenda</h3>
                <div class="form-row">
                    <div class="col">
                        <input type="file" class="form-control">
                    </div>
                </div>


                <div class="form-control">
                    <input type="submit">Submit</input>
                </div>
            </form>





        </div>
    </div>
</div>

@endsection
