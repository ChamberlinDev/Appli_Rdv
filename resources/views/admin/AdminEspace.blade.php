<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Lien vers Bootstrap CDN -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <title>Sidebar Exemple</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Sidebar styles */
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: cornflowerblue;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #34495e;
        }

        .sidebar ul li:hover {
            background-color: #16a085;
            cursor: pointer;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }

        /* Active link */
        .active {
            background-color: #16a085;
        }

    </style>
</head>
<body>
<!-- Debut Preloader -->
<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Fin Preloader -->
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li id="doctors" onclick="showContent('doctors')">Liste des Médecins</li>
            <li id="appointments" onclick="showContent('appointments')">Historique des Rendez-vous</li>
			<li id="stats" onclick="showContent('stats')">Statistiques</li>

        </ul>
		
	<a href="/" class="btn btn-danger logout-btn">Déconnexion</a>
    </div>

    <!-- Main Content Area -->
    <div class="content">
        <div class="col-lg-3 col-md-3 col-12">
            <div class="logo">
                <a href="/Admin"><img src="assets/img/Medical Care2.png" alt="#"></a>
            </div>
			<hr>
        </div>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h3 id="page-title">Bienvenue sur l'espace Admin</h3>
        <div id="content-area">
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

			@include('admin.listeMed')
			<hr>
			@include('admin.listerdv')
        </div>
    </div>

    <script>
        function showContent(page) {
            let contentArea = document.getElementById("content-area");
            let pageTitle = document.getElementById("page-title");

            // Reset active class for all links
            let items = document.querySelectorAll('.sidebar ul li');
            items.forEach(item => {
                item.classList.remove('active');
            });

            // Set active class for the clicked item
            document.getElementById(page).classList.add('active');

            // Update content based on the selected page
            if (page === 'accounts') {
                pageTitle.textContent = "Liste des Comptes";
                contentArea.innerHTML = "<p>Voici la liste des comptes.</p>";
            } else if (page === 'doctors') {
                pageTitle.textContent = "Liste des Médecins";
                contentArea.innerHTML = `
                @include('admin.listeMed')`;
            } else if (page === 'stats') {
                pageTitle.textContent = "Statistiques";
                contentArea.innerHTML = `
                @include('admin.stats')`;
            } else if (page === 'appointments') { // Affichage de l'historique des rendez-vous
                pageTitle.textContent = "Historique des Rendez-vous";
                contentArea.innerHTML = `
                @include('admin.listerdv')`;
            }
        }
    </script>

</body>
</html>
