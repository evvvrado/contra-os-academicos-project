
@extends('site.template.main', ['titulo' => SIGLA . ' Blog'])

@section('body_attr', 'id=blog')

@section('content')

    <div class="my-5 pt-sm-5" style="padding: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align: center">
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-4">
                            <div class="maintenance-img">
                                <img style="max-width: 30%; height: auto;margin: auto" src="{{ asset('admin/assets/images/coming-soon.svg') }}" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                        <h4 class="mt-5">Em breve...</h4>
                        <p class="text-muted">Muito em breve iremos disponibilizar a assinatura do usuário, onde você poderá acessar varios conteúdos exclusivos de nossa plataforma!</p>

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <div data-countdown="2021/12/31" class="counter-number"></div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

@endsection