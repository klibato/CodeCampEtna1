<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        @include('header')
        <div class="boxadmin">
            <form class="product" action="/admin" method="post">
                @csrf
                <h1>Ajouter un membre :</h1>
                <nav>
                    <ul>
                        <div style="margin: 20px;">
                            <a> Nom : </a><br>
                            <input type="text" placeholder="carra_c" name="name">
                        </div>
                        <div style="margin: 20px;">
                            <a> Poste : </a><br>
                            <select name="job">
                                <option value="1">Direction</option>
                                <option value="2">Service pédagogique</option>
                                <option value="3">Service administratif</option>
                                <option value="4">Service Relations École-Entreprise (REEN)</option>
                                <option value="5">Service com et admissions</option>
                                <option value="6">Le BLU</option>
                                <option value="7">Le Studio</option>
                                <option value="8">Service RH</option>
                            </select>
                        </div>
                        <div style="margin: 20px;">
                            <a> Téléphone : </a><br>
                            <input type="tel" placeholder="0601020304" name="phone">
                        </div>
                        <div style="margin: 20px;">
                            <a> Mail : </a><br>
                            <input type="email" placeholder=" carra_c@etna-alternance.net" name="email">
                        </div>
                    </ul>
                </nav>
                <button class="button_admin" type="submit">Ajouter</button>
                <input type="submit" value="test">
            </form>

        </div>

    </div>

</body>

</html>
