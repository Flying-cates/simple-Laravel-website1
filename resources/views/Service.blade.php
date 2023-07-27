@extends('layout.app')
@section('title','Service');

@section('content')

    <div class="container-fluid text-white bg-dark ">
        <div class="row p-4" >
            <div class="col-md-12 text-center ">
                <h4> My Service </h4>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 p-2">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/service1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Name </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile Number </label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Your Message </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary btn ">Send Now</button>
                </form>
            </div>

            <div class="col-md-6">
                <h5>Address</h5>
                <p>Multiplan center, Dhaka 1204</p>
                <p>+01677733322</p>
                <p>mosabbir.ahmed@gmail.com</p>

            </div>
        </div>

    </div>
@endsection
