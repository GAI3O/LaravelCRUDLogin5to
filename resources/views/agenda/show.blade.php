@extends('layouts.app')

@section('template_title')
    {{ $agenda->name ?? 'Show Agenda' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Agenda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('agenda.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $agenda->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $agenda->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $agenda->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $agenda->dirección }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
