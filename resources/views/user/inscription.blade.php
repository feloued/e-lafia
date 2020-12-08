@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inscription') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inscription') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--PRENOM-->
                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->
                            <!--Genre-->
                            <div class="form-group row">

                                <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

                                <div class="col-md-6">
                                    Féminin <input  id="f" type="radio"  name="genre"  required autocomplete="genre" autofocus>

                                    Masculin <input id="h" type="radio"  name="genre"  required autocomplete="genre" autofocus>


                                </div>
                            </div>
                            <!--************-->

                            <!--Date de naissance-->
                            <div class="form-group row">
                                <label for="dateNaiss" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                                <div class="col-md-6">
                                    <input id="dateNaiss" type="date" class="form-control @error('dateNaiss') is-invalid @enderror" name="dateNaiss" value="{{ old('dateNaiss') }}" required autocomplete="dateNaiss" autofocus>

                                    @error('dateNaiss')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->

                            <!--pays d'origine-->
                            <div class="form-group row">
                                <label for="paysOrigine" class="col-md-4 col-form-label text-md-right">{{ __("Pays d'origine") }}</label>

                                <div class="col-md-6">
                                    <input id="paysOrigine" type="text" class="form-control @error('paysOrigine') is-invalid @enderror" name="paysOrigine" value="{{ old('paysOrigine') }}" required autocomplete="paysOrigine" autofocus>

                                    @error('paysOrigine')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->
                            <!--lieu de naissance-->
                            <div class="form-group row">
                                <label for="lieuNaiss" class="col-md-4 col-form-label text-md-right">{{ __("Lieu de naissance") }}</label>

                                <div class="col-md-6">
                                    <input id="lieuNaiss" type="text" class="form-control @error('lieuNaiss') is-invalid @enderror" name="lieuNaiss" value="{{ old('lieuNaiss') }}" required autocomplete="lieuNaiss" autofocus>

                                    @error('lieuNaiss')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->


                            <!--spécialité-->
                            <div class="form-group row">
                                <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __("Spécialité") }}</label>

                                <div class="col-md-6">
                                    <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>

                                    @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->
                            <!--nom de la structure-->
                            <div class="form-group row">
                                <label for="nom_structure" class="col-md-4 col-form-label text-md-right">{{ __("Nom de la structure") }}</label>

                                <div class="col-md-6">
                                    <input id="nom_structure" type="text" class="form-control @error('nom_structure') is-invalid @enderror" name="nom_structure" value="{{ old('nom_structure') }}" required autocomplete="nom_structure" autofocus>

                                    @error('nom_structure')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <!--************-->


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
