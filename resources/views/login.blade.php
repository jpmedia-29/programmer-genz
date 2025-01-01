<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Programmer Gen - Z</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/style.css">

    <style>
      
        #logreg-forms {
            width: 412px;
            margin: 10vh auto;
            background-color: #f3f3f3;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        #logreg-forms form {
            width: 100%;
            max-width: 410px;
            padding: 15px;
            margin: auto;
        }

        #logreg-forms .form-control {
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        #logreg-forms .form-control:focus {
            z-index: 2;
        }

        #logreg-forms .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #logreg-forms .form-signin input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #logreg-forms .social-login {
            width: 390px;
            margin: 0 auto;
            margin-bottom: 14px;
        }

        #logreg-forms .social-btn {
            font-weight: 100;
            color: white;
            width: 190px;
            font-size: 0.9rem;
        }

        #logreg-forms a {
            display: block;
            padding-top: 10px;
            color: lightseagreen;
        }

        #logreg-forms button[type="submit"] {
            margin-top: 10px;
        }

        #logreg-forms .facebook-btn {
            background-color: #3C589C;
        }

        #logreg-forms .google-btn {
            background-color: #DF4B3B;
        }

        /* Mobile view */
        @media screen and (max-width: 500px) {
            #logreg-forms {
                width: 300px;
            }

            #logreg-forms .social-login {
                width: 200px;
                margin: 0 auto;
                margin-bottom: 10px;
            }

            #logreg-forms .social-btn {
                font-size: 1.3rem;
                font-weight: 100;
                color: white;
                width: 200px;
                height: 56px;
            }

            #logreg-forms .facebook-btn:after {
                content: 'Facebook';
            }

            #logreg-forms .google-btn:after {
                content: 'Google+';
            }
        }
    </style>
</head>

<body>
    <div id="logreg-forms">
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form class="form-signin" method="POST" action="{{ url('aksi_login') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">Login Admin</h1>

            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <input type="password" id="password" name="password" class="form-control mt-3" placeholder="Password" required>

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
            <hr>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
</body>

</html>
