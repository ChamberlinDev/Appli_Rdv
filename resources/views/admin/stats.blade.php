<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Main Content Area -->
    <div class="container">
        <!-- Grid de trois cartes -->
        <div class="row">
            <!-- Carte 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <i class="bi bi-hospital"></i>
                        <h5 class="card-title">Hopital</h5>
                        <p class="card-text">{{ $hospitalsCount }}</p>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <i class="bi bi-person"></i> 

                        <h5 class="card-title">Medecins</h5>
                        <p class="card-text"> {{ $doctorsCount }}</p>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <i class="bi bi-calendar-event"></i>
                        <h5 class="card-title">Rendez-vous</h5>
                        <p class="card-text">{{ $appointmentsCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.listerdv')
@include('admin.listeMed')
