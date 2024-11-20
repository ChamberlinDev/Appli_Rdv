@include('partials.header')

<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('assets/img/doc5.jpg')">
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
				<div class="single-slider" style="background-image:url('assets/img/doc9.jpg')">
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
				<div class="single-slider" style="background-image:url('assets/img/doc4.jpg')">
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
       
        <section>
<div class="section-title">
<hr>
		<h2 class="text-primary" >S'ENREGISTRER </h2>
		<!-- <img src="assets/img/section-img.png" alt="#"> -->
	</div>
    </section>
<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
       
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" class="text-primary" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- code_hopital-->
        <div class="mt-2">
            <x-input-label for="code_etablissement" :value="__('Code etablissement')" class="text-primary" />
            <x-text-input id="code_etablissement" class="block mt-1 w-full" type="text" name="code_etablissement" :value="old('code_etablissement')" required autofocus autocomplete="code_etablissement" />
            <x-input-error :messages="$errors->get('code_etablissement')" class="mt-2" />
        </div>
         <!-- nom_hopital-->
         <div class="mt-2">
            <x-input-label for="nom_etablissement" :value="__('Nom etablissement')" class="text-primary" />
            <x-text-input id="nom_etablissement" class="block mt-1 w-full" type="text" name="nom_etablissement" :value="old('nom_etablissement')" required autofocus autocomplete="nom_etablissement" />
            <x-input-error :messages="$errors->get('nom_etablissement')" class="mt-2" />
        </div>

         <!-- Specialite -->
         <div class="mt-2">
            <x-input-label for="specialite" :value="__('Specialite')" class="text-primary" />
            <x-text-input id="specialite" class="block mt-1 w-full" type="text" name="specialite" :value="old('specialite')" required autofocus autocomplete="specialite" />
            <x-input-error :messages="$errors->get('specialite')" class="mt-2" />
        </div>
        <!-- Disponibilité -->
        <div class="mt-2 d-none">
            <x-input-label for="disponibilite" :value="__('Disponibilité')" class="text-primary"/>
            <select id="disponibilite" name="disponibilite" class="form-select block mt-1 w-full" required>
                <option value="Disponible" {{ old('disponibilite') == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Pas disponible" {{ old('disponibilite') == 'Pas disponible' ? 'selected' : '' }}>Pas disponible</option>
            </select>
            <x-input-error :messages="$errors->get('disponibilite')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" class="text-primary"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Mot de passe')" class="text-primary" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="text-primary" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 text-primary">
            <a href="{{ route('login') }}">
                {{ __('J ai deja un compte medecin!') }}
            </a>

            <x-primary-button class="ms-4 text-primary">
                {{ __('Soumettre') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@include('partials.footer')