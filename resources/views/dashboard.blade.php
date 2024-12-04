@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Control de revisión de Portafolios</h1>
@stop

@section('content')
<div class="row">
    <!-- Cuadros informativos -->
    <div class="col-lg-3 col-6">
        <!-- Small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>Portafolios Revisados</p>
            </div>
            <div class="icon">
                <i class="fas fa-folder-check"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- Small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>70%</h3>
                <p>Revisión Completada</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- Small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>30</h3>
                <p>Docentes Pendientes</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-clock"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- Small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>5</h3>
                <p>Alertas Críticas</p>
            </div>
            <div class="icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<!-- Gráficos -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Progreso de Revisiones</h3>
            </div>
            <div class="card-body">
                <canvas id="revisionesChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Estado de Portafolios</h3>
            </div>
            <div class="card-body">
                <canvas id="estadoChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Tabla -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Últimos Portafolios Subidos</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Docente</th>
                    <th>Fecha de Subida</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>2024-11-28</td>
                    <td><span class="badge bg-success">Revisado</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Ver</a></td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>2024-11-27</td>
                    <td><span class="badge bg-warning">Pendiente</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Ver</a></td>
                </tr>
                <tr>
                    <td>Carlos Ruiz</td>
                    <td>2024-11-26</td>
                    <td><span class="badge bg-danger">Rechazado</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Ver</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    {{-- Agregar estilos personalizados --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Progreso de Revisiones
    const revisionesCtx = document.getElementById('revisionesChart').getContext('2d');
    const revisionesChart = new Chart(revisionesCtx, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
            datasets: [{
                label: 'Revisiones',
                data: [10, 20, 30, 40, 50, 60],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        }
    });

    // Estado de Portafolios
    const estadoCtx = document.getElementById('estadoChart').getContext('2d');
    const estadoChart = new Chart(estadoCtx, {
        type: 'doughnut',
        data: {
            labels: ['Revisados', 'Pendientes', 'Rechazados'],
            datasets: [{
                label: 'Estado',
                data: [60, 30, 10],
                backgroundColor: ['#28a745', '#ffc107', '#dc3545']
            }]
        }
    });
</script>
@stop
