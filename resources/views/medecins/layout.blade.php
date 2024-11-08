<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark-900 dark:text-dark-100">
                    <h1 class="text-blue-500">Liste des rendez-vous</h1>
                </div>
                 <table class="table">
                     <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Nom_patient</th>
                          <th scope="col">Telephone</th>
                          <th scope="col">Date</th>
                          <th scope="col">Heure</th>
                         
                          <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $rendez_vous)

                          <tr>
                            <td>{{$rendez_vous->id}}</td>
                            <td>{{$rendez_vous->nom_patient}}</td>
                            <td>{{$rendez_vous->telephone}}</td>
                            <td>{{$rendez_vous->date}}</td>
                            <td>{{$rendez_vous->heure}}</td>
                            


                            <td>
                              <a href="#" class="btn btn-success"><i class="bi bi-check"></i></a>
                              <a href="#" class="btn btn-danger"><i class="bi bi-x"></i></a>

                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
            </div>
            
        </div>
    </div>
    