<!-- filepath: resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À propos - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .about-section {
            display: flex;
            align-items: center;
            gap: 40px;
            padding: 40px 5%;
            background: linear-gradient(120deg, #fff 60%, #e0e7ff 100%);
        }
        .about-img {
            max-width: 40%;
        }
        .about-img img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        .about-text {
            max-width: 55%;
        }
        .team {
            display: flex;
            justify-content: center;
            gap: 32px;
            margin: 40px 0;
        }
        .member {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 18px 12px;
            text-align: center;
            width: 180px;
        }
        .member img {
            width: 70px;
            border-radius: 50%;
            margin-bottom: 10px;
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

<section class="about-section">
    <div class="about-text">
        <h2>Qui sommes-nous ?</h2>
        <p>
            Web Market Consulting accompagne les entreprises africaines et européennes dans leur transformation digitale. 
            Notre équipe propose des solutions adaptées à chaque marché pour booster votre visibilité et votre croissance.
        </p>
        <p>
            Nous croyons en l’innovation, la proximité et l’écoute pour bâtir des stratégies digitales efficaces et durables.
        </p>
    </div>
    <div class="about-img">
        <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=600&q=80" alt="Notre équipe">
    </div>
</section>
<section>
    <h2 style="text-align:center;">Notre équipe</h2>
    <div class="team">
        <div class="member">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Membre 1">
            <h4>Jean Dupont</h4>
            <p>Consultant digital</p>
        </div>
        <div class="member">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Membre 2">
            <h4>Amina Traoré</h4>
            <p>Stratégie & Marketing</p>
        </div>
        <div class="member">
            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Membre 3">
            <h4>Paul N’Guessan</h4>
            <p>Développeur web</p>
        </div>
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
