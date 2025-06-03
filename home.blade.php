<!-- filepath: resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
<img src="IMG/image.png" alt="Logo Web Market Consulting" style="height:54px; border-radius:8px;">
    <meta charset="UTF-8">
    <title>Accueil - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .hero {
            background: linear-gradient(120deg, #e0e7ff 60%, #fff 100%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 5%;
            gap: 40px;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-img {
            max-width: 40%;
        }
        .hero-img img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        .features {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
            gap: 24px;
        }
        .feature {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 24px 18px;
            text-align: center;
            flex: 1;
        }
        .feature img {
            width: 60px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
<header>
    <h1>Web Market Consulting</h1>
    <nav>
        <ul><!-- filepath: resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fb;
            margin: 0;
        }
        header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 0 5%;
        }
        nav ul {
            display: flex;
            gap: 32px;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav a {
            text-decoration: none;
            color: #2d3a6e;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #6366f1;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 5% 40px 5%;
            background: linear-gradient(120deg, #e0e7ff 60%, #fff 100%);
            border-radius: 0 0 32px 32px;
            gap: 40px;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-text h2 {
            font-size: 2.8rem;
            color: #2d3a6e;
            margin-bottom: 18px;
        }
        .hero-text p {
            font-size: 1.2rem;
            color: #4b5563;
            margin-bottom: 32px;
        }
        .cta {
            background: #6366f1;
            color: #fff;
            padding: 16px 36px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }
        .cta:hover {
            background: #4338ca;
        }
        .hero-img {
            max-width: 40%;
        }
        .hero-img img {
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        }
        .features {
            display: flex;
            justify-content: space-around;
            margin: 60px 0 40px 0;
            gap: 32px;
        }
        .feature {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 32px 24px;
            text-align: center;
            flex: 1;
            transition: box-shadow 0.2s;
        }
        .feature:hover {
            box-shadow: 0 8px 32px rgba(99,102,241,0.10);
        }
        .feature img {
            width: 60px;
            margin-bottom: 18px;
        }
        .feature h3 {
            color: #2d3a6e;
            margin-bottom: 10px;
        }
        .feature p {
            color: #4b5563;
        }
        .about-section {
            background: #fff;
            border-radius: 16px;
            margin: 0 5% 40px 5%;
            padding: 48px 32px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
        }
        .about-section h2 {
            color: #6366f1;
            margin-bottom: 18px;
        }
        .about-section p {
            color: #374151;
            font-size: 1.1rem;
        }
        footer {
            background: #2d3a6e;
            color: #fff;
            text-align: center;
            padding: 24px 0;
            border-radius: 24px 24px 0 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
<header>
    <div style="display:flex; align-items:center; gap:18px; padding:24px 0;">
        <img src="{{ asset('logo-wmc.png') }}" alt="Logo Web Market Consulting" style="height:54px; border-radius:8px;">
        <h1 style="color:#6366f1; font-size:2rem; margin:0;">Web Market Consulting</h1>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('about') }}">À propos</a></li>
            <li><a href="{{ route('services') }}">Nos offres</a></li>
            <li><a href="{{ route('contact.show') }}">Contact</a></li>
            <li><a href="{{ route('landing') }}">Offre spéciale</a></li>
        </ul>
    </nav>
</header>
<section class="hero">
    <div class="hero-text">
        <h2>Votre partenaire digital pour une croissance durable</h2>
        <p>
            Nous accompagnons les entreprises africaines et européennes dans leur transformation digitale.<br>
            Stratégie, développement web, marketing et accompagnement sur-mesure.
        </p>
        <a href="{{ route('contact.show') }}" class="cta">Demandez votre audit gratuit</a>
    </div>
    <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Consulting Illustration">
    </div>
</section>

<section class="features">
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Conseil">
        <h3>Conseil stratégique</h3>
        <p>Des recommandations personnalisées pour accélérer votre digitalisation.</p>
    </div>
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Visibilité">
        <h3>Visibilité digitale</h3>
        <p>Des solutions innovantes pour booster votre présence en ligne.</p>
    </div>
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Support">
        <h3>Support & accompagnement</h3>
        <p>Une équipe réactive à vos côtés à chaque étape de votre projet.</p>
    </div>
</section>

<section class="about-section">
    <h2>À propos de Web Market Consulting</h2>
    <p>
        Web Market Consulting, c’est une équipe passionnée par le digital et l’innovation. Nous croyons en la proximité, l’écoute et l’excellence pour bâtir des stratégies efficaces et durables.<br>
        Notre mission : accompagner les entreprises dans leur croissance grâce à des solutions digitales adaptées à chaque marché.
    </p>
</section>

<footer>
    <p>&copy; 2025 Web Market Consulting. Tous droits réservés.</p>
</footer>
</body>
</html>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('about') }}">À propos</a></li>
            <li><a href="{{ route('services') }}">Nos offres</a></li>
            <li><a href="{{ route('contact.show') }}">Contact</a></li>
            <li><a href="{{ route('landing') }}">anding</a></li>
        </ul>
    </nav>
</header>
<section class="hero">
    <div class="hero-text">
        <h2>Développez votre présence digitale</h2>
        <p>Des solutions sur-mesure pour les entreprises locales et internationales.</p>
        <a href="{{ route('contact.show') }}" class="cta">Demandez votre mini-offre</a>
    </div>
    <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Consulting Illustration">
    </div>
</section>

<section class="features">
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Conseil">
        <h3>Conseil personnalisé</h3>
        <p>Nous analysons vos besoins et proposons des stratégies adaptées à votre marché.</p>
    </div>
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Visibilité">
        <h3>Visibilité digitale</h3>
        <p>Boostez votre présence en ligne grâce à nos solutions innovantes.</p>
    </div>
    <div class="feature">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Support">
        <h3>Support réactif</h3>
        <p>Notre équipe vous accompagne à chaque étape de votre transformation digitale.</p>
    </div>
</section>

<footer>
    <p>&copy; 2025 Web Market Consulting. Tous droits réservés.</p>
</footer>
<script>
    // Animation d’apparition sur les features
    document.addEventListener('DOMContentLoaded', function() {
        const features = document.querySelectorAll('.feature');
        features.forEach((feature, i) => {
            feature.style.opacity = 0;
            feature.style.transform = 'translateY(40px)';
            setTimeout(() => {
                feature.style.transition = 'all 0.7s cubic-bezier(.68,-0.55,.27,1.55)';
                feature.style.opacity = 1;
                feature.style.transform = 'translateY(0)';
            }, 300 + i * 200);
        });
    });

    // Effet sur le bouton CTA
    const cta = document.querySelector('.cta');
    if(cta) {
        cta.addEventListener('mousemove', e => {
            cta.style.transform = 'scale(1.06)';
        });
        cta.addEventListener('mouseleave', e => {
            cta.style.transform = 'scale(1)';
        });
    }

    // Animation du logo au survol
    const logo = document.querySelector('header img');
    if(logo) {
        logo.addEventListener('mouseenter', () => {
            logo.style.transition = 'transform 0.4s cubic-bezier(.68,-0.55,.27,1.55)';
            logo.style.transform = 'rotate(-8deg) scale(1.12)';
        });
        logo.addEventListener('mouseleave', () => {
            logo.style.transform = 'rotate(0) scale(1)';
        });
    }
</script>
</body>
</html>