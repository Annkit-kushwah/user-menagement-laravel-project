<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
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
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Regitration Form</h4>
                                    </div>

                                    <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <p>Please Create your account</p>

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
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input type="email" name="email" class="form-control"
                                            value="{{old('email')}}"  placeholder="Enter Your Email" />
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" value="{{old('password')}}"placeholder="Enter Your password"
                                                class="form-control" />
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Gender :</label>
                                            Male: <input type="radio" value="male" name="gender" checked />
                                            Female: <input type="radio" value="female" name="gender" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Hobby:</label>
                                            Reading <input type="checkbox" value="reading" name="hobby[]" />
                                            Singing <input type="checkbox" value="singing" name="hobby[]" />
                                            Dancing <input type="checkbox" value="dancing" name="hobby[]" />

                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Mo_no</label>
                                            <input type="number" placeholder="Enter Your Phone_No" name="mo_no"
                                                class="form-control" />
                                                @error('mo_no')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">City</label>
                                            <select name="city_id" class="form-control">
                                                <option value="1">Surat</option>
                                                <option value="2">Vapi </option>
                                                <option value="3">Vadora</option>
                                                <option value="4">Ahemdabad</option>
                                                <option value="5">Bhpal</option>
                                            </select>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Image</label>
                                            <input type="file" name="image" class="form-control" />
                                        </div>



                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Register</button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Aready have an account?</p>
                                            <a href="{{ url('/') }}" class="btn btn-outline-danger">
                                                Log In</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
