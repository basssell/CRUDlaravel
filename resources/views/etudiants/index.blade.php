
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body> 
    <h1>liste des Etudiants</h1>
    @if($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif
    <a class="btn btn-primary"  role="button" href="{{route('etudiants.create')}}">Ajouter un Etudiant</a>
    <table class="table table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Ville</th>
      <th scope="col">Email</th>
      <th scope="col">Profil</th>
    </tr>
  </thead>
  <tbody>
     @foreach($etudiants as $etudiant)
    <tr>
      <td>{{$etudiant->cne}}</td>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}}</td>
      <td>{{$etudiant->ville}}</td>
      <td>{{$etudiant->email}}</td>
      <td>  <a class="btn btn-success"  role="button" href="{{route('etudiants.show', $etudiant->id)}}">Profil de {{$etudiant->nom}}</a></td>
     
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

