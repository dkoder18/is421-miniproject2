<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
        <main role="main" class="container">

            <div class="starter-template">
                <h1>About the Project</h1>
                <p class="lead">
                    1.  Write a feature test to check if the register return a 200 status code.<br>

                    2.  Write a feature test to check if the login pages return a 200 status code.<br>

                    3.  Write a feature test to check if your about page returns a 200 status code.<br>

                    4.  Write a feature test to check if your contact page returns a 200 status code.<br>

                    5.  Create a unit test to insert a user into the users table.<br>

                    6.  Create a unit test to update the name of a user in the database to Steve Smith.<br>

                    7.  Create a unit test to delete a user in the database.<br>

                    8.  Create a unit test to count the number of records inserted by the database seed.  i.e. $userCount = 50.<br>

                    9.  Create a unit test to test inserting a car.<br>

                    10.  Create a unit test to test updating a car year to 2000.<br>

                    11. Create a unit test to test deleting a car.<br>

                    12.  Create a unit test to test to count the number of records inserted by the database seed.  i.e. $carCount = 50.<br>

                    13.   Create a unit test to check if a car's year is an integer.<br>

                    14.  Create a unit test to check if a car's make is either ford / honda / toyota.<br>

                    15.  Create a unit tests to check that the model is a string.<br>
                </p>
            </div>

        </main><!-- /.container -->
    </body>
</html>
