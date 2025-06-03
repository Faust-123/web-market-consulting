<!-- filepath: resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Web Market Consulting</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .contact-hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            padding: 40px 5%;
            background: linear-gradient(120deg, #fff 60%, #e0e7ff 100%);
        }
        .contact-img {
            max-width: 40%;
        }
        .contact-img img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        .contact-form-section {
            max-width: 50%;
        }
        .contact-info {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
        }
        .contact-info img {
            width: 32px;
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

<section class="contact-hero">
    <div class="contact-form-section">
        <h2>Contactez-nous</h2>
        <div class="contact-info">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email">
            <span>contact@webmarketconsulting.com</span>
        </div>
        <div class="contact-info">
            <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Téléphone">
            <span>+228 98 38 95 01</span>
        </div>
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('contact.send') }}" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="nom">Nom complet</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="cta">Envoyer</button>
        </form>
    </div>
    <div class="contact-img">
        <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=600&q=80" alt="Contact Illustration">
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
