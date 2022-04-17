<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body>
     <div class="container-fluid">
         <div class="card col-md-6 mx-auto mt-5">
            <div class="card-header">
                <h3 class="text-center fw-bold text-primary">Contact form</h3>
            </div>
            <div class="card-body">
                <form action="{{route('contact.send')}}" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom Prenom</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" required>
        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger col-md-3 fs-5">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</body>

</html>