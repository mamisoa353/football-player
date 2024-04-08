<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur notre site</title>
</head>

<body>
    <h1>Bienvenue {{ $user->name }} !</h1>

    <p>Nous sommes ravi de faire affaire avec vous.</p>
    <p>Voici le produit que vous avez commandez</p>
    <p>-{{ $produit->nom }} de marque {{ $produit->marque }}</p>

    <p>Cordialement,</p>
    <p>L'équipe de notre site</p>
</body>

</html>
