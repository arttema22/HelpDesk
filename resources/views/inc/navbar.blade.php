<div class="px-4 py-5 mb-5 hero">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white h2" href="{{route('home')}}">
                <img src="{{asset('img/logo_sm.png')}}" width="40px" alt="{{config('app.name')}}"
                    class="d-inline-block align-text-center color-wite">
                {{config('app.name')}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav h4">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reception.ticket')}}">Отправить обращение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reception.status')}}">Узнать статус обращения</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="display-1 fw-bold">@yield('title')</h1>
    <div class="col-lg-6">
        <p class="lead mb-4">@yield('description')</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-flex-start">
            <a href="{{ route('reception.ticket') }}" class="btn btn-light">Написать обращение</a>
            <a class="btn btn-outline-light" data-bs-toggle="offcanvas" href="#offcanvas" role="button"
                aria-controls="offcanvas">
                Правила обращения
            </a>
        </div>
    </div>
</div>
@include('inc.widgets.rule_offcanvas')
