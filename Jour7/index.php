<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<header class="bg-blue-500 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-lg font-bold">Mon Site</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Accueil</a></li>
                <li><a href="#" class="hover:underline">Inscription</a></li>
                <li><a href="#" class="hover:underline">Connexion</a></li>
                <li><a href="#" class="hover:underline">Rechercher</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container mx-auto py-8">
    <section class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Créer un compte</h2>
        <form action="#" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="civilite">Civilité</label>
                <div class="flex items-center">
                    <input type="radio" id="civilite_m" name="civilite" value="Monsieur" class="mr-2">
                    <label for="civilite_m" class="mr-4">Monsieur</label>
                    <input type="radio" id="civilite_mme" name="civilite" value="Madame" class="mr-2">
                    <label for="civilite_mme">Madame</label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="prenom">Prénom</label>
                <div class="relative">
                    <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nom">Nom</label>
                <div class="relative">
                    <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="adresse">Adresse</label>
                <div class="relative">
                    <input type="text" id="adresse" name="adresse" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Adresse Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="mot_de_passe">Mot de passe</label>
                <div class="relative">
                    <input type="password" id="mot_de_passe" name="mot_de_passe" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="mot_de_passe_confirmation">Confirmer le mot de passe</label>
                <div class="relative">
                    <input type="password" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                    <svg class="absolute top-2 right-3 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10C20 4.48 15.52 0 10 0zm0 18.75c-4.55 0-8.25-3.7-8.25-8.25S5.45 2.25 10 2.25s8.25 3.7 8.25 8.25S14.55 18.75 10 18.75z"/></svg>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Passions</label>
                <div class="flex items-center">
                    <input type="checkbox" id="passion_informatique" name="passions[]" value="Informatique" class="mr-2">
                    <label for="passion_informatique" class="mr-4">Informatique</label>
                    <input type="checkbox" id="passion_voyages" name="passions[]" value="Voyages" class="mr-2">
                    <label for="passion_voyages" class="mr-4">Voyages</label>
                    <input type="checkbox" id="passion_sport" name="passions[]" value="Sport" class="mr-2">
                    <label for="passion_sport" class="mr-4">Sport</label>
                    <input type="checkbox" id="passion_lecture" name="passions[]" value="Lecture" class="mr-2">
                    <label for="passion_lecture">Lecture</label>
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Valider</button>
        </form>
    </section>
</div>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <ul class="flex justify-center space-x-4">
            <li><a href="#" class="hover:underline">Accueil</a></li>
            <li><a href="#" class="hover:underline">Inscription</a></li>
            <li><a href="#" class="hover:underline">Connexion</a></li>
            <li><a href="#" class="hover:underline">Rechercher</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
