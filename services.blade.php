<!-- filepath: resources/views/services.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos offres - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .services-hero {
            background: linear-gradient(120deg, #e0e7ff 60%, #fff 100%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 5%;
            gap: 40px;
        }
        .services-img {
            max-width: 40%;
        }
        .services-img img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        .services-list {
            display: flex;
            justify-content: space-around;
            gap: 24px;
            margin: 40px 0;
        }
        .service {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 24px 18px;
            text-align: center;
            flex: 1;
        }
        .service img {
            width: 60px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>

<header style="background:#2d3a6e; padding:0 5%;">
    <div style="display:flex; align-items:center; justify-content:space-between; height:80px;">
        
        <div style="display:flex; align-items:center; gap:12px;">
            <img src="IMG/image.png" alt="Logo Web Market Consulting" style="height:48px; border-radius:8px; background:#fff; padding:4px;">
            <span style="color:#fff; font-size:1.5rem; font-weight:600;">Web Market Consulting</span>
        </div>
        
        <nav>
            <ul style="display:flex; gap:32px; list-style:none; margin:0; padding:0;">
                <li><a href="{{ route('home') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Accueil</a></li>
                <li><a href="{{ route('about') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">À propos</a></li>
                <li><a href="{{ route('services') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Nos offres</a></li>
                <li><a href="{{ route('contact.show') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Contact</a></li>
                <li><a href="{{ route('landing') }}" style="color:#fff; text-decoration:none; font-size:1.1rem;">Offres spéciales</a></li>

            </ul>
        </nav>
    </div>
</header>
// ...existing code...
<section class="services-hero">
    <div>
        <h2>Nos offres</h2>
        <p>
            Découvrez nos solutions pour accélérer votre croissance digitale : conseil, création de site, référencement, réseaux sociaux, et plus encore.
        </p>
    </div>
    <div class="services-img">
        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=600&q=80" alt="Services Illustration">
    </div>
</section>
<section class="services-list">
    <div class="service">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Conseil">
        <h3>Conseil & Audit</h3>
        <p>Analyse de votre présence digitale et recommandations personnalisées.</p>
    </div>
    <div class="service">
        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Création de site">
        <h3>Création de site web</h3>
        <p>Sites vitrines, e-commerce, blogs, adaptés à vos besoins et à votre image.</p>
    </div>
    <div class="service">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Référencement">
        <h3>Référencement (SEO)</h3>
        <p>Optimisation pour les moteurs de recherche et amélioration de votre visibilité.</p>
    </div>
    <div class="service">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="Réseaux sociaux">
        <h3>Réseaux sociaux</h3>
        <p>Gestion et animation de vos réseaux sociaux pour engager votre communauté.</p>
    </div>
</section>
<footer>
    <p>&copy; 2025 Web Market Consulting. Tous droits réservés.</p>
</footer>


<script>
    // Animation d’apparition sur les sections principales
    document.addEventListener('DOMContentLoaded', function() {
        // Animation sur les titres
        document.querySelectorAll('h1, h2, h3').forEach((el, i) => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(30px)';
            setTimeout(() => {
                el.style.transition = 'all 0.7s cubic-bezier(.68,-0.55,.27,1.55)';
                el.style.opacity = 1;
                el.style.transform = 'translateY(0)';
            }, 200 + i * 150);
        });

        // Animation sur les boutons CTA
        document.querySelectorAll('.cta').forEach(cta => {
            cta.addEventListener('mouseenter', () => {
                cta.style.transform = 'scale(1.08)';
                cta.style.transition = 'transform 0.2s';
            });
            cta.addEventListener('mouseleave', () => {
                cta.style.transform = 'scale(1)';
            });
        });

        // Animation sur les témoignages (blockquotes)
        document.querySelectorAll('blockquote').forEach((bq, i) => {
            bq.style.opacity = 0;
            bq.style.transform = 'translateX(-40px)';
            setTimeout(() => {
                bq.style.transition = 'all 0.7s cubic-bezier(.68,-0.55,.27,1.55)';
                bq.style.opacity = 1;
                bq.style.transform = 'translateX(0)';
            }, 600 + i * 200);
        });
    });

    // Animation du logo si présent
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
