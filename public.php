<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hostcofe</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/images/favicon/site.webmanifest" />
    <style>
        @charset "utf-8";

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Vazirmatn, sans-serif;
            background: #0a0e27;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 50px;
            background: rgba(10, 14, 39, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            padding: 15px 50px;
            background: rgba(10, 14, 39, 0.98);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(135deg,
                    rgba(0, 255, 204, 0.4) 0%,
                    rgba(0, 204, 255, 0.4) 100%);
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.3);
        }

        .logo-icon svg {
            width: 24px;
            height: 24px;
            fill: #0a0e27;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            background: linear-gradient(135deg, #ffffff 0%, #00ffcc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a::before {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ff6b6b, #ff8e53);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .nav-links a:hover {
            color: #ff8e53;
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }

        .nav-links a:hover::before {
            width: 100%;
        }

        .nav-links a.active::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #00ffcc, #00ccff);
            transform: translateX(-50%);
            box-shadow: 0 0 15px rgba(0, 255, 204, 0.6);
            border-radius: 2px;
        }

        .login-btn {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 12px;
            background-color: #00ffcc;
            color: #0a0e27 !important;
            transition: all 200ms linear;
            font-size: 15px;
            font-weight: 600;
        }

        .login-btn:hover {
            background: #00e6b8;
            box-shadow: 0 6px 15px rgba(0, 255, 204, 0.5);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 100%);
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.4;
            background-image: linear-gradient(45deg,
                    transparent 30%,
                    rgba(0, 255, 204, 0.1) 50%,
                    transparent 70%),
                linear-gradient(-45deg,
                    transparent 30%,
                    rgba(255, 0, 128, 0.1) 50%,
                    transparent 70%);
            animation: bgShift 20s ease-in-out infinite;
        }

        @keyframes bgShift {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-20px, -20px);
            }
        }

        .geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border: 2px solid rgba(0, 255, 204, 0.3);
        }

        .shape1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: -150px;
            transform: rotate(45deg);
            animation: float 15s ease-in-out infinite;
        }

        .shape2 {
            width: 200px;
            height: 200px;
            top: 60%;
            right: -100px;
            border-color: rgba(255, 0, 128, 0.3);
            animation: float 20s ease-in-out infinite reverse;
        }

        .shape3 {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 10%;
            border-color: rgba(0, 204, 255, 0.3);
            transform: rotate(30deg);
            animation: float 18s ease-in-out infinite;
        }

        .shape4 {
            width: 250px;
            height: 250px;
            top: 15%;
            right: 5%;
            border-color: rgba(255, 0, 128, 0.25);
            transform: rotate(45deg);
            animation: float 16s ease-in-out infinite;
        }

        .shape5 {
            width: 180px;
            height: 180px;
            top: 55%;
            right: 12%;
            border-color: rgba(0, 255, 204, 0.25);
            transform: rotate(-30deg);
            animation: float 22s ease-in-out infinite reverse;
        }

        .shape6 {
            width: 120px;
            height: 120px;
            bottom: 15%;
            right: 8%;
            border-color: rgba(0, 204, 255, 0.25);
            transform: rotate(20deg);
            animation: float 19s ease-in-out infinite;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text {
            animation: slideInLeft 1s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-text h1 {
            font-size: 64px;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #00ffcc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-text p {
            font-size: 18px;
            line-height: 1.6;
            color: #a0a0a0;
            margin-bottom: 40px;
            max-width: 500px;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #ff6b6b, #ff8e53);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
        }

        .hero-visual {
            position: relative;
            animation: slideInRight 1s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .city-container {
            position: relative;
            width: 100%;
            height: 400px;
            perspective: 1000px;
        }

        .building {
            position: absolute;
            background: linear-gradient(180deg, #1a1f3a 0%, #0a0e27 100%);
            border: 1px solid rgba(0, 255, 204, 0.2);
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.1),
                inset 0 0 20px rgba(0, 255, 204, 0.05);
            overflow: hidden;
        }

        /* Building fill effect */
        .building-fill {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            animation: pulse 3s ease-in-out infinite;
        }

        .building1 {
            width: 60px;
            height: 250px;
            bottom: 0;
            left: 20%;
        }

        .building1 .building-fill {
            height: 45%;
            background: linear-gradient(180deg,
                    transparent 0%,
                    rgba(0, 255, 204, 0.6) 100%);
        }

        .building2 {
            width: 80px;
            height: 320px;
            bottom: 0;
            left: 35%;
        }

        .building2 .building-fill {
            height: 60%;
            background: linear-gradient(180deg,
                    transparent 0%,
                    rgba(255, 0, 128, 0.6) 100%);
            animation-delay: 0.5s;
        }

        .building3 {
            width: 100px;
            height: 280px;
            bottom: 0;
            right: 25%;
        }

        .building3 .building-fill {
            height: 35%;
            background: linear-gradient(180deg,
                    transparent 0%,
                    rgba(0, 204, 255, 0.6) 100%);
            animation-delay: 1s;
        }

        .building4 {
            width: 70px;
            height: 200px;
            bottom: 0;
            right: 10%;
        }

        .building4 .building-fill {
            height: 50%;
            background: linear-gradient(180deg,
                    transparent 0%,
                    rgba(255, 107, 107, 0.6) 100%);
            animation-delay: 1.5s;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.6;
                transform: translateY(0);
            }

            50% {
                opacity: 1;
                transform: translateY(-5px);
            }
        }

        /* Building windows */
        .building-windows {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: repeating-linear-gradient(0deg,
                    transparent,
                    transparent 8px,
                    rgba(255, 255, 255, 0.05) 8px,
                    rgba(255, 255, 255, 0.05) 10px);
            opacity: 0.8;
        }

        .neon-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, #00ffcc, transparent);
            animation: scan 3s linear infinite;
        }

        .neon-line1 {
            width: 100px;
            top: 30%;
            left: 10%;
        }

        .neon-line2 {
            width: 150px;
            top: 50%;
            right: 15%;
            animation-delay: 1s;
        }

        @keyframes scan {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateX(200%);
                opacity: 0;
            }
        }

        /* Hosts Section */
        .hosts-section {
            padding: 80px 50px;
            background: linear-gradient(180deg, #0a0e27 0%, #0f1329 100%);
        }

        .hosts-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
            background: linear-gradient(135deg, #ffffff 0%, #00ffcc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Stats Cards */
        .stats-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 60px;
            justify-content: space-between;
            align-items: flex-start;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            flex: 1 1 calc(25% - 45px);
            min-width: 280px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(0, 255, 204, 0.3);
        }

        .stat-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #00ffcc, transparent);
            animation: scan 3s linear infinite;
        }

        .stat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg,
                    rgba(0, 255, 204, 0.5),
                    rgba(0, 204, 255, 0.5));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .stat-title {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: 500;
        }

        .stat-value {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #ffffff 0%, #00ffcc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            flex-direction: column;
        }

        .btn-stat-card {
            background: #00ffcc;
            color: #0a0e27;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            font-size: 0.9em;
            transition: all 0.3s ease;
            width: 90%;
            margin: 15px auto 0;
            display: block;
            box-shadow: 0 4px 10px rgba(0, 255, 204, 0.3);
        }

        .btn-stat-card:hover {
            background: #00e6b8;
            box-shadow: 0 6px 15px rgba(0, 255, 204, 0.5);
            transform: translateY(-2px);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            padding-top: 50px;
        }

        .modal-content {
            background-color: #0a0e27;
            margin: 5% auto;
            padding: 30px;
            border: 1px solid rgba(0, 255, 204, 0.3);
            width: 80%;
            max-width: 700px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 255, 204, 0.1);
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .close-button:hover,
        .close-button:focus {
            color: #00ffcc;
            text-decoration: none;
            cursor: pointer;
        }

        .pricing-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 1.05em;
            text-align: right;
        }

        .pricing-table th,
        .pricing-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .pricing-table th {
            background-color: rgba(0, 255, 204, 0.1);
            color: #00ffcc;
            border-top: 2px solid #00ffcc;
            border-bottom: 2px solid #00ffcc;
            text-align: right;
        }

        .pricing-table tr:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .modal-btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #00ffcc;
            color: #0a0e27 !important;
            text-decoration: none;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9em;
            transition: all 0.3s ease;
            text-align: center;
            min-width: 80px;
        }

        .modal-btn:hover {
            background-color: #00e6b8;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(0, 255, 204, 0.4);
        }

        /* Analytics Section */
        .analytics-section {
            padding: 80px 50px;
            background: linear-gradient(180deg, #0f1329 0%, #1a1f3a 100%);
        }

        /* Chart Cards */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .chart-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            position: relative;
            min-height: 400px;
        }

        .chart-card:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .chart-title {
            font-size: 20px;
            font-weight: 600;
        }

        .chart-options {
            display: flex;
            gap: 10px;
        }

        .chart-option {
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chart-option:hover,
        .chart-option.active {
            background: rgba(0, 255, 204, 0.1);
            border-color: rgba(0, 255, 204, 0.3);
            color: #00ffcc;
        }

        .chart-container {
            position: relative;
            height: 300px;
        }

        /* Bar Chart */
        .bar-chart {
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            height: 100%;
            padding: 20px 0;
        }

        .bar {
            width: 30px;
            background: linear-gradient(180deg, #00ffcc 0%, #00ccff 100%);
            border-radius: 5px 5px 0 0;
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .bar:hover {
            transform: scaleY(1.05);
            filter: brightness(1.2);
        }

        .bar-label {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 11px;
            color: #707070;
        }

        .bar-value {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            font-weight: 600;
            color: #00ffcc;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .bar:hover .bar-value {
            opacity: 1;
        }

        /* Line Chart */
        .line-chart {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .line-chart-svg {
            width: 100%;
            height: 100%;
        }

        .chart-grid-line {
            stroke: rgba(255, 255, 255, 0.05);
            stroke-width: 1;
        }

        .chart-line {
            fill: none;
            stroke: #00ffcc;
            stroke-width: 2;
            filter: drop-shadow(0 0 10px rgba(0, 255, 204, 0.5));
        }

        .chart-area {
            fill: url(#gradient);
            opacity: 0.3;
        }

        .chart-dot {
            fill: #00ffcc;
            stroke: #0a0e27;
            stroke-width: 2;
            r: 4;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chart-dot:hover {
            r: 6;
            filter: drop-shadow(0 0 15px rgba(0, 255, 204, 0.8));
        }

        /* Metrics Grid */
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .metric-item {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .metric-item:hover {
            transform: translateY(-3px);
            border-color: rgba(0, 255, 204, 0.3);
        }

        .metric-value {
            font-size: 24px;
            font-weight: 700;
            color: #00ffcc;
            margin-bottom: 5px;
        }

        .metric-label {
            font-size: 12px;
            color: #a0a0a0;
        }

        /* Reports Section */
        .reports-section {
            padding: 80px 50px;
            background: linear-gradient(135deg, #1a0033 0%, #2d1b69 50%, #0f1329 100%),
                linear-gradient(90deg,
                    transparent 49%,
                    rgba(0, 255, 204, 0.05) 50%,
                    transparent 51%),
                linear-gradient(0deg,
                    transparent 49%,
                    rgba(0, 255, 204, 0.05) 50%,
                    transparent 51%);
            background-size: 100% 100%, 40px 40px, 40px 40px;
            position: relative;
        }

        .reports-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 20%,
                    rgba(255, 0, 128, 0.1) 0%,
                    transparent 50%),
                radial-gradient(circle at 80% 80%,
                    rgba(0, 204, 255, 0.1) 0%,
                    transparent 50%);
            pointer-events: none;
        }

        /* Info Cards Section */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .info-card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 255, 204, 0.3);
        }

        .info-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #00ffcc 0%, #00ccff 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .info-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .info-value {
            font-size: 28px;
            font-weight: 700;
            color: #00ffcc;
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 50px;
            background: linear-gradient(180deg, #0f1329 0%, #0a0e27 100%);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: start;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #a0a0a0;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: #ffffff;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: rgba(0, 255, 204, 0.5);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .contact-info {
            padding: 20px 0;
        }

        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #00ffcc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact-item:hover {
            transform: translateX(5px);
            border-color: rgba(0, 255, 204, 0.3);
            background: rgba(0, 255, 204, 0.05);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #00ffcc, #00ccff);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 16px;
            margin-bottom: 5px;
            color: #ffffff;
        }

        .contact-details p {
            font-size: 14px;
            color: #a0a0a0;
            line-height: 1.4;
        }

        /* Footer */
        footer {
            padding: 40px 50px;
            background: #0a0e27;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .copyright {
            font-size: 14px;
            color: #707070;
        }

        .copyright a {
            color: #707070;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .copyright a:hover {
            color: #00ffcc;
            text-shadow: 0 0 10px rgba(0, 255, 204, 0.4);
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 6px;
            z-index: 1001;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #ffffff;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(10px, 10px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(8px, -8px);
        }

        .nav-links-mobile {
            display: none;
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            background: rgba(10, 14, 39, 0.98);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            flex-direction: column;
            gap: 0;
            list-style: none;
            z-index: 1000;
            padding: 20px;
        }

        .nav-links-mobile.active {
            display: flex;
        }

        .nav-links-mobile a {
            color: #ffffff;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-links-mobile a:hover {
            border-left-color: #ff6b6b;
            background: rgba(255, 107, 107, 0.1);
            color: #ff8e53;
        }

        .nav-links-mobile a.active {
            border-left-color: #00ffcc;
            background: rgba(0, 255, 204, 0.1);
            color: #00ffcc;
        }

        @media (max-width: 1200px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 968px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 48px;
            }

            .hero-text {
                padding-top: 160px;
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 15px 20px;
            }

            .hamburger {
                display: flex;
            }

            .nav-links {
                display: none;
            }

            .hero-text h1 {
                font-size: 36px;
            }

            .hero-text {
                padding-top: 120px;
            }

            .hosts-section,
            .analytics-section,
            .reports-section,
            .contact-section {
                padding: 40px 20px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
    <!-- 

TemplateMo 602 Graph Page

https://templatemo.com/tm-602-graph-page

-->
</head>

<body dir="rtl">
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">
                <div class="logo-icon">
                    <img class="h-100 w-100 object-fit-cover" src="/images/image.webp" alt="" />
                </div>
                <span class="logo-text">هاست کافه</span>
            </a>
            <ul class="nav-links">
                <li><a href="#home" class="active">صفحه اصلی</a></li>
                <li><a href="#hosts">هاست ها</a></li>
                <li><a href="#analytics">Analytics</a></li>
                <li><a href="#reports">Reports</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="/index.php" target="_blank"> ورود/ثبت نام </a>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <ul class="nav-links-mobile" id="navLinksMobile">
            <li><a href="#home" class="active">صفحه اصلی</a></li>
            <li><a href="#hosts">هاست ها</a></li>
            <li><a href="#analytics">Analytics</a></li>
            <li><a href="#reports">Reports</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="geometric-shapes">
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
            <div class="shape shape6"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text">
                <h1>هاست کافه</h1>
                <p>
                    در هاست کافه، ما بهترین و جدیدترین تکنولوژی‌های هاستینگ را به شما
                    عرضه می‌کنیم. با خرید انواع دامنه و بهره‌مندی از منابع قدرتمند سرور
                    ما، نه تنها سرعت بارگذاری سایت خود را تضمین می‌کنید، بلکه از پایداری
                    و امنیت بالای زیرساخت نیز مطمئن خواهید بود. پشتیبانی آگاه ما در تمام
                    مراحل همراه شماست تا بدون دغدغه، روی محتوای کسب‌وکارتان تمرکز کنید
                </p>
                <a href="#hosts" class="cta-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        fill="rgba(225,255,255)">
                        <path
                            d="M4.99958 12.9999C4.99958 7.91198 7.90222 3.5636 11.9996 1.81799C16.0969 3.5636 18.9996 7.91198 18.9996 12.9999C18.9996 13.8229 18.9236 14.6264 18.779 15.4027L20.7194 17.2353C20.8845 17.3913 20.9238 17.6389 20.815 17.8383L18.3196 22.4133C18.1873 22.6557 17.8836 22.7451 17.6412 22.6128C17.5993 22.59 17.5608 22.5612 17.5271 22.5274L15.2925 20.2928C15.1049 20.1053 14.8506 19.9999 14.5854 19.9999H9.41379C9.14857 19.9999 8.89422 20.1053 8.70668 20.2928L6.47209 22.5274C6.27683 22.7227 5.96025 22.7227 5.76498 22.5274C5.73122 22.4937 5.70246 22.4552 5.67959 22.4133L3.18412 17.8383C3.07537 17.6389 3.11464 17.3913 3.27975 17.2353L5.22014 15.4027C5.07551 14.6264 4.99958 13.8229 4.99958 12.9999ZM6.47542 19.6957L7.29247 18.8786C7.85508 18.316 8.61814 17.9999 9.41379 17.9999H14.5854C15.381 17.9999 16.1441 18.316 16.7067 18.8786L17.5237 19.6957L18.5056 17.8955L17.4058 16.8568C16.9117 16.3901 16.6884 15.7045 16.8128 15.0364C16.9366 14.3722 16.9996 13.6911 16.9996 12.9999C16.9996 9.13037 15.0045 5.69965 11.9996 4.04033C8.99462 5.69965 6.99958 9.13037 6.99958 12.9999C6.99958 13.6911 7.06255 14.3722 7.18631 15.0364C7.31078 15.7045 7.08746 16.3901 6.59338 16.8568L5.49353 17.8955L6.47542 19.6957ZM11.9996 12.9999C10.895 12.9999 9.99958 12.1045 9.99958 10.9999C9.99958 9.89537 10.895 8.99994 11.9996 8.99994C13.1041 8.99994 13.9996 9.89537 13.9996 10.9999C13.9996 12.1045 13.1041 12.9999 11.9996 12.9999Z">
                        </path>
                    </svg>
                    بزن بریم
                </a>
            </div>

            <div class="hero-visual">
                <div class="city-container">
                    <div class="building building1">
                        <div class="building-fill"></div>
                        <div class="building-windows"></div>
                    </div>
                    <div class="building building2">
                        <div class="building-fill"></div>
                        <div class="building-windows"></div>
                    </div>
                    <div class="building building3">
                        <div class="building-fill"></div>
                        <div class="building-windows"></div>
                    </div>
                    <div class="building building4">
                        <div class="building-fill"></div>
                        <div class="building-windows"></div>
                    </div>
                    <div class="neon-line neon-line1"></div>
                    <div class="neon-line neon-line2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- hosts Section -->
    <section class="hosts-section" id="hosts">
        <div class="hosts-container">
            <h2 class="section-title">هاست ها</h2>
            <!-- Stats Cards -->
            <div class="stats-grid">
                <!-- هاست 1 ماهه -->
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient id="blueGlow" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color: #003366; stop-opacity: 1" />
                                            <stop offset="100%" style="stop-color: #00aaff; stop-opacity: 1" />
                                        </lineargradient>
                                    </defs>

                                    <rect width="100" height="100" fill="#1e1e1e" />

                                    <g transform="translate(0, 100) scale(1, -1)">
                                        <rect x="10" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="12" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="35" width="11" height="5" fill="url(#blueGlow)" />

                                        <rect x="40" y="10" width="20" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="43" y="15" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="25" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="35" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="45" width="14" height="5" fill="url(#blueGlow)" />

                                        <rect x="75" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="77" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="35" width="11" height="5" fill="url(#blueGlow)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="stat-title">هاست های</div>
                        </div>
                        <div>1 ماهه</div>
                    </div>
                    <div class="stat-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>50.000 تومان</span>
                            تا
                            <span>3.500.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-stat-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>

                <!-- هاست 3 ماهه -->
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient id="blueGlow" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color: #003366; stop-opacity: 1" />
                                            <stop offset="100%" style="stop-color: #00aaff; stop-opacity: 1" />
                                        </lineargradient>
                                    </defs>

                                    <rect width="100" height="100" fill="#1e1e1e" />

                                    <g transform="translate(0, 100) scale(1, -1)">
                                        <rect x="10" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="12" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="35" width="11" height="5" fill="url(#blueGlow)" />

                                        <rect x="40" y="10" width="20" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="43" y="15" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="25" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="35" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="45" width="14" height="5" fill="url(#blueGlow)" />

                                        <rect x="75" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="77" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="35" width="11" height="5" fill="url(#blueGlow)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="stat-title">هاست های</div>
                        </div>
                        <div>3 ماهه</div>
                    </div>
                    <div class="stat-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>130.000 تومان</span>
                            تا
                            <span>16.500.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-stat-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>

                <!-- هاست 6 ماهه -->
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient id="blueGlow" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color: #003366; stop-opacity: 1" />
                                            <stop offset="100%" style="stop-color: #00aaff; stop-opacity: 1" />
                                        </lineargradient>
                                    </defs>

                                    <rect width="100" height="100" fill="#1e1e1e" />

                                    <g transform="translate(0, 100) scale(1, -1)">
                                        <rect x="10" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="12" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="35" width="11" height="5" fill="url(#blueGlow)" />

                                        <rect x="40" y="10" width="20" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="43" y="15" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="25" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="35" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="45" width="14" height="5" fill="url(#blueGlow)" />

                                        <rect x="75" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="77" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="35" width="11" height="5" fill="url(#blueGlow)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="stat-title">هاست های</div>
                        </div>
                        <div>6 ماهه</div>
                    </div>
                    <div class="stat-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>240.000 تومان</span>
                            تا
                            <span>240.000.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-stat-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                    <!-- <div class="stat-description">
              Monthly revenue increased by 23% compared to last month with
              strong performance across all channels.
            </div> -->
                    <!-- <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart1"></canvas>
            </div> -->
                </div>

                <!-- هاست 1 ساله -->
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient id="blueGlow" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color: #003366; stop-opacity: 1" />
                                            <stop offset="100%" style="stop-color: #00aaff; stop-opacity: 1" />
                                        </lineargradient>
                                    </defs>

                                    <rect width="100" height="100" fill="#1e1e1e" />

                                    <g transform="translate(0, 100) scale(1, -1)">
                                        <rect x="10" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="12" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="12" y="35" width="11" height="5" fill="url(#blueGlow)" />

                                        <rect x="40" y="10" width="20" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="43" y="15" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="25" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="35" width="14" height="5" fill="url(#blueGlow)" />
                                        <rect x="43" y="45" width="14" height="5" fill="url(#blueGlow)" />

                                        <rect x="75" y="10" width="15" height="80" fill="#000" stroke="#333"
                                            stroke-width="1" />
                                        <rect x="77" y="15" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="25" width="11" height="5" fill="url(#blueGlow)" />
                                        <rect x="77" y="35" width="11" height="5" fill="url(#blueGlow)" />
                                    </g>
                                </svg>
                            </div>
                            <div class="stat-title">هاست های</div>
                        </div>
                        <div>1 ساله</div>
                    </div>
                    <div class="stat-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>450.000 تومان</span>
                            تا
                            <span>768.000.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-stat-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                    <!-- <div class="stat-description">
              Monthly revenue increased by 23% compared to last month with
              strong performance across all channels.
            </div> -->
                    <!-- <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart1"></canvas>
            </div> -->
                </div>

                <!--<div class="stat-card">
            <div class="stat-header">
              <div class="stat-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 100 100"
                  width="28"
                  height="28"
                  preserveAspectRatio="xMidYMid slice"
                >
                  <defs>
                    <lineargradient
                      id="blueGlow"
                      x1="0%"
                      y1="0%"
                      x2="0%"
                      y2="100%"
                    >
                      <stop
                        offset="0%"
                        style="stop-color: #003366; stop-opacity: 1"
                      />
                      <stop
                        offset="100%"
                        style="stop-color: #00aaff; stop-opacity: 1"
                      />
                    </lineargradient>
                  </defs>

                  <rect width="100" height="100" fill="#1e1e1e" />

                  <g transform="translate(0, 100) scale(1, -1)">
                    <rect
                      x="10"
                      y="10"
                      width="15"
                      height="80"
                      fill="#000"
                      stroke="#333"
                      stroke-width="1"
                    />
                    <rect
                      x="12"
                      y="15"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="12"
                      y="25"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="12"
                      y="35"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />

                    <rect
                      x="40"
                      y="10"
                      width="20"
                      height="80"
                      fill="#000"
                      stroke="#333"
                      stroke-width="1"
                    />
                    <rect
                      x="43"
                      y="15"
                      width="14"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="43"
                      y="25"
                      width="14"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="43"
                      y="35"
                      width="14"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="43"
                      y="45"
                      width="14"
                      height="5"
                      fill="url(#blueGlow)"
                    />

                    <rect
                      x="75"
                      y="10"
                      width="15"
                      height="80"
                      fill="#000"
                      stroke="#333"
                      stroke-width="1"
                    />
                    <rect
                      x="77"
                      y="15"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="77"
                      y="25"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                    <rect
                      x="77"
                      y="35"
                      width="11"
                      height="5"
                      fill="url(#blueGlow)"
                    />
                  </g>
                </svg>
              </div>
              <div class="stat-title">co-location</div>
            </div>
            <div class="stat-value">
              <div>قیمت</div>
              <div>
                <span>100T</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="18"
                  height="18"
                  fill="rgba(96,135,232,1)"
                >
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
                <span>1.5M</span>
              </div>
            </div>
            <div class="stat-description">
              Customer satisfaction rate based on recent surveys and feedback
              analysis.
            </div>
            <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart3"></canvas>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-header">
              <div class="stat-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 100 100"
                  width="28"
                  height="28"
                  preserveAspectRatio="xMidYMid meet"
                >
                  <defs>
                    <lineargradient
                      id="serverUnitGlow"
                      x1="0%"
                      y1="0%"
                      x2="100%"
                      y2="0%"
                    >
                      <stop offset="0%" stop-color="#0056b3" />
                      <stop offset="50%" stop-color="#00aaff" />
                      <stop offset="100%" stop-color="#0056b3" />
                    </lineargradient>

                    <lineargradient
                      id="shieldGradient"
                      x1="0%"
                      y1="0%"
                      x2="0%"
                      y2="100%"
                    >
                      <stop offset="0%" stop-color="#3a3a3a" />
                      <stop offset="100%" stop-color="#1a1a1a" />
                    </lineargradient>

                    <filter id="glow">
                      <fegaussianblur
                        in="SourceGraphic"
                        stdDeviation="2"
                        result="blur"
                      />
                      <femerge>
                        <femergenode in="blur" />
                        <femergenode in="SourceGraphic" />
                      </femerge>
                    </filter>
                  </defs>

                  <path
                    d="M50 5 L90 25 L90 75 L50 95 L10 75 L10 25 Z"
                    fill="url(#shieldGradient)"
                    stroke="#555"
                    stroke-width="2"
                    filter="url(#glow)"
                  />

                  <rect
                    x="30"
                    y="30"
                    width="40"
                    height="40"
                    rx="4"
                    ry="4"
                    fill="#000"
                    stroke="#333"
                    stroke-width="1.5"
                  />

                  <rect
                    x="35"
                    y="35"
                    width="30"
                    height="7"
                    fill="url(#serverUnitGlow)"
                    rx="1"
                    ry="1"
                  />
                  <rect
                    x="35"
                    y="45"
                    width="30"
                    height="7"
                    fill="url(#serverUnitGlow)"
                    rx="1"
                    ry="1"
                  />
                  <rect
                    x="35"
                    y="55"
                    width="30"
                    height="7"
                    fill="url(#serverUnitGlow)"
                    rx="1"
                    ry="1"
                  />

                  <circle cx="65" cy="65" r="3" fill="#ff4d4d">
                    <animate
                      attributeName="opacity"
                      values="1;0.5;1"
                      dur="1.5s"
                      repeatCount="indefinite"
                    />
                  </circle>
                  <circle
                    cx="65"
                    cy="65"
                    r="1.5"
                    fill="#ffffff"
                    opacity="0.7"
                  />

                  <path d="M42 62 L48 62 L45 68 Z" fill="#fff" />
                </svg>
              </div>
              <div class="stat-title">هاست اختصاصی</div>
            </div>
            <div class="stat-value">
              <div>قیمت</div>
              <div>
                <span>150T</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="18"
                  height="18"
                  fill="rgba(96,135,232,1)"
                >
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
                <span>2M</span>
              </div>
            </div>
            <div class="stat-description">
              Real-time analytics showing active users currently engaging with
              the platform.
            </div>
            <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart2"></canvas>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-header">
              <div class="stat-icon">🚀</div>
              <div class="stat-title">Performance Score</div>
            </div>
            <div class="stat-value">7,392</div>
            <div class="stat-description">
              Overall system performance metrics showing optimal operation
              across all services.
            </div>
            <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart4"></canvas>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-header">
              <div class="stat-icon">💰</div>
              <div class="stat-title">Monthly Growth</div>
            </div>
            <div class="stat-value">+28.5%</div>
            <div class="stat-description">
              Consistent month-over-month growth in user acquisition and revenue
              generation.
            </div>
            <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart5"></canvas>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-header">
              <div class="stat-icon">⚡</div>
              <div class="stat-title">System Uptime</div>
            </div>
            <div class="stat-value">99.9%</div>
            <div class="stat-description">
              Exceptional reliability with minimal downtime ensuring seamless
              user experience.
            </div>
            <div class="stat-chart">
              <canvas class="mini-chart" id="miniChart6"></canvas>
            </div>
          </div>
          -->
            </div>
        </div>
    </section>

    <!-- Analytics Section -->
    <section class="analytics-section" id="analytics">
        <div class="hosts-container">
            <h2 class="section-title">Advanced Analytics</h2>

            <!-- Key Metrics Overview -->
            <div class="metrics-grid">
                <div class="metric-item">
                    <div class="metric-value">2.4M</div>
                    <div class="metric-label">Page Views</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">156K</div>
                    <div class="metric-label">Unique Visitors</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">4.2min</div>
                    <div class="metric-label">Avg Session</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">68%</div>
                    <div class="metric-label">Return Rate</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">89</div>
                    <div class="metric-label">NPS Score</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value">3.2K</div>
                    <div class="metric-label">Daily Active</div>
                </div>
            </div>

            <!-- Chart Cards -->
            <div class="charts-grid">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">📈 Monthly Trends</h3>
                        <div class="chart-options">
                            <span class="chart-option active">2024</span>
                            <span class="chart-option">2023</span>
                            <span class="chart-option">2022</span>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div class="bar-chart" id="barChart">
                            <div class="bar" style="height: 60%">
                                <span class="bar-value">120</span>
                                <span class="bar-label">Jan</span>
                            </div>
                            <div class="bar" style="height: 80%">
                                <span class="bar-value">180</span>
                                <span class="bar-label">Feb</span>
                            </div>
                            <div class="bar" style="height: 45%">
                                <span class="bar-value">90</span>
                                <span class="bar-label">Mar</span>
                            </div>
                            <div class="bar" style="height: 70%">
                                <span class="bar-value">140</span>
                                <span class="bar-label">Apr</span>
                            </div>
                            <div class="bar" style="height: 90%">
                                <span class="bar-value">200</span>
                                <span class="bar-label">May</span>
                            </div>
                            <div class="bar" style="height: 65%">
                                <span class="bar-value">130</span>
                                <span class="bar-label">Jun</span>
                            </div>
                            <div class="bar" style="height: 75%">
                                <span class="bar-value">150</span>
                                <span class="bar-label">Jul</span>
                            </div>
                            <div class="bar" style="height: 85%">
                                <span class="bar-value">170</span>
                                <span class="bar-label">Aug</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">📊 Growth Analytics</h3>
                        <div class="chart-options">
                            <span class="chart-option active">Week</span>
                            <span class="chart-option">Month</span>
                            <span class="chart-option">Year</span>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div class="line-chart">
                            <svg class="line-chart-svg" viewBox="0 0 500 300">
                                <defs>
                                    <lineargradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" style="stop-color: #00ffcc; stop-opacity: 0.5" />
                                        <stop offset="100%" style="stop-color: #00ffcc; stop-opacity: 0" />
                                    </lineargradient>
                                </defs>
                                <!-- Grid lines -->
                                <line x1="0" y1="50" x2="500" y2="50" class="chart-grid-line" />
                                <line x1="0" y1="100" x2="500" y2="100" class="chart-grid-line" />
                                <line x1="0" y1="150" x2="500" y2="150" class="chart-grid-line" />
                                <line x1="0" y1="200" x2="500" y2="200" class="chart-grid-line" />
                                <line x1="0" y1="250" x2="500" y2="250" class="chart-grid-line" />

                                <!-- Area -->
                                <path
                                    d="M 0,200 L 62,180 L 125,150 L 187,170 L 250,120 L 312,140 L 375,100 L 437,130 L 500,110 L 500,300 L 0,300 Z"
                                    class="chart-area" />

                                <!-- Line -->
                                <path
                                    d="M 0,200 L 62,180 L 125,150 L 187,170 L 250,120 L 312,140 L 375,100 L 437,130 L 500,110"
                                    class="chart-line" />

                                <!-- Dots -->
                                <circle cx="0" cy="200" class="chart-dot" />
                                <circle cx="62" cy="180" class="chart-dot" />
                                <circle cx="125" cy="150" class="chart-dot" />
                                <circle cx="187" cy="170" class="chart-dot" />
                                <circle cx="250" cy="120" class="chart-dot" />
                                <circle cx="312" cy="140" class="chart-dot" />
                                <circle cx="375" cy="100" class="chart-dot" />
                                <circle cx="437" cy="130" class="chart-dot" />
                                <circle cx="500" cy="110" class="chart-dot" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">🌍 Geographic Distribution</h3>
                        <div class="chart-options">
                            <span class="chart-option active">Global</span>
                            <span class="chart-option">US</span>
                            <span class="chart-option">EU</span>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div class="bar-chart">
                            <div class="bar" style="
                    height: 85%;
                    background: linear-gradient(
                      180deg,
                      #ff6b6b 0%,
                      #ff8e53 100%
                    );
                  ">
                                <span class="bar-value">42%</span>
                                <span class="bar-label">USA</span>
                            </div>
                            <div class="bar" style="
                    height: 65%;
                    background: linear-gradient(
                      180deg,
                      #4ecdc4 0%,
                      #44a08d 100%
                    );
                  ">
                                <span class="bar-value">28%</span>
                                <span class="bar-label">EU</span>
                            </div>
                            <div class="bar" style="
                    height: 45%;
                    background: linear-gradient(
                      180deg,
                      #45b7d1 0%,
                      #96c93d 100%
                    );
                  ">
                                <span class="bar-value">18%</span>
                                <span class="bar-label">Asia</span>
                            </div>
                            <div class="bar" style="
                    height: 25%;
                    background: linear-gradient(
                      180deg,
                      #f093fb 0%,
                      #f5576c 100%
                    );
                  ">
                                <span class="bar-value">12%</span>
                                <span class="bar-label">Other</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">📱 Device Analytics</h3>
                        <div class="chart-options">
                            <span class="chart-option active">This Month</span>
                            <span class="chart-option">Last Month</span>
                            <span class="chart-option">YTD</span>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div class="line-chart">
                            <svg class="line-chart-svg" viewBox="0 0 500 300">
                                <defs>
                                    <lineargradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" style="stop-color: #ff6b6b; stop-opacity: 0.5" />
                                        <stop offset="100%" style="stop-color: #ff6b6b; stop-opacity: 0" />
                                    </lineargradient>
                                </defs>
                                <!-- Grid lines -->
                                <line x1="0" y1="60" x2="500" y2="60" class="chart-grid-line" />
                                <line x1="0" y1="120" x2="500" y2="120" class="chart-grid-line" />
                                <line x1="0" y1="180" x2="500" y2="180" class="chart-grid-line" />
                                <line x1="0" y1="240" x2="500" y2="240" class="chart-grid-line" />

                                <!-- Mobile Line -->
                                <path d="M 0,180 L 71,160 L 142,140 L 214,120 L 285,100 L 357,90 L 428,80 L 500,70"
                                    stroke="#ff6b6b" stroke-width="2" fill="none"
                                    filter="drop-shadow(0 0 10px rgba(255, 107, 107, 0.5))" />

                                <!-- Desktop Line -->
                                <path d="M 0,220 L 71,210 L 142,200 L 214,190 L 285,185 L 357,180 L 428,175 L 500,170"
                                    stroke="#00ffcc" stroke-width="2" fill="none"
                                    filter="drop-shadow(0 0 10px rgba(0, 255, 204, 0.5))" />

                                <!-- Mobile dots -->
                                <circle cx="0" cy="180" r="4" fill="#ff6b6b" />
                                <circle cx="71" cy="160" r="4" fill="#ff6b6b" />
                                <circle cx="142" cy="140" r="4" fill="#ff6b6b" />
                                <circle cx="214" cy="120" r="4" fill="#ff6b6b" />
                                <circle cx="285" cy="100" r="4" fill="#ff6b6b" />
                                <circle cx="357" cy="90" r="4" fill="#ff6b6b" />
                                <circle cx="428" cy="80" r="4" fill="#ff6b6b" />
                                <circle cx="500" cy="70" r="4" fill="#ff6b6b" />

                                <!-- Desktop dots -->
                                <circle cx="0" cy="220" r="4" fill="#00ffcc" />
                                <circle cx="71" cy="210" r="4" fill="#00ffcc" />
                                <circle cx="142" cy="200" r="4" fill="#00ffcc" />
                                <circle cx="214" cy="190" r="4" fill="#00ffcc" />
                                <circle cx="285" cy="185" r="4" fill="#00ffcc" />
                                <circle cx="357" cy="180" r="4" fill="#00ffcc" />
                                <circle cx="428" cy="175" r="4" fill="#00ffcc" />
                                <circle cx="500" cy="170" r="4" fill="#00ffcc" />

                                <!-- Labels -->
                                <text x="20" y="50" fill="#ff6b6b" font-size="12">
                                    Mobile
                                </text>
                                <text x="20" y="35" fill="#00ffcc" font-size="12">
                                    Desktop
                                </text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="reports-section" id="reports">
        <div class="hosts-container">
            <h2 class="section-title">Reports & Insights</h2>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">💼</div>
                    <h3 class="info-title">Business Intelligence</h3>
                    <div class="info-value">98.5%</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Accuracy in predictive analytics and business forecasting models.
                    </p>
                </div>
                <div class="info-card">
                    <div class="info-icon">📱</div>
                    <h3 class="info-title">Mobile Analytics</h3>
                    <div class="info-value">2.4M</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Mobile app downloads and active user engagement metrics.
                    </p>
                </div>
                <div class="info-card">
                    <div class="info-icon">🌍</div>
                    <h3 class="info-title">Global Reach</h3>
                    <div class="info-value">150+</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Countries actively using our analytics platform worldwide.
                    </p>
                </div>
                <div class="info-card">
                    <div class="info-icon">🚀</div>
                    <h3 class="info-title">Performance Index</h3>
                    <div class="info-value">847</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Comprehensive performance scoring across all platform metrics.
                    </p>
                </div>
                <div class="info-card">
                    <div class="info-icon">⚡</div>
                    <h3 class="info-title">Response Time</h3>
                    <div class="info-value">0.2s</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Average API response time ensuring optimal user experience.
                    </p>
                </div>
                <div class="info-card">
                    <div class="info-icon">📊</div>
                    <h3 class="info-title">Data Processing</h3>
                    <div class="info-value">12TB</div>
                    <p style="font-size: 14px; color: #a0a0a0">
                        Daily data volume processed through our analytics pipeline.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="hosts-container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form">
                    <h3 style="margin-bottom: 30px; font-size: 24px">
                        Send us a Message
                    </h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required
                                placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        <button type="submit" class="cta-button" style="width: 100%">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <a href="mailto:hello@graphpage.com" class="contact-item"
                        style="text-decoration: none; color: inherit">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h4>Email Address</h4>
                            <p>hello@graphpage.com<br />support@graphpage.com</p>
                        </div>
                    </a>

                    <a href="tel:+15551234567" class="contact-item" style="text-decoration: none; color: inherit">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h4>Phone Number</h4>
                            <p>+1 (555) 123-4567<br />Available 24/7</p>
                        </div>
                    </a>

                    <a href="https://maps.google.com/?q=123+Data+Drive+Suite+100+Analytics+City" target="_blank"
                        rel="noopener" class="contact-item" style="text-decoration: none; color: inherit">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h4>Office Location</h4>
                            <p>123 Data Drive, Suite 100<br />Analytics City, AC 12345</p>
                        </div>
                    </a>

                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div class="contact-details">
                            <h4>Business Hours</h4>
                            <p>
                                Monday - Friday: 9:00 AM - 6:00 PM<br />Weekend: Emergency
                                support only
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="copyright">
                © 2026 Graph Page. All rights reserved. Transforming data into
                insights. | Designed by
                <a href="https://templatemo.com" rel="nofollow noopener" target="_blank">TemplateMo</a>
            </p>
        </div>
    </footer>

    <div id="hostingPricingModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3>جدول کامل پلن‌های هاستینگ</h3>
            <table class="pricing-table">
                <thead>
                    <tr>
                        <th>حجم (Storage)</th>
                        <th>قیمت (Price)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="dynamicPricingBody"></tbody>
            </table>
            <p style="margin-top: 20px; font-size: 0.8em; color: #aaa">
                تمام قیمت‌ها ماهانه هستند.
            </p>
        </div>
    </div>


    <script>
        const hamburger = document.getElementById("hamburger");
        const navLinksMobile = document.getElementById("navLinksMobile");
        const mobileLinks = navLinksMobile.querySelectorAll("a");

        hamburger.addEventListener("click", function () {
            hamburger.classList.toggle("active");
            navLinksMobile.classList.toggle("active");
        });

        // Close mobile menu when a link is clicked
        mobileLinks.forEach((link) => {
            link.addEventListener("click", function () {
                hamburger.classList.remove("active");
                navLinksMobile.classList.remove("active");
            });
        });

        // Close mobile menu when scrolling
        window.addEventListener("scroll", function () {
            hamburger.classList.remove("active");
            navLinksMobile.classList.remove("active");
        });

        // Navbar scroll effect
        window.addEventListener("scroll", function () {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        // Active navigation highlighting
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".nav-links a");
        const mobileNavLinks = document.querySelectorAll(".nav-links-mobile a");

        function updateActiveNav() {
            const scrollY = window.pageYOffset;

            sections.forEach((section) => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute("id");

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${sectionId}`) {
                            link.classList.add("active");
                        }
                    });

                    mobileNavLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${sectionId}`) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        }

        window.addEventListener("scroll", updateActiveNav);

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            });
        });

        // Mini charts animation
        function drawMiniChart(canvasId, color) {
            const canvas = document.getElementById(canvasId);
            if (!canvas) return;

            const ctx = canvas.getContext("2d");
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;

            // Generate random data points
            const points = [];
            for (let i = 0; i < 10; i++) {
                points.push(Math.random() * canvas.height);
            }

            // Draw line
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 2;

            points.forEach((point, index) => {
                const x = (canvas.width / (points.length - 1)) * index;
                const y = point;

                if (index === 0) {
                    ctx.moveTo(x, y);
                } else {
                    ctx.lineTo(x, y);
                }
            });

            ctx.stroke();

            // Draw gradient fill
            const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
            gradient.addColorStop(0, color + "40");
            gradient.addColorStop(1, color + "00");

            ctx.lineTo(canvas.width, canvas.height);
            ctx.lineTo(0, canvas.height);
            ctx.closePath();
            ctx.fillStyle = gradient;
            ctx.fill();
        }

        // Initialize mini charts
        setTimeout(() => {
            drawMiniChart("miniChart1", "#ff0080");
            drawMiniChart("miniChart2", "#f945db");
            drawMiniChart("miniChart3", "#00ccff");
            drawMiniChart("miniChart4", "#ffcc00");
            drawMiniChart("miniChart5", "#ff6b6b");
            drawMiniChart("miniChart6", "#4ecdc4");
        }, 100);

        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: "0px",
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll(".bar");
                    bars.forEach((bar, index) => {
                        setTimeout(() => {
                            bar.style.animation = "slideUp 0.5s ease-out forwards";
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll(".bar-chart").forEach((chart) => {
            observer.observe(chart);
        });

        // Add slide up animation
        const style = document.createElement("style");
        style.textContent = `
            @keyframes slideUp {
                from {
                    transform: scaleY(0);
                    transform-origin: bottom;
                }
                to {
                    transform: scaleY(1);
                    transform-origin: bottom;
                }
            }
        `;
        document.head.appendChild(style);

        // Chart options interaction
        document.querySelectorAll(".chart-options").forEach((optionGroup) => {
            const options = optionGroup.querySelectorAll(".chart-option");
            options.forEach((option) => {
                option.addEventListener("click", function () {
                    options.forEach((opt) => opt.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });

        // Form submission handler
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                subject: document.getElementById("subject").value,
                message: document.getElementById("message").value,
            };

            // Show success message
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = "Message Sent! ✓";
            submitBtn.style.background = "linear-gradient(135deg, #4ade80, #22c55e)";

            // Reset form
            this.reset();

            // Reset button after 3 seconds
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.style.background = "linear-gradient(135deg, #ff6b6b, #ff8e53)";
            }, 3000);
        });

        // Add hover effect to contact form inputs
        document
            .querySelectorAll("#contactForm input, #contactForm textarea")
            .forEach((input) => {
                input.addEventListener("focus", function () {
                    this.style.borderColor = "rgba(0, 255, 204, 0.5)";
                    this.style.background = "rgba(255, 255, 255, 0.08)";
                    this.style.boxShadow = "0 0 20px rgba(0, 255, 204, 0.1)";
                });

                input.addEventListener("blur", function () {
                    this.style.borderColor = "rgba(255, 255, 255, 0.1)";
                    this.style.background = "rgba(255, 255, 255, 0.05)";
                    this.style.boxShadow = "none";
                });
            });

        // Metrics animation on scroll
        const metricsObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const metrics = entry.target.querySelectorAll(".metric-item");
                        metrics.forEach((metric, index) => {
                            setTimeout(() => {
                                metric.style.transform = "translateY(0)";
                                metric.style.opacity = "1";
                            }, index * 100);
                        });
                    }
                });
            }, {
            threshold: 0.3,
        }
        );

        document.querySelectorAll(".metrics-grid").forEach((grid) => {
            metricsObserver.observe(grid);
        });

        // Initialize metrics animation state
        document.querySelectorAll(".metric-item").forEach((item) => {
            item.style.transform = "translateY(20px)";
            item.style.opacity = "0";
            item.style.transition = "all 0.5s ease";
        });

        // ۱. تعریف داده‌ها (JSON-like Structure)
        // این آرایه حاوی تمام اطلاعات قیمت‌گذاری و لینک‌های خرید است.
        const hostingPlans = [{
            storage: "1 GB",
            price: "50,000 تومان",
            url: "https://example.com/buy/1gb", // ⬅️ لینک خرید پلن ۱ گیگ
        },
        {
            storage: "5 GB",
            price: "120,000 تومان",
            url: "https://example.com/buy/5gb", // ⬅️ لینک خرید پلن ۵ گیگ
        },
        {
            storage: "10 GB",
            price: "210,000 تومان",
            url: "https://example.com/buy/10gb", // ⬅️ لینک خرید پلن ۱۰ گیگ
        },
        {
            storage: "20 GB",
            price: "390,000 تومان",
            url: "https://example.com/buy/20gb", // ⬅️ لینک خرید پلن ۲۰ گیگ
        },
        {
            storage: "50 GB",
            price: "750,000 تومان",
            url: "https://www.google.com", // ⬅️ لینک خرید پلن ۵۰ گیگ
        },
        ];

        // ۲. متغیرهای DOM و منطق باز و بسته شدن
        const modal = document.getElementById("hostingPricingModal");
        // ⬅️ تغییر مهم: انتخاب تمام دکمه‌های بازکننده با استفاده از کلاس
        const openBtns = document.querySelectorAll(".open-pricing-modal-btn");
        const closeBtn = modal.querySelector(".close-button");
        const tableBody = document.getElementById("dynamicPricingBody");

        // تابع تولید دینامیک جدول
        function generatePricingTable() {
            // ابتدا محتوای قبلی را پاک می‌کنیم تا هر بار جدول از نو ساخته شود
            tableBody.innerHTML = "";

            // حلقه زدن روی آرایه داده‌ها و ساختن سطرها
            hostingPlans.forEach((plan) => {
                const row = document.createElement("tr");

                // ساختن دکمه خرید با استفاده از متغیر plan.url
                const buyButtonHTML = `<a href="${plan.url}" target="_blank" class='modal-btn'>خرید</a>`;

                // ساختن کدهای HTML سطر
                row.innerHTML = `
            <td>${plan.storage}</td>
            <td>${plan.price}</td>
            <td>${buyButtonHTML}</td> 
        `;

                // اضافه کردن سطر به بدنه جدول
                tableBody.appendChild(row);
            });
        }

        // ۳. منطق باز و بسته شدن مودال
        // ⬅️ تغییر مهم: اعمال تابع باز شدن روی تمام دکمه‌ها
        openBtns.forEach(button => {
            button.onclick = function () {
                // هر بار قبل از باز شدن، جدول را از روی داده‌های جدید تولید می‌کنیم
                generatePricingTable();

                modal.style.display = "block";
                document.body.style.overflow = "hidden"; // جلوگیری از اسکرول صفحه زیر مودال
            };
        });

        closeBtn.onclick = function () {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        };

        /** [محل پایان جاوااسکریپت دینامیک مودال] **/
    </script>
</body>

</html>