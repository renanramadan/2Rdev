<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3GWC4P004E"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3GWC4P004E');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio de Renan Ramadan Youssef Torres, desenvolvedor web com 20 anos de experiência na criação de soluções práticas e intuitivas que geram resultados.">
    <title>Renan Ramadan - Desenvolvedor Web Sênior | Portfólio 2Rdev</title>
    
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Renan Ramadan Youssef Torres",
        "alternateName": "Renan Ramadan",
        "url": "https://www.2rdev.com.br",
        "jobTitle": "Desenvolvedor Web Sênior - PHP / MySQL / JavaScript",
        "worksFor": {
            "@type": "Organization",
            "name": "2Rdev"
        },
        "description": "Desenvolvedor web com 20 anos de experiência, especializado em soluções práticas e intuitivas que geram resultados com PHP e MySQL.",
        "sameAs": [
            "https://www.linkedin.com/in/renanramadan/",
            "https://github.com/renanramadan"
        ]
    }
    </script>

<style>
    /* O CSS do Bootstrap cuida do básico, então podemos simplificar aqui */
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #006079;
        font-family: 'Montserrat', sans-serif;
    }

    /* O Bootstrap já tem classes para centralização, mas vamos manter
       a estrutura do body para garantir a centralização vertical na página inteira */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .logo {
        position: relative;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        transform: translateX(-80%); 
    }

    .logo:hover {
        transform: translateX(-83%) scale(1.05); 
    }
    
    .logo-2r {
        display: inline-block;
        font-weight: 800;
        font-size: 7.5rem;
        letter-spacing: -0.12em;
        color: #000000;
        transition: text-shadow 0.3s ease-in-out;
    }

    .logo-dev {
        position: absolute;
        font-weight: 600;
        font-style: italic;
        font-size: 7.5rem;
        letter-spacing: -0.05em;
        color: #ffde59;
        top: 0%;
        left: 0%;
        transform: translate(58%, 0%);
        transition: text-shadow 0.3s ease-in-out;
    }
    
    .logo:hover .logo-2r,
    .logo:hover .logo-dev {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    /* As classes de texto do Bootstrap poderiam ser usadas aqui,
       mas manteremos para preservar seu design exato */
    .tagline {
        color:rgb(224, 224, 224);
        text-align: center;
        font-size: 1.1rem;
        font-weight: 400;
        margin-top: 1.5rem;
        letter-spacing: 0.5px;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
        max-width: 500px;
    }

    /* Estilização do contato, agora com um ícone Bootstrap */
    .contact-info {
        margin-top: 2rem;
    }

    .contact-info a {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        color: rgb(224, 224, 224); /* Cor original */
        transition: color 0.3s ease;
    }

    .contact-info a:hover {
        /* MODIFICADO: A cor fica mais clara (branco puro) e o scale foi removido */
        color: #FFFFFF;
    }
    
    /* O ícone do Bootstrap é tratado como texto, então ajustamos o font-size */
    .contact-info .bi-whatsapp {
        font-size: 1.5rem;
        margin-right: 0.75rem;
    }

    .contact-info .number {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .author-name {
        color: rgb(224, 224, 224);
        font-size: 1.5rem;
        font-weight: 400;
        text-align: center;
        margin-top: -1.5rem;
        margin-bottom: 2rem;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .social-links {
        margin-top: 1.5rem; /* Espaçamento depois do WhatsApp */
        display: flex;
        gap: 1.5rem; /* Cria um espaço entre os ícones das redes sociais*/
    }

    .social-links a {
        color: rgb(224, 224, 224);
        text-decoration: none;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-links a:hover {
        color: #FFFFFF; /* A cor fica mais clara no hover */
        transform: translateY(-5px); /* O ícone "flutua" um pouco para cima */
    }

    .social-links i {
        font-size: 2rem; /* Tamanho dos ícones sociais */
    }

</style>
</head>
<body>

    <h1 class="visually-hidden">Renan Ramadan Youssef Torres - Desenvolvedor Web</h1>
    <div class="logo-wrapper text-center">
      <div class="logo">
        <span class="logo-2r">2R</span>
        <span class="logo-dev">dev</span>
      </div>

      <h2 class="author-name">Renan Ramadan</h2>


      <p class="tagline">Desenvolvendo soluções web práticas e intuitivas que geram resultados desde 2005.</p>
      
    

      <div class="contact-info">
        <a href="https://wa.me/5521964380356" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-whatsapp"></i>
          <span class="number">(21) 96438-0356</span>
        </a>
      </div>

      <div class="social-links">
        <a href="https://www.linkedin.com/in/renanramadan/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn de Renan Ramadan">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://github.com/renanramadan" target="_blank" rel="noopener noreferrer" aria-label="GitHub de Renan Ramadan">
          <i class="bi bi-github"></i>
        </a>
        <a href="https://www.instagram.com/2r.dev" target="_blank" rel="noopener noreferrer" aria-label="Instagram de 2Rdev">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>