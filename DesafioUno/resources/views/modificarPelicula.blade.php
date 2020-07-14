@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modificar Pelicula') }}</div>

                <div class="card-body">
                    <form method="POST" action="modificar">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control " name="title" value="" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                            <div class="col-md-6">
                                <input id="rating" type="text" class="form-control" name="rating" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="awards" class="col-md-4 col-form-label text-md-right">{{ __('Awards') }}</label>

                            <div class="col-md-6">
                                <input id="awards" type="text" class="form-control" name="awards" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar') }}
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
