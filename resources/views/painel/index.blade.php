@extends('painel.template.main')


@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}

<style>
    .abas {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .abas div {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        gap: 20px;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

        padding: 40px;
        opacity: 0.4;
    }

    .abas div.active {
        background: white;
        opacity: 1;

        box-shadow: 10px 20px 40px rgba(19, 51, 113, 0.05);
    }
</style>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />


@endsection

@section('titulo')
Dashboard / <a style="color: unset" href="{{ route('painel.index') }}">Início</a>
@endsection

@php
    use App\Models\Lead;
@endphp

@section('conteudo')
@include('painel.includes.errors')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboards</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">/ Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
</div>
<!-- end row -->

<div class="row">
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Leads</p>
                        <h4 class="mb-0">{{ $leads->count() }}</h4>
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-archive-in font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Orçamentos</p>
                        <h4 class="mb-0">0</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-money font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Eventos Futuros</p>
                        <h4 class="mb-0">0</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-bar-chart-alt-2 font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Produtos</p>
                        <h4 class="mb-0">{{ $produtos->count() }}</h4>
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Ingredientes</p>
                        <h4 class="mb-0">{{ $ingredientes->count() }}</h4>
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Acessórios</p>
                        <h4 class="mb-0">{{ $acessorios->count() }}</h4>
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- style="background-color: #e3e3e3; padding: 25px;" --}}

<style>
    .fc-h-event {
        border: 1px solid #c9a200 !important;
        border: 1px solid #c9a200 !important;
        background-color: #c9a200 !important;
        background-color: #c9a200 !important;
    }

    .fc-event-title {
        color: #56076D !important;
    }

    button {
        background-color: #56076D !important;
    }

    table a {
        color: #56076D !important;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox card-body" style="background-color: #fff;">
            <div class="ibox-title">
                <h5>Listagem dos Eventos</h5>
            <div class="ibox-content">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

<!-- end page title -->

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>

  
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js'></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var initialLocaleCode = 'pt-br';
      var localeSelectorEl = document.getElementById('locale-selector');
      var calendarEl = document.getElementById('calendar');
  
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        locale: initialLocaleCode,
        buttonIcons: false, // show the prev/next text
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
            @foreach($orcamentos as $orcamento)
                @php
                    $lead = Lead::where("id", $orcamento->lead_id)->first();
                @endphp
            {
                id: 'a',
                title: '{{ $orcamento->tipo }} - {{ $lead->nome }}',
                start: '{{ $orcamento->data }}',
                url: '{{route('painel.leads.orcamento', ['orcamento' => $orcamento->id])}}'
            },
            @endforeach
        ]
      });
  
      calendar.render();
  
      // build the locale selector's options
      calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
        var optionEl = document.createElement('option');
        optionEl.value = localeCode;
        optionEl.selected = localeCode == initialLocaleCode;
        optionEl.innerText = localeCode;
        localeSelectorEl.appendChild(optionEl);
      });
  
      // when the selected option changes, dynamically change the calendar option
      localeSelectorEl.addEventListener('change', function() {
        if (this.value) {
          calendar.setOption('locale', this.value);
        }
      });
  
    });
  
</script>

@endsection