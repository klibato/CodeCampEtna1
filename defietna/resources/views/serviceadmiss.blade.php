<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/pagestrombi.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service des admissions</title>
</head>

<body>
    <div class="container">
        @include('header')
        <div class="text">
            <h2>Service des admissions :</h2>
            <div class="boxpicture">
                @foreach ($users as $user)
                    <div class="picture2">
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->phone }}</p>
                        <a href="https://intra.etna-alternance.net/#/user/{{ $user->name }}"> <img
                                src="https://auth.etna-alternance.net/api/users/{{ $user->name }}/photo" alt=""></a>
                        @if (in_array('super-admin', Session::get('user')->groups))
                            <form class="formulairelogin" action="{{ url('delete/' . $user->id) }}" method="get">
                                <button type="submit">Supprimer</button>
                            </form>
                        @endif

                    </div>
                @endforeach
            </div>
        </div>
        @include('footer')
</body>

</html>
