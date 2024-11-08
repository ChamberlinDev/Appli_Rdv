@include('partials.header')
<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/doc3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Bienvenu(e) sur <span>Rencard_Med</span><span> Vous trouverez des specialistes </span></h1>
									<h4>Vous pouvez prendre rendez-vous depuis chez vous via cette plateforme! </h4>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/doc10.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
								<h1>Bienvenu(e) sur <span>Rencard_Med</span><span> Vous trouverez des specialistes </span></h1>
								<h4>Vous pouvez prendre rendez-vous depuis chez vous via cette plateforme! </h4>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/doc7.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
								<h1>Bienvenu(e) sur <span>Rencard_Med</span><span> Vous trouverez des specialistes </span></h1>
								<h4>Vous pouvez prendre rendez-vous depuis chez vous via cette plateforme! </h4>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
        <hr>
           

<x-guest-layout>
    <!-- Session Status -->
    <div class="title">
   
            <h2 class="text-dark" >SE CONNECTER </h2>
            <!-- <img src="assets/img/section-img.png" alt="#"> -->
        </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />
           
    <form method="POST" action="{{ route('login') }}">
        @csrf
       
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-primary"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" class="text-primary" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 text-primary">
        <a href="{{ route('registre') }}">
                {{ __('Je n ai pas de compte medecin!') }}
            </a>
        </div>

        <div class="flex items-center justify-end mt-4" >
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-danger" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    
</x-guest-layout>

@include('partials.footer')
