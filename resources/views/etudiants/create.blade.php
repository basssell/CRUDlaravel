<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body> 
   
   

    <h1>Ajouter un Etudiant</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('etudiants.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cne" >CNE de l'etudiant</label>
            <input type="text" name="cne" class="form-control" id="cne" aria-describedby="emailHelp" placeholder="CNE">
          </div>
  <div class="form-group">
    <label for="nom" >Nom de l'etudiant</label>
    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenom" >Prenom de l'etudiant</label>
    <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="emailHelp" placeholder="Prenom">
  </div>
  
  <div class="form-group">
    <label for="email" >Email de l'etudiant</label>
    <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="ville">Ville de l'etudiant</label>
    <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville">
  </div>

  <button type="submit" value="Ajouter un eleve" class="btn btn-info">Submit</button>
  <div class="flex space-x-2 justify-center">
   
   </div>
</form>
 </body>
</html> 



