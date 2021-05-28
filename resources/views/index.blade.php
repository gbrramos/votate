<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <title>Votate</title>
</head>
<style>
    .center {
        margin: 0 auto;
    }

    .text-center {
        text-align: center;
    }
</style>
<div class="container clearfix">
    <div class="col-12 text-center py-3">
        <h1>Votate</h1>
    </div>
    <div class="row">
        <div class="col-md-5 col-12 center">
            <div class="card col-12">
                <div class="card-head text-center pt-2">
                    <h3>Faça sua enquete aqui!</h3>
                    <i class="fas fa-check text-success" style="font-size: 5rem"></i>
                </div>
                <div class="card-body">
                    <div class="text-center">Faça seu login e aproveite!</div>
                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="psw" class="form-label">Password</label>
                            <input type="password" class="form-control" id="psw">
                            <a href="" class="p-2"><small>Esqueci minha senha</small></a>
                        </div>
                        <button type="submit" class="btn btn-success">Entrar</button>
                        <a href=""  class="btn btn-primary float-end">Cadastrar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>