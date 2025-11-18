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
        /*background: linear-gradient(135deg,*/
        /*        rgba(0, 255, 204, 0.4) 0%,*/
        /*        rgba(0, 204, 255, 0.4) 100%);*/
        /*box-shadow: 0 0 20px rgba(0, 255, 204, 0.3);*/
        filter: drop-shadow(0px 3px 10px rgb(97, 212, 250));
    }

    .logo-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .logo-text {
        font-size: 20px;
        font-weight: 700;
        background: linear-gradient(135deg, #ffffff 0%, rgb(97, 212, 250) 100%);
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
        background: linear-gradient(90deg, rgb(97, 212, 250), #00ccff);
        transform: translateX(-50%);
        box-shadow: 0 0 15px rgba(0, 255, 204, 0.6);
        border-radius: 2px;
    }

    .login-btn {
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 12px;
        background-color: rgb(97, 212, 250);
        color: #0a0e27 !important;
        transition: all 200ms linear;
        font-size: 15px;
        font-weight: 600;
    }

    .login-btn:hover {
        box-shadow: 0 4px 10px rgb(97, 212, 250);
        transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
        position: relative;
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
        z-index: 10;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.2);
        /* backdrop-filter: blur(10px); */
        border-radius: 25px;
        text-align: right;
        padding: 50px;
        z-index: 3;
    }

    /* --- Hero Slider Styling - New Implementation --- */
    .hero-slider-section {
        /* Overrides or complements existing .hero styles */
        min-height: 75vh;
        /* ارتفاع حداقل برای بخش هیرو */
        display: flex;
        align-items: center;
        position: relative;
    }

    .hero-slider-container {
        /* کانتینر اصلی اسلایدها */
        width: 100%;
        max-width: 1400px;
        height: 100%;
        margin: 0 auto;
        position: relative;
        padding: 0 50px;
    }

    .hero-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 20px;
        opacity: 0;
        /* مخفی کردن اسلایدها */
        transition: opacity 0.8s ease-in-out;
        /* انیمیشن فید */
        z-index: 1;
    }

    .hero-slide.active {
        opacity: 1;
        /* نمایش اسلاید فعال */
        z-index: 2;
        /* اضافه کردن مجدد استایل شفاف موجود در hero-content قبلی */
        /* background-color: rgba(0, 0, 0, 0.2); */
        /* backdrop-filter: blur(10px); */
        border-radius: 25px;
    }

    /* Override existing hero-text/h1/p for a cleaner look in slider */
    .hero-slide .hero-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        line-height: 1.2;
        color: rgb(97, 212, 250);
        -webkit-text-fill-color: initial;
        background: none;
        background-clip: initial;
        text-shadow: 0 0 5px rgb(97, 212, 250);
    }

    .hero-slide .hero-content p {
        font-size: 1.3rem;
        margin-bottom: 30px;
        color: #e0e0e0;
        max-width: none;
    }

    .hero-image {
        max-width: 45%;
        z-index: 3;
    }

    .hero-image img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        max-height: 400px;
        object-fit: cover;
    }

    /* CTA Buttons Styling */
    .cta-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .cta-buttons a {
        padding: 12px 30px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        min-width: 180px;
    }

    .primary-btn {
        /* رنگ دکمه اصلی - مشابه CTA button قبلی */
        background: linear-gradient(135deg, #ff6b6b, #ff8e53);
        color: #0a0e27;
        box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
    }

    .primary-btn:hover {
        background: linear-gradient(135deg, #ff8e53, #ff6b6b);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
    }

    .secondary-btn {
        /* رنگ دکمه ثانویه */
        background-color: transparent;
        border: 2px solid rgb(97, 212, 250);
        color: rgb(97, 212, 250);
    }

    .secondary-btn:hover {
        background-color: rgba(0, 255, 204, 0.1);
        color: #00e6b8;
        border-color: #00e6b8;
        transform: translateY(-2px);
    }

    /* Slider Navigation Buttons */
    .slider-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        z-index: 10;
        font-size: 1.5rem;
        line-height: 1;
        transition: all 0.3s ease;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    .slider-nav-btn:hover {
        background: rgb(97, 212, 250);
        color: #0a0e27;
        transform: translateY(-50%) scale(1.1);
    }

    .slider-nav-btn.prev {
        right: 20px;
    }

    .slider-nav-btn.next {
        left: 5px;
    }

    /* .slider-pagination {
  bottom: 60px;
  position: absolute;
  z-index: 50;
} */

    /* .pagination-dot {
  width: 10px;
  height: 10px;
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.pagination-dot:hover {
  background-color: rgb(97, 212, 250);
}

.pagination-dot.active {
  background-color: rgb(97, 212, 250);
  width: 25px;
  border-radius: 6px;
  border-color: rgb(97, 212, 250);
} */

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
        background: linear-gradient(135deg, #ffffff 0%, rgb(97, 212, 250) 100%);
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
        margin-bottom: 30px;
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
        background: linear-gradient(90deg,
                transparent,
                rgb(97, 212, 250),
                transparent);
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
        background: linear-gradient(135deg, #ffffff 0%, rgb(97, 212, 250) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* hosts Cards */
    .hosts-flex {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 60px;
        justify-content: space-between;
        align-items: flex-start;
    }

    .host-card {
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

    .host-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(0, 255, 204, 0.3);
    }

    .host-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg,
                transparent,
                rgb(97, 212, 250),
                transparent);
        animation: scan 3s linear infinite;
    }

    .host-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }

    .host-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg,
                rgb(97, 212, 250),
                rgba(0, 204, 255, 0.5));
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .host-title {
        font-size: 14px;
        color: #a0a0a0;
        font-weight: 500;
    }

    .host-value {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #ffffff 0%, rgb(97, 212, 250) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        flex-direction: column;
    }

    .btn-host-card {
        background: rgb(97, 212, 250);
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

    .btn-host-card:hover {
        background: #00e6b8;
        box-shadow: 0 6px 15px rgb(97, 212, 250);
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
        color: rgb(97, 212, 250);
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
        color: rgb(97, 212, 250);
        border-top: 2px solid rgb(97, 212, 250);
        border-bottom: 2px solid rgb(97, 212, 250);
        text-align: right;
    }

    .pricing-table tr:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .modal-btn {
        display: inline-block;
        padding: 8px 15px;
        background-color: rgb(97, 212, 250);
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

    /* domain Section */
    .domain-section {
        padding: 80px 50px;
        text-align: center;
    }

    .domain-section .section-subtitle {
        color: #a8a8a8;
        max-width: 700px;
        margin: 15px auto 50px auto;
        font-size: 1.1rem;
    }

    .domain-content-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .domain-feature-card {
        background: #151a36;
        border-radius: 12px;
        padding: 30px;
        text-align: right;
        border: 1px solid transparent;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .domain-feature-card:hover {
        border-color: rgb(97, 212, 250);
        transform: translateY(-5px);
    }

    .domain-feature-card .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        line-height: 1;
    }

    .domain-feature-card h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: rgb(97, 212, 250);
    }

    .domain-feature-card p {
        color: #e0e0e0;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    .domain-feature-card .cta-link {
        display: block;
        margin-top: 15px;
        color: rgb(97, 212, 250);
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .domain-feature-card .cta-link:hover {
        color: #ff8e53;
    }

    .scroll-reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.7s ease-out, transform 0.7s ease-out;
    }

    .scroll-reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
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
        background: linear-gradient(135deg, rgb(97, 212, 250) 0%, #00ccff 100%);
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
        color: rgb(97, 212, 250);
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
        border-color: rgb(97, 212, 250);
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
        background: linear-gradient(135deg, #ffffff 0%, rgb(97, 212, 250) 100%);
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
        background: linear-gradient(135deg, rgb(97, 212, 250), #00ccff);
        border-radius: 50%;
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

    /* acardion */
    #acardion {
        min-height: 80vh;
        padding: 80px 20px;
        background: #0a0e27;
    }

    .accordion-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .faq-item {
        background-color: transparent;
        border: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 15px;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-header {
        background-color: #1a224a;
        color: #ffffff;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 15px 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
        text-align: right;
        user-select: none;
    }

    .faq-item.active .faq-header {
        color: rgb(97, 212, 250);
    }

    .faq-icon {
        font-size: 1.5rem;
        font-weight: bold;
        transform: rotate(0deg);
        transition: transform 0.3s ease, color 0.3s ease;
        margin-left: 10px;
    }

    .faq-item.active .faq-icon {
        transform: rotate(45deg);
        color: #ff6b6b;
    }

    .faq-content {
        background-color: #0a0e27;
        color: #e0e0e0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        padding: 0 20px;
    }

    .faq-content p {
        padding-top: 20px;
        padding-bottom: 20px;
        line-height: 1.8;
        margin-bottom: 0;
        text-align: right;
        user-select: none;
    }

    .faq-item.active .faq-content {
        max-height: 500px;
        padding: 0 20px;
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
        user-select: none;
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
        border-left-color: rgb(97, 212, 250);
        background: rgba(0, 255, 204, 0.1);
        color: rgb(97, 212, 250);
    }

    /* --- Media Queries - Optimized and Consolidated --- */

    /* Tablet Landscape and large devices (<= 1200px) */
    @media (max-width: 1200px) {
        .charts-grid {
            grid-template-columns: 1fr;
        }

        .domain-content-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .domain-content-grid .domain-feature-card:nth-child(3) {
            grid-column: 1 / -1;
            max-width: 420px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    /* Tablet Portrait and smaller devices (<= 992px) */
    @media (max-width: 992px) {

        /* تنظیمات عمومی ناوبری */
        nav.scrolled {
            padding: 15px 20px;
        }

        /* تنظیمات عمومی بخش هیرو (شامل استایل‌های قدیمی و جدید) */
        .hero-slider-section {
            min-height: 65vh;
        }

        /* تنظیمات کروسل هیرو (جدید) */
        .hero-slide {
            flex-direction: column;
            text-align: center;
            padding: 30px 20px;
            justify-content: center;
        }

        .hero-slider-container {
            padding: 0 15px;
        }

        .hero-content,
        .hero-image {
            max-width: 100%;
        }

        .hero-content {
            /* تلفیق منطق 968px و 992px برای .hero-content */
            grid-template-columns: 1fr;
            /* منطق قدیمی 968px */
            order: 2;
            text-align: center;
            padding: 15px;
        }

        .hero-slide .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-slide .hero-content p {
            font-size: 1.05rem;
        }

        .hero-image {
            order: 1;
            max-width: 80%;
            margin-bottom: 20px;
        }

        /* استایل‌های بخش متنی قدیمی ( hero-text ) - برای جلوگیری از شکست */
        .hero-text h1 {
            font-size: 48px;
            /* منطق 968px */
        }

        .hero-text {
            padding-top: 160px;
            /* منطق 968px */
        }

        /* پایان تنظیمات تلفیقی هیرو */

        .cta-buttons {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .cta-buttons a {
            min-width: 200px;
        }

        .slider-nav-btn {
            top: 60%;
            width: 35px;
            height: 35px;
            font-size: 1.1rem;
            padding: 5px;
        }

        .slider-nav-btn.prev {
            right: 5px;
        }

        .slider-nav-btn.next {
            left: 5px;
        }
    }

    /* Mobile Devices (<= 768px) */
    @media (max-width: 768px) {
        nav {
            padding: 15px 20px;
        }

        .hamburger {
            display: flex;
            /* نمایش دکمه همبرگر */
        }

        .nav-links {
            display: none;
            /* پنهان کردن منوی اصلی */
        }

        /* کاهش بیشتر سایز فونت برای صفحه‌های کوچک‌تر */
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

        .domain-section {
            padding: 50px 20px;
        }

        .domain-content-grid {
            display: flex;
            flex-direction: column;
            /* چیدن آیتم‌ها به صورت دونه دونه */
            align-items: center;
            /* وسط چین کردن آیتم‌ها در محور اصلی (افقی) */
            gap: 30px;
            /* حفظ فاصله بین کارت‌ها */
        }

        .domain-content-grid .domain-feature-card {
            max-width: 90% !important;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .section-title {
            font-size: 2rem;
        }

        .faq-header {
            font-size: 1rem;
            padding: 12px 15px;
        }
    }

    /* Very Small Mobile Devices (<= 480px) */
    @media (max-width: 450px) {

        /* تنظیمات کروسل هیرو (فونت کوچک‌تر) */
        .hero-slide .hero-content h1 {
            font-size: 1.8rem;
        }

        .hero-slide .hero-content p {
            font-size: 1rem;
        }

        .hero-image {
            max-width: 90%;
        }

        .slider-pagination {
            bottom: 40px;
        }

        /* --- Modal Responsive Adjustments --- */
        .modal-content {
            width: 95%;
            margin: 10% auto;
            padding: 15px;
        }

        .modal-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .close-button {
            font-size: 30px;
            top: 5px;
        }

        /* رسپانسیو کردن جدول قیمت‌گذاری با اسکرول افقی */
        .pricing-table-wrapper {
            overflow-x: auto;
            width: 100%;
        }

        .pricing-table {
            width: 400px;
            min-width: 400px;
        }

        .pricing-table thead th {
            padding: 10px;
            font-size: 1rem;
        }

        .pricing-table td {
            padding: 10px;
        }

        .modal-btn {
            padding: 6px 15px;
            font-size: 0.9rem;
        }
    }
    </style>
</head>

<body dir="rtl">
    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">
                <div class="logo-icon">
                    <img class="h-100 w-100 object-fit-cover" src="/images/image.webp" alt />
                </div>
                <span class="logo-text">هاست کافه</span>
            </a>
            <ul class="nav-links">
                <li><a href="#home" class="active">خانه</a></li>
                <li><a href="#hosts">هاست ها</a></li>
                <li><a href="#domain">دامنه</a></li>
                <li><a href="#contact">تماس با ما</a></li>
                <li><a href="#acardion">سوالات متداول</a></li>
            </ul>
            <a href="/index.php" class="login-btn" target="_blank">
                ورود/ثبت نام
            </a>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <ul class="nav-links-mobile" id="navLinksMobile">
            <li><a href="#home" class="active">خانه</a></li>
            <li><a href="#hosts">هاست ها</a></li>
            <li><a href="#domain">دامنه</a></li>
            <li><a href="#contact">تماس با ما</a></li>
            <li><a href="#acardion">سوالات متداول</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero hero-slider-section" id="home">
        <div class="hero-bg"></div>
        <div class="geometric-shapes">
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
            <div class="shape shape6"></div>
        </div>

        <div class="hero-slider-container">

            <!-- one -->
            <div class="hero-slide active">
                <div class="hero-content">
                    <h1>🚀 هاست پرسرعت و دامنه های مطمئن</h1>
                    <p>
                        در هاست کافه، ما بهترین و جدیدترین تکنولوژی‌های هاستینگ را به شما
                        عرضه می‌کنیم. با خرید انواع دامنه و بهره‌مندی از منابع قدرتمند
                        سرور ما، نه تنها سرعت بارگذاری سایت خود را تضمین می‌کنید، بلکه از
                        پایداری و امنیت بالای زیرساخت نیز مطمئن خواهید بود. پشتیبانی آگاه
                        ما در تمام مراحل همراه شماست تا بدون دغدغه، روی محتوای کسب‌وکارتان
                        تمرکز کنید.
                    </p>
                    <div class="cta-buttons">
                        <a href="#hosts" class="primary-btn">مشاهده پلن‌ها</a>
                        <a href="#contact" class="secondary-btn">
                            چرا ما؟
                        </a>
                    </div>
                </div>
            </div>

            <!-- two -->
            <div class="hero-slide">
                <div class="hero-content">
                    <h1>🛡️ امنیت و پشتیبانی ۲۴/۷</h1>
                    <p>
                        امنیت سرور شما، اولویت مطلق ماست. با سیستم‌های هوشمند رصد ۲۴ ساعته
                        و پیشرفته‌ترین فایروال‌ها، از وب‌سایت شما در برابر هرگونه تهدید
                        سایبری محافظت می‌کنیم. تیم مجرب پشتیبانی ما در ۷ روز هفته و تمام
                        ساعات شبانه‌روز، آماده است تا در کمترین زمان ممکن، مشکلات فنی شما
                        را برطرف کند. دیگر نگران Downtime و تهدیدهای امنیتی نباشید.
                    </p>
                    <div class="cta-buttons">
                        <a href="#hosts" class="primary-btn">مشاهده پلن‌ها</a>
                        <a href="#contact" class="secondary-btn">تماس با ما</a>
                    </div>
                </div>
            </div>

            <!-- three -->
            <div class="hero-slide">
                <div class="hero-content">
                    <h1>📈 مقیاس‌پذیری بی‌نظیر</h1>
                    <p>
                        <b>از استارت‌آپ تا اینترپرایز
                            : مقیاس‌پذیری بدون درز، تعریف جدیدی از
                            رشد.</b>
                        <br>
                        <b>آزادی کامل در مدیریت منابع</b>: با پنل مدیریت پیشرفته، شما
                        کنترل کامل
                        بر منابع خود دارید. می‌توانید برای پیک‌های فصلی منابع را بالا
                        ببرید و پس از پایان رویداد، برای صرفه‌جویی در هزینه‌ها، منابع را
                        به حالت اولیه بازگردانید.
                        <br>
                        <b>این زیرساخت، ستون فقرات رشد پایدار شماست.
                            با خیالی آسوده، بزرگ فکر
                            کنید.</b>
                    </p>
                    <div class="cta-buttons">
                        <a href="#hosts" class="primary-btn">مشاهده پلن‌ها</a>
                        <a href="#contact" class="secondary-btn">سؤالات متداول</a>
                    </div>
                </div>
            </div>
        </div>

        <button id="prevSlide" class="slider-nav-btn prev">❮</button>
        <button id="nextSlide" class="slider-nav-btn next">❯</button>

        <!-- <div class="slider-pagination" id="sliderPagination">
      </div>-->
    </section>

    <!-- hosts Section -->
    <section class="hosts-section" id="hosts">
        <div class="hosts-container">
            <h2 class="section-title">هاست ها</h2>
            <!-- hosts Cards -->
            <div class="hosts-flex">

                <!-- هاست 1 ماهه -->
                <div class="host-card">
                    <div class="host-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="host-icon">
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
                            <div class="host-title">هاست های</div>
                        </div>
                        <div>1 ماهه</div>
                    </div>
                    <div class="host-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>50.000 تومان</span>
                            تا
                            <span>3.500.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-host-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>

                <!-- هاست 3 ماهه -->
                <div class="host-card">
                    <div class="host-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="host-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient x1="0%" y1="0%" x2="0%" y2="100%">
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
                            <div class="host-title">هاست های</div>
                        </div>
                        <div>3 ماهه</div>
                    </div>
                    <div class="host-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>130.000 تومان</span>
                            تا
                            <span>16.500.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-host-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>

                <!-- هاست 6 ماهه -->
                <div class="host-card">
                    <div class="host-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="host-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient x1="0%" y1="0%" x2="0%" y2="100%">
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
                            <div class="host-title">هاست های</div>
                        </div>
                        <div>6 ماهه</div>
                    </div>
                    <div class="host-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>240.000 تومان</span>
                            تا
                            <span>240.000.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-host-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>

                <!-- هاست 1 ساله -->
                <div class="host-card">
                    <div class="host-header">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="host-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="28" height="28"
                                    preserveAspectRatio="xMidYMid slice">
                                    <defs>
                                        <lineargradient x1="0%" y1="0%" x2="0%" y2="100%">
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
                            <div class="host-title">هاست های</div>
                        </div>
                        <div>1 ساله</div>
                    </div>
                    <div class="host-value">
                        <div>شروع قیمت ها از :</div>
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>450.000 تومان</span>
                            تا
                            <span>768.000.000 تومان</span>
                        </div>
                    </div>
                    <button class="btn-host-card open-pricing-modal-btn" style="margin-top: 15px">
                        مشاهده تمام پلن‌ها
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- domain Section -->
    <section class="domain-section" id="domain" dir="rtl">
        <div class="section-container">
            <h2 class="section-title">ثبت و انتقال دامنه</h2>
            <p class="section-subtitle">
                دامنه مورد نظر خود را جستجو کنید و یا دامنه‌های فعلی خود را به
                سرویس‌های ما منتقل نمایید.
            </p>

            <div class="domain-content-grid">

                <div class="domain-feature-card scroll-reveal" data-index="0">
                    <div class="feature-icon">🚀</div>
                    <h3 class="feature-title"><b>جستجوی هوشمند و ثبت فوری</b>
                    </h3>
                    <p>
                        <b>یافتن نام دامنه ایده‌آل شما دیگر یک چالش نیست.</b> موتور جستجوی
                        هوشمند ما، دامنه‌های خالی در تمام پسوندهای عمومی (.com, .net) و
                        ملی (.ir) را در کسری از ثانیه پیدا می‌کند و فرآیند ثبت را به صورت
                        کاملاً خودکار و فوری انجام می‌دهد.
                    </p>
                    <a href="#register" class="cta-link">شروع جستجوی دامنه &larr;</a>
                </div>

                <div class="domain-feature-card scroll-reveal" data-index="1">
                    <div class="feature-icon">🛡️</div>
                    <h3 class="feature-title"><b>انتقال رایگان همراه با تمدید
                            هدیه</b></h3>
                    <p>
                        <b>دامنه‌های خود را با اطمینان کامل به ما بسپارید.</b> ما انتقال
                        دامنه‌های شما را بدون قطعی سرویس و به صورت رایگان انجام می‌دهیم.
                        همچنین، پس از انتقال موفق، یک دوره تمدید رایگان (بسته به پسوند) از
                        ما هدیه بگیرید.
                    </p>
                    <a href="#transfer" class="cta-link">انتقال دامنه موجود &larr;</a>
                </div>

                <div class="domain-feature-card scroll-reveal" data-index="2">
                    <div class="feature-icon">⚙️</div>
                    <h3 class="feature-title"><b>مدیریت حرفه‌ای و ابزارهای
                            توسعه‌دهنده</b></h3>
                    <p>
                        <b>کنترل کامل در دستان شماست.</b> به ابزارهای پیشرفته مدیریت
                        رکوردهای DNS (A, CNAME, MX, TXT) و تنظیمات WHOIS دسترسی داشته
                        باشید. همچنین، قابلیت قفل دامنه (Domain Lock) برای بالاترین سطح
                        امنیت فراهم شده است.
                    </p>
                    <a href="#management" class="cta-link">دسترسی به پنل مدیریت
                        &larr;</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <!--<section class="reports-section" id="reports">
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
    </section> -->

    <!-- Contact Section -->
    <section class="contact-section" id="contact" dir="rtl">
        <h2 class="section-title">تماس با ما</h2>
        <div class="contact-grid">

            <div class="contact-form">
                <h3 style="margin-bottom: 30px; font-size: 24px; text-align: right;">
                    پیام خود را برای ما ارسال کنید
                </h3>
                <form id="contactForm" dir="rtl">
                    <div class="form-group">
                        <label for="name">نام کامل</label>
                        <input type="text" id="name" name="name" required placeholder="مثلاً: احمد محمدی" />
                    </div>
                    <div class="form-group">
                        <label for="email">آدرس ایمیل</label>
                        <input type="email" id="email" name="email" required placeholder="user@example.com" />
                    </div>
                    <div class="form-group">
                        <label for="subject">موضوع</label>
                        <input type="text" id="subject" name="subject" required
                            placeholder="مثلاً: پیگیری سفارش هاست" />
                    </div>
                    <div class="form-group">
                        <label for="message">متن پیام</label>
                        <textarea id="message" name="message" required
                            placeholder="درباره نیاز یا سوال خود توضیح دهید..."></textarea>
                    </div>
                    <button type="submit" class="cta-button" style="width: 100%">
                        ارسال پیام
                    </button>
                </form>
            </div>

            <div class="contact-info">

                <a href="mailto:info@hostcofe.com" class="contact-item"
                    style="text-decoration: none; color: inherit; direction: rtl;">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" fill="rgba(0,0,0,1)">
                            <path
                                d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                            </path>
                        </svg></div>
                    <div class="contact-details" style="text-align: right;">
                        <h4>آدرس ایمیل</h4>
                        <p>info@hostcofe.com</p>
                    </div>
                </a>

                <div class="contact-item phone-block" style="direction: rtl;">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" fill="rgba(0,0,0,1)">
                            <path
                                d="M4 12H7C8.10457 12 9 12.8954 9 14V19C9 20.1046 8.10457 21 7 21H4C2.89543 21 2 20.1046 2 19V12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V19C22 20.1046 21.1046 21 20 21H17C15.8954 21 15 20.1046 15 19V14C15 12.8954 15.8954 12 17 12H20C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12Z">
                            </path>
                        </svg></div>
                    <div class="contact-details" style="text-align: right;">
                        <h4>شماره‌های تماس ثابت</h4>

                        <p style="margin-bottom: 5px;">
                            <a href="tel:+982122841589" style="text-decoration: none; color: inherit;">
                                ۰۲۱-۲۲۸۴۱۵۸۹
                            </a>
                        </p>

                        <p style="margin-bottom: 5px;">
                            <a href="tel:+982122891940" style="text-decoration: none; color: inherit;">
                                ۰۲۱-۲۲۸۹۱۹۴۰
                            </a>
                        </p>

                        <p style="margin-bottom: 0;">
                            <a href="tel:+982122896293" style="text-decoration: none; color: inherit;">
                                ۰۲۱-۲۲۸۹۶۲۹۳
                            </a>
                        </p>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=123+Data+Drive+Suite+100+Analytics+City" target="_blank"
                    rel="noopener" class="contact-item" style="text-decoration: none; color: inherit; direction: rtl;">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" fill="rgba(0,0,0,1)">
                            <path
                                d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z">
                            </path>
                        </svg></div>
                    <div class="contact-details" style="text-align: right;">
                        <h4>آدرس دفتر مرکزی</h4>
                        <p>تهران، پاسداران ، نگارستان چهارم، پلاک 4، طبقه دوم</p>
                    </div>
                </a>

                <div class="contact-item" style="direction: rtl;">
                    <div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" fill="rgba(0,0,0,1)">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM13 12V7H11V14H17V12H13Z">
                            </path>
                        </svg></div>
                    <div class="contact-details" style="text-align: right;">
                        <h4>ساعات کاری</h4>
                        <p>
                            پشتیبانی فنی:
                            <b>۲۴ ساعت شبانه‌روز</b>
                            <br />بخش فروش و اداری: شنبه
                            <b>تا چهارشنبه، ۹ صبح تا ۵ عصر</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="acardion">
        <div class="accordion-container">
            <h2 class="section-title text-center mb-5">سوالات متداول (FAQ)</h2>
            <div class="faq-accordion" id="faqAccordionCustom">

                <!-- one -->
                <div class="faq-item">
                    <div class="faq-header" data-index="0">
                        🛡️ چگونه امنیت سایت من ۲۴ ساعته حفظ می‌شود؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>ما از سیستم‌های <strong>مانیتورینگ فعال و هوشمند</strong>
                            بهره
                            می‌بریم که
                            سرور شما را دقیقه به دقیقه برای شناسایی هرگونه فعالیت مشکوک و
                            تلاش برای نفوذ رصد می‌کنند. علاوه بر فایروال‌های پیشرفته، با
                            استفاده از فناوری‌های رمزنگاری لایه بالا، از داده‌های شما در
                            برابر حملات DDoS و نفوذهای احتمالی محافظت می‌کنیم.</p>
                    </div>
                </div>

                <!-- two -->
                <div class="faq-item">
                    <div class="faq-header" data-index="1">
                        🕒 سرعت پاسخگویی تیم پشتیبانی شما چقدر است؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>هدف ما پاسخگویی فوری است. تیم متخصصین ما در
                            <strong>۲۴/۷</strong> از
                            طریق
                            تیکت و چت آنلاین در دسترس هستند. میانگین زمان پاسخ اولیه ما
                            برای
                            مشکلات اورژانسی <strong>کمتر از ۱۰ دقیقه</strong> است تا
                            اطمینان
                            حاصل شود که
                            کسب‌وکار آنلاین شما در کمترین زمان ممکن به کار خود ادامه
                            می‌دهد.
                        </p>
                    </div>
                </div>

                <!-- three -->
                <div class="faq-item">
                    <div class="faq-header" data-index="2">
                        📈 آیا هاستینگ شما ظرفیت مدیریت ترافیک‌های سنگین و ناگهانی را
                        دارد؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>بله، زیرساخت <strong>Cloud</strong> ما به شما این اطمینان را
                            می‌دهد. سرورهای
                            ما به‌گونه‌ای طراحی شده‌اند که هنگام افزایش ناگهانی ترافیک در
                            پی
                            کمپین‌های فروش یا رویدادهای بزرگ، منابع لازم را <strong>به
                                صورت خودکار
                                و بدون نیاز به خاموشی</strong> تامین کنند. در نتیجه، سایت
                            شما هرگز با
                            خطای کمبود منابع مواجه نخواهد شد.</p>
                    </div>
                </div>

                <!-- four -->
                <div class="faq-item">
                    <div class="faq-header" data-index="3">
                        🔄 آیا انتقال وب‌سایت من از سرویس‌دهنده قبلی به هاست کافه رایگان
                        است؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>بله، تیم فنی ما فرآیند انتقال کامل وب‌سایت شما را از هر
                            سرویس‌دهنده دیگری به هاست کافه <strong>به صورت کاملاً
                                رایگان</strong> و در
                            سریع‌ترین زمان ممکن انجام می‌دهد. این عملیات توسط کارشناسان ما
                            و
                            با تضمین <strong>عدم قطعی</strong> یا ایجاد اختلال در عملکرد
                            سایت شما صورت
                            می‌گیرد.</p>
                    </div>
                </div>

                <!-- five -->
                <div class="faq-item">
                    <div class="faq-header" data-index="4">
                        💿 بک‌آپ‌گیری از داده‌های سایت من با چه فرکانسی انجام می‌شود؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>ما اهمیت داده‌های شما را درک می‌کنیم. سیستم بک‌آپ‌گیری ما به
                            صورت <strong>روزانه (Daily)</strong> و
                            <strong>اتوماتیک</strong> از تمامی فایل‌ها و پایگاه‌های داده
                            شما نسخه پشتیبان تهیه می‌کند. این نسخه‌ها در سرورهای مجزا و
                            امن نگهداری می‌شوند و شما می‌توانید در هر زمان که نیاز داشتید،
                            با یک کلیک ساده، سایت خود را به وضعیت قبلی
                            <strong>بازیابی</strong> کنید.
                        </p>
                    </div>
                </div>

                <!-- six -->
                <div class="faq-item">
                    <div class="faq-header" data-index="5">
                        💰 آیا امکان ارتقاء (Upgrade) پلن میزبانی من در آینده وجود دارد؟
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-content">
                        <p>بله، ارتقاء پلن هاستینگ شما در <strong>هاست کافه</strong>
                            بسیار آسان و بدون هیچگونه قطعی سرویس انجام می‌شود. شما
                            می‌توانید هر زمان که کسب‌وکار و ترافیک سایتتان رشد کرد، منابع
                            خود (مانند حافظه و پهنای باند) را به <strong>پلن
                                بالاتر</strong> ارتقاء دهید. تنها تفاوت قیمت باقی‌مانده از
                            دوره فعلی محاسبه خواهد شد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="copyright">
                <b>© کلیه حقوق مادی و معنوی این وب‌سایت متعلق به هاست کافه محفوظ است.</b>
                | <b>ارائه دهنده راهکارهای میزبانی وب پرسرعت و امن</b>
                | <b>ارائه شده توسط برنامه نویسان شرکت دیتا پردازش.</b>
            </p>
        </div>
    </footer>

    <div id="hostingPricingModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3>جدول کامل پلن‌های هاستینگ</h3>

            <div class="pricing-table-wrapper">
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
            </div>
            <p style="margin-top: 20px; font-size: 0.8em; color: #aaa">
                تمام قیمت‌ها ماهانه هستند.
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script>
    const hamburger = document.getElementById("hamburger");
    const navLinksMobile = document.getElementById("navLinksMobile");
    const mobileLinks = navLinksMobile.querySelectorAll("a");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("active");
        navLinksMobile.classList.toggle("active");
    });

    // Close mobile menu when a link is clicked
    mobileLinks.forEach((link) => {
        link.addEventListener("click", function() {
            hamburger.classList.remove("active");
            navLinksMobile.classList.remove("active");
        });
    });

    // Close mobile menu when scrolling
    window.addEventListener("scroll", function() {
        hamburger.classList.remove("active");
        navLinksMobile.classList.remove("active");
    });

    // Navbar scroll effect
    window.addEventListener("scroll", function() {
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
        anchor.addEventListener("click", function(e) {
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
            option.addEventListener("click", function() {
                options.forEach((opt) => opt.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });

    // Form submission handler
    document.getElementById("contactForm").addEventListener("submit", function(e) {
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
            input.addEventListener("focus", function() {
                this.style.borderColor = "rgba(0, 255, 204, 0.5)";
                this.style.background = "rgba(255, 255, 255, 0.08)";
                this.style.boxShadow = "0 0 20px rgba(0, 255, 204, 0.1)";
            });

            input.addEventListener("blur", function() {
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

    // ۱. تعریف داده‌ها
    const hostingPlans = [{
            storage: "1 GB",
            price: "50,000 تومان",
            url: "https://hostcofe.com/index.php?rp=/store/shared-host/hst-shtkhy",
        },
        {
            storage: "5 GB",
            price: "120,000 تومان",
            url: "https://hostcofe.com/index.php?rp=/store/shared-host/hst-shtkhy",
        },
        {
            storage: "10 GB",
            price: "210,000 تومان",
            url: "https://hostcofe.com/index.php?rp=/store/shared-host/hst-shtkhy",
        },
        {
            storage: "20 GB",
            price: "390,000 تومان",
            url: "https://hostcofe.com/index.php?rp=/store/shared-host/hst-shtkhy",
        },
        {
            storage: "50 GB",
            price: "750,000 تومان",
            url: "https://hostcofe.com/index.php?rp=/store/shared-host/hst-shtkhy",
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

    openBtns.forEach((button) => {
        button.onclick = function() {
            // هر بار قبل از باز شدن، جدول را از روی داده‌های جدید تولید می‌کنیم
            generatePricingTable();

            modal.style.display = "block";
            document.body.style.overflow = "hidden"; // جلوگیری از اسکرول صفحه زیر مودال
        };
    });

    closeBtn.onclick = function() {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
    };

    // --- Hero Slider Logic ---
    const slides = document.querySelectorAll(".hero-slide");
    const prevButton = document.getElementById("prevSlide");
    const nextButton = document.getElementById("nextSlide");
    let currentSlide = 0;
    let autoSlideInterval;


    function showSlide(index) {
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }

        slides.forEach((slide) => slide.classList.remove("active"));

        slides[currentSlide].classList.add("active");
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    function startAutoSlide() {
        if (slides.length > 1) {
            autoSlideInterval = setInterval(() => {
                showSlide(currentSlide + 1);
            }, 5000); // زمان ۵ ثانیه برای هر اسلاید
        }
    }

    if (prevButton) {
        prevButton.addEventListener("click", () => {
            resetAutoSlide();
            showSlide(currentSlide - 1);
        });
    }

    if (nextButton) {
        nextButton.addEventListener("click", () => {
            resetAutoSlide();
            showSlide(currentSlide + 1);
        });
    }

    // ۵. اجرای اولیه - پس از بارگذاری کامل صفحه
    window.addEventListener("load", () => {
        showSlide(currentSlide);
        startAutoSlide(); // شروع اتوپلی
    });

    // scroll domain
    function setupStaggeredScrollReveal() {
        // انتخاب تمام عناصری که کلاس scroll-reveal دارند
        const revealElements = document.querySelectorAll(".scroll-reveal");

        // یک مجموعه (Set) برای ردیابی عناصری که قبلاً متحرک شده‌اند
        const animatedElements = new Set();

        function checkVisibility() {
            revealElements.forEach((element) => {
                // اگر قبلاً متحرک شده، دیگر نیازی به بررسی نیست
                if (animatedElements.has(element)) {
                    return;
                }

                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100 && rect.bottom > 0) {
                    const dataIndex = element.getAttribute("data-index");
                    const delay = (dataIndex ? parseInt(dataIndex) : 0) * 250;

                    setTimeout(() => {
                        element.classList.add("is-visible");
                        animatedElements.add(element);
                    }, delay);
                }
            });
        }

        window.addEventListener("load", checkVisibility);
        window.addEventListener("scroll", checkVisibility);
        window.addEventListener("resize", checkVisibility);
        checkVisibility();
    }
    setupStaggeredScrollReveal();

    // --- Accordion (FAQ) ---
    function setupAccordion() {
        const faqItems = document.querySelectorAll(".faq-item");
        const faqHeaders = document.querySelectorAll(".faq-header");

        faqHeaders.forEach((header) => {
            header.addEventListener("click", () => {
                // پیدا کردن والد (faq-item)
                const currentItem = header.parentElement;

                // اگر همین آیتم فعال بود، غیرفعالش کن
                if (currentItem.classList.contains("active")) {
                    currentItem.classList.remove("active");
                } else {
                    // ۱. بستن همه آیتم‌های باز دیگر
                    faqItems.forEach((item) => {
                        item.classList.remove("active");
                    });

                    // ۲. باز کردن آیتم فعلی
                    currentItem.classList.add("active");
                }
            });
        });
    }

    // اجرای تابع راه‌اندازی آکاردئون پس از لود شدن کامل DOM
    document.addEventListener("DOMContentLoaded", setupAccordion);
    </script>
</body>

</html>