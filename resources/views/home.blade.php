@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <painel titulo="Dashboard">
                    Conteúdo

                    <div class="row">
                        <div class="col-4">
                            <painel titulo="Filho 1" cor="blue">
                                Conteúdo 1.
                            </painel>
                        </div>

                        <div class="col-4">
                            <painel titulo="Filho 2" cor="green">
                                Conteúdo 2.
                            </painel>
                        </div>
                        <div class="col-4">
                            <painel titulo="Filho 3" cor="orange">
                                Conteúdo 3.
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
