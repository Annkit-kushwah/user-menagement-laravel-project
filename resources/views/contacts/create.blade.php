<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body ">



                                    <form action="{{ url('contact/store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h1>

                                            Please Create  account
                                        </h1>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">First_name</label>
                                            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}"
                                                placeholder="Enter Your First name" />
                                            @error('first_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Last_name</label>
                                            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}"
                                                placeholder="Enter Your Last name" />
                                                @error('last_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Mo_no</label>
                                            <input type="number" placeholder="Enter Your Phone_No" name="mo_no"
                                                class="form-control" />
                                                @error('mo_no')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>





                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Create</button>

                                        </div>



                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>
