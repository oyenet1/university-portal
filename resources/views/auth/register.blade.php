@extends('layouts.guest')
@section('title', 'Login | ' . config('app.name'))
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/select2.css') }}"> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('contents')
    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="py-4 my-4 col-lg-12">
                    <h3 class="py-4 text-capitalize font-weight-bolder">create account</h3>
                    <div class="p-4 border rounded theme-card" style="background-color: #eee!important ">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="firstname">First Name
                                        @error('firstname')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>

                                    <input type="text" name="firstname" value="{{ old('firstname') }}"
                                        class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                                        placeholder="First Name" autocomplete="firstname" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="surname">SurName
                                        @error('surname')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" name="surname" value="{{ old('surname') }}"
                                        class="form-control @error('surname') is-invalid @enderror" id="surname"
                                        placeholder="SurName" autocomplete="surname">
                                </div>
                            </div>
                            <div class="mt-4 form-row">
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="email">Email
                                        @error('email')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="phone">Phone
                                        @error('phone')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        placeholder="Phone number">
                                </div>
                            </div>
                            <div class="mt-4 form-row">
                                <div class="col-md-4">
                                    <label style="font-size: 20px;font-weight: 500;" for="role">Register as
                                        Customer/Vendor
                                        @error('current_role')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <select name="current_role"
                                        class="form-control w-100 @error('current_role') is-invalid @enderror"
                                        id="role">
                                        <option>Select your role</option>
                                        <option value="customer" @selected(old('current_role') == 'customer')>As
                                            Customer</option>
                                        <option value="vendor" @selected(old('current_role') == 'vendor')>As
                                            Vendor</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="mobile">State
                                        @error('state')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <select style="padding: 10px 2px!important" name="state"
                                        class="select2 form-control py-2 w-100 @error('state') is-invalid @enderror"
                                        id="state" required="">
                                        @foreach (\App\Models\Province::all() as $state)
                                            <option @selected(old('state') == $state) value="{{ $state->id }}">
                                                {{ $state->state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="mobile">City
                                        @error('city_id')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <select style="padding: 10px 2px!important" name="city_id"
                                        class="w-100 form-control select2 @error('city_id') is-invalid @enderror"
                                        id="city" required="">
                                        <option>First select state</option>
                                    </select>
                                </div>
                                {{-- @livewire('state_city') --}}
                            </div>
                            <div class="my-4 form-row">
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="password">Password
                                        @error('password')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <div class="relative w-100" style="position:relative" x-data="{ type: true }">
                                        <input :type="type ? 'password' : 'text'"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" placeholder="Enter your password">
                                        <span class="absolute cursor-pointer "
                                            style="position:absolute; cursor:pointer; right:27px; bottom:8px"
                                            @click="type = !type">
                                            <svg :class="type ? '' : 'd-none'" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="currentColor" class="bi bi-eye"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                            <svg :class="type ? 'd-none' : ''" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="currentColor"
                                                class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path
                                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path
                                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-size: 20px;font-weight: 500;" for="password_confirmation"> Confirm
                                        Password
                                        @error('passwordpassword_confirmation')
                                            <span class="ml-2 invalid-feedback d-inline" role="alert">
                                                <strong>- {{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <div class="relative w-100" style="position:relative" x-data="{ type: true }">
                                        <input :type="type ? 'password' : 'text'"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            id="password_confirmation" name="password_confirmation"
                                            placeholder="Confirm password">
                                        <span class="absolute cursor-pointer "
                                            style="position:absolute; cursor:pointer; right:27px; bottom:8px"
                                            @click="type = !type">
                                            <svg :class="type ? '' : 'd-none'" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="currentColor" class="bi bi-eye"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                            <svg :class="type ? 'd-none' : ''" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="currentColor"
                                                class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path
                                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path
                                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="" x-data="{ accept: false }">
                                    <label for="">
                                        <input x-model="accept" type="checkbox" name="" id="">
                                    </label>
                                    <a href="{{ route('terms') }}" class="cursor-pointer">
                                        Accept terms and Condition
                                    </a>
                                    <button :disabled="accept == false" type="submit"
                                        class="my-4 ml-1 btn btn-solid primary-btn">create
                                        Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
@push('scripts')
    $('select').niceselect('destroy');
    {{-- <script src="{{ asset('js/select2.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2({
            width: 'resolve',
            theme: 'classic'
        });
        $('#state').on('change', function() {
            var province_id = $(this).val();
            // alert(province_id)
            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: "{{ route('getCities') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'province_id': province_id
                },
                success: function(data) {
                    $('#city').html(data);
                    console.log(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
    </script>
@endpush
