<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>Afficher un Etudiant</h1>
    <table class="table table-dark">
  <thead class="thead-dark">
    <tr>
        <th scope="col">CNE</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Ville</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="2" >operation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{$etudiant->cne}}</td>
        <td>{{$etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->ville}}</td>
        <td>{{$etudiant->email}}</td>
      <td colspan="2">
       
        <a class="btn btn-success"  role="button"  href="{{route('etudiants.edit',$etudiant->id)}}" >Modifier {{$etudiant->nom}}</a></a><br>
      <form action="{{route('etudiants.destroy',$etudiant->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger" value="suprimer {{$etudiant->nom}}">
      </form>
   
    </td>
    </tr>
  </tbody>
</table>
</body>
</html>
