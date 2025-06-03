<!-- filepath: resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Offre Spéciale - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
// ...existing code...
<header style="background:#2d3a6e; padding:0 5%;">
    <div style="display:flex; align-items:center; justify-content:space-between; height:80px;">
        <!-- Logo à gauche (zone rouge) -->
        <div style="display:flex; align-items:center; gap:12px;">
            <img src="IMG/image.png" alt="Logo Web Market Consulting" style="height:48px; border-radius:8px; background:#fff; padding:4px;">
            <span style="color:#fff; font-size:1.5rem; font-weight:600;">Web Market Consulting</span>
        </div>
        <!-- Navigation à droite (zone orange) -->
        <nav>
            <ul style="display:flex; gap:32px; list-style:none; margin:0; padding:0;">
                <li><a href="{{ route('home') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Accueil</a></li>
                <li><a href="{{ route('about') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">À propos</a></li>
                <li><a href="{{ route('services') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Nos offres</a></li>
                <li><a href="{{ route('contact.show') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
// ...existing code...
<section class="landing-hero">
    <h2>Profitez d’un Audit Digital Gratuit !</h2>
    <p>Boostez la visibilité de votre entreprise avec notre offre exclusive réservée aux entreprises locales. Analyse personnalisée, conseils d’experts et plan d’action sur-mesure.</p>
    <ul class="landing-benefits">
        <li>Analyse complète de votre présence en ligne</li>
        <li>Recommandations personnalisées</li>
        <li>Conseil gratuit de 30 minutes</li>
    </ul>
    <a href="{{ route('contact.show') }}" class="cta">Je profite de l’offre</a>
</section>
<section class="landing-testimonials">
    <h3>Ils nous font confiance</h3>
    <blockquote>
        “Grâce à Web Market Consulting, notre visibilité a doublé en 2 mois !”<br>
        <span>- Entreprise Alpha, Maroc</span>
    </blockquote>
    <blockquote>
        “Une équipe à l’écoute et des résultats concrets.”<br>
        <span>- PME Digitale, Côte d’Ivoire</span>
    </blockquote>
</section>
<footer>
    <p>&copy; 2025 Web Market Consulting. Tous droits réservés.</p>
</footer>

</body>
</html>