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
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajouter Un Article</h3></div>
                                <div class="card-body">
                                    <form  action="{{route('article.admin.store')}}" method="POST">
                                       @csrf
                                       <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="titre de l'article" name="titre" />
                                        <label for="inputEmail">Titre</label>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1">Contenue de L'article</label>
                                        <textarea class="form-control" name="contenue" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-floating mb-3">
                                     <select class="form-control  " name="categorie">
                                        @foreach($categories as $value)

                                       
                                        <option value="{{$value->id}}"> {{$value->nom}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Image</label>
                                </div>






                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                    <button class="btn btn-primary" type="submit"> Ajouter</button>
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
