<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{URL::asset('csss/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Modifier Compte</h3></div>
                                <div class="card-body">
                                    <form  action="{{route('user.update.store')}}" method="POST">
                                     @csrf
                                     <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" value="{{$user->name}}" type="text" placeholder="name@example.com" name="name" />
                                        <label for="inputEmail">Nom</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail"  type="email" placeholder="name@example.com" name="email"  value="{{$user->email}}" />
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                   
                                   <div class="form-floating mb-3">
                                     <select class="form-control  form-control-lg" name="type_user">
                                     
                                       <option  value="{{$user->type_user->id}}">{{$user->type_user->nom_type }}</option>
                                        <option  value="1">Editeur</option>
                                         <option  value="3">Administrateur</option>
                                  </select>
                                   
                                </div>
                                <input type="text" hidden="hidden" name="id" value="{{$user->id}}">
                                 

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                    <button class="btn btn-primary" type="submit"> Modifier</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/scripts.js')}}"></script>
</body>
</html>
