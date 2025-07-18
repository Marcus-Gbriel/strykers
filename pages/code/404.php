<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Setor Não Encontrado | STRYKERS</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a2e1a 50%, #162e21 100%);
            font-family: 'Exo 2', sans-serif;
            color: #ffffff;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* Estrelas animadas de fundo */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .star {
            position: absolute;
            background: #ffffff;
            border-radius: 50%;
            animation: twinkle 2s infinite;
        }

        .star:nth-child(odd) {
            animation-delay: 1s;
        }

        @keyframes twinkle {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }

        /* Grid futurista */
        .grid-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(46, 125, 50, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(46, 125, 50, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: -1;
            animation: grid-move 20s linear infinite;
        }

        @keyframes grid-move {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(50px, 50px);
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .error-content {
            text-align: center;
            max-width: 800px;
            padding: 40px;
            background: rgba(13, 17, 23, 0.8);
            border: 2px solid #2e7d32;
            border-radius: 15px;
            box-shadow:
                0 0 30px rgba(46, 125, 50, 0.3),
                inset 0 0 30px rgba(46, 125, 50, 0.1);
            backdrop-filter: blur(10px);
            animation: pulse-border 3s ease-in-out infinite;
        }

        @keyframes pulse-border {

            0%,
            100% {
                border-color: #2e7d32;
                box-shadow:
                    0 0 30px rgba(46, 125, 50, 0.3),
                    inset 0 0 30px rgba(46, 125, 50, 0.1);
            }

            50% {
                border-color: #ff6b6b;
                box-shadow:
                    0 0 30px rgba(255, 107, 107, 0.3),
                    inset 0 0 30px rgba(255, 107, 107, 0.1);
            }
        }

        .error-code {
            font-family: 'Orbitron', monospace;
            font-size: 8rem;
            font-weight: 900;
            background: linear-gradient(45deg, #2e7d32, #4caf50);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 3s ease-in-out infinite;
            text-shadow: 0 0 50px rgba(46, 125, 50, 0.5);
            margin-bottom: 20px;
            line-height: 1;
        }

        @keyframes gradient-shift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .error-title {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            color: #2e7d32;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 20px rgba(46, 125, 50, 0.8);
        }

        .error-subtitle {
            font-size: 1.2rem;
            color: #ff6b6b;
            margin-bottom: 30px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .error-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 40px;
            color: #b8c5d1;
        }

        .mission-status {
            background: rgba(255, 107, 107, 0.1);
            border: 1px solid #ff6b6b;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
            font-family: 'Orbitron', monospace;
        }

        .mission-status h3 {
            color: #ff6b6b;
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .status-list {
            list-style: none;
            text-align: left;
        }

        .status-list li {
            padding: 5px 0;
            border-bottom: 1px solid rgba(255, 107, 107, 0.2);
        }

        .status-list li:last-child {
            border-bottom: none;
        }

        .status-indicator {
            color: #ff6b6b;
            margin-right: 10px;
            font-weight: bold;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, #2e7d32, #4caf50);
            color: #000;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            font-family: 'Orbitron', monospace;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(46, 125, 50, 0.4);
            border-color: #2e7d32;
        }

        .btn-secondary {
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
        }

        .btn-secondary:hover {
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4);
            border-color: #ff6b6b;
        }

        .scanner-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #2e7d32, transparent);
            animation: scan 2s linear infinite;
        }

        @keyframes scan {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .glitch {
            position: relative;
            color: #2e7d32;
            animation: glitch 2s infinite;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            animation: glitch-1 0.5s infinite;
            color: #ff6b6b;
            z-index: -1;
        }

        .glitch::after {
            animation: glitch-2 0.5s infinite;
            color: #4caf50;
            z-index: -2;
        }

        @keyframes glitch {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(-2px, 2px);
            }

            40% {
                transform: translate(-2px, -2px);
            }

            60% {
                transform: translate(2px, 2px);
            }

            80% {
                transform: translate(2px, -2px);
            }
        }

        @keyframes glitch-1 {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(2px, -2px);
            }

            40% {
                transform: translate(-2px, 2px);
            }

            60% {
                transform: translate(-2px, -2px);
            }

            80% {
                transform: translate(2px, 2px);
            }
        }

        @keyframes glitch-2 {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(-2px, -2px);
            }

            40% {
                transform: translate(2px, -2px);
            }

            60% {
                transform: translate(2px, 2px);
            }

            80% {
                transform: translate(-2px, 2px);
            }
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 5rem;
            }

            .error-title {
                font-size: 1.8rem;
            }

            .error-content {
                padding: 20px;
                margin: 10px;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="stars"></div>
    <div class="grid-bg"></div>

    <div class="container">
        <div class="error-content">
            <div class="scanner-line"></div>

            <div class="error-code glitch" data-text="404">404</div>

            <h1 class="error-title">Setor Não Encontrado</h1>
            <p class="error-subtitle">Falha na Navegação - STRYKERS</p>

            <p class="error-description">
                A rota solicitada não foi localizada nos bancos de dados da
                corporação. O setor que você está tentando acessar pode ter sido reclassificado, estar sob operação
                militar ou temporariamente indisponível para acesso civil. Siga os protocolos da STRYKERS e retorne à
                base.
            </p>

            <div class="mission-status">
                <h3>Status da Operação</h3>
                <ul class="status-list">
                    <li><span class="status-indicator">●</span> Sistema de Navegação: OPERACIONAL</li>
                    <li><span class="status-indicator">●</span> Conexão com Base STRYKERS: ESTÁVEL</li>
                    <li><span class="status-indicator">●</span> Setor Solicitado: NÃO ENCONTRADO</li>
                    <li><span class="status-indicator">●</span> Sistemas de Defesa: ATIVOS</li>
                </ul>
            </div>

            <div class="action-buttons">
                <a href="/" class="btn">Retornar à Base STRYKERS</a>
                <a href="/contact" class="btn btn-secondary">Reportar Problema</a>
                <a href="javascript:history.back()" class="btn">Voltar ao Último Setor</a>
            </div>
        </div>
    </div>

    <script>
        // Criar estrelas animadas
        function createStars() {
            const starsContainer = document.querySelector('.stars');
            const numberOfStars = 100;

            for (let i = 0; i < numberOfStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 2 + 's';
                starsContainer.appendChild(star);
            }
        }

        // Efeito de digitação para o texto
        function typeWriter(element, text, speed = 50) {
            let i = 0;
            element.innerHTML = '';

            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }

            type();
        }

        // Efeito sonoro simulado (console)
        function playErrorSound() {
            console.log('🔊 ERROR SOUND: BEEP BEEP BEEP');
        }

        // Inicializar efeitos
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
            playErrorSound();

            // Adicionar listener para os botões
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    console.log('🎯 Navegando para:', this.getAttribute('href'));
                });
            });

            // Efeito de glitch aleatório
            setInterval(() => {
                const glitchElement = document.querySelector('.glitch');
                glitchElement.style.animation = 'none';
                setTimeout(() => {
                    glitchElement.style.animation = 'glitch 2s infinite';
                }, 100);
            }, 5000);
        });

        // Easter egg: Konami Code
        let konamiCode = [];
        const correctCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'KeyB', 'KeyA'];

        document.addEventListener('keydown', function(e) {
            konamiCode.push(e.code);
            if (konamiCode.length > correctCode.length) {
                konamiCode.shift();
            }

            if (konamiCode.join(',') === correctCode.join(',')) {
                document.body.style.filter = 'hue-rotate(180deg)';
                alert('🚀 Código de desenvolvedor ativado! Acesso liberado ao modo debug.');
                console.log('🎮 Easter egg ativado! Bem-vindo ao modo desenvolvedor, Comandante!');
            }
        });
    </script>
</body>

</html>