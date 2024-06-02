<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <title>Hello</title>
</head>
<body>


    <form class="mx-3 my-3" method="POST" action="/register">
        @csrf

        <h1>Hello world</h1>

        

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" value="{{ old('nama' )}}">
            @error('nama')
            <div class="invalid-feedback">
                    {{ $message }}
            </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" name="umur" class="form-control rounded-top @error('umur') is-invalid @enderror" value="{{ old('umur' )}}">
            @error('umur')
             <div class="invalid-feedback">
                    {{ $message }}
                </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" value="{{ old('email' )}}">

            @error('email')
            <div class="invalid-feedback">
                    {{ $message }}
            </div>
             @enderror

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror">

            @error('password')
             <div class="invalid-feedback">
                    {{ $message }}
                </div>
             @enderror


        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <div class="d-flex justify-content-around">
        <h1 class="text-primary">Hello</h1>
        <h2>Hello</h2>     
    </div>

   

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>