<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hồng Hiến - Đồ Điện Gia Dụng & Thiết Bị Chiếu Sáng</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Be+Vietnam+Pro:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --color-bg: #FAF8F5;
      --color-bg-alt: #F5F2ED;
      --color-text: #1A1A1A;
      --color-text-muted: #6B6B6B;
      --color-accent: #C4A484;
      --color-accent-dark: #A68B6A;
      --color-border: #E8E4DE;
      --font-heading: 'Cormorant Garamond', serif;
      --font-body: 'Be Vietnam Pro', sans-serif;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: var(--font-body);
      background-color: var(--color-bg);
      color: var(--color-text);
      line-height: 1.6;
      font-weight: 300;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Header */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      background: rgba(250, 248, 245, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--color-border);
    }

    .header-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 24px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo {
      font-family: var(--font-heading);
      font-size: 1.75rem;
      font-weight: 600;
      color: var(--color-text);
      text-decoration: none;
      letter-spacing: 0.02em;
    }

    .logo span {
      color: var(--color-accent);
    }

    nav {
      display: flex;
      gap: 40px;
    }

    nav a {
      font-size: 0.875rem;
      color: var(--color-text-muted);
      text-decoration: none;
      font-weight: 400;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      transition: color 0.3s ease;
      position: relative;
    }

    nav a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 1px;
      background: var(--color-accent);
      transition: width 0.3s ease;
    }

    nav a:hover {
      color: var(--color-text);
    }

    nav a:hover::after {
      width: 100%;
    }

    .header-contact {
      font-size: 0.875rem;
      color: var(--color-text);
      font-weight: 500;
      letter-spacing: 0.02em;
    }

    /* Hero */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: 80px;
      background: linear-gradient(135deg, var(--color-bg) 0%, var(--color-bg-alt) 100%);
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(196, 164, 132, 0.08) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .hero-text {
      position: relative;
      z-index: 1;
    }

    .hero-label {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      color: var(--color-accent);
      margin-bottom: 24px;
      font-weight: 500;
    }

    .hero h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 500;
      line-height: 1.1;
      margin-bottom: 24px;
      color: var(--color-text);
    }

    .hero p {
      font-size: 1.125rem;
      color: var(--color-text-muted);
      margin-bottom: 40px;
      max-width: 480px;
      line-height: 1.8;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 16px 32px;
      font-size: 0.875rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-family: var(--font-body);
    }

    .btn-primary {
      background: var(--color-text);
      color: var(--color-bg);
    }

    .btn-primary:hover {
      background: var(--color-accent-dark);
    }

    .btn-outline {
      background: transparent;
      color: var(--color-text);
      border: 1px solid var(--color-border);
    }

    .btn-outline:hover {
      border-color: var(--color-text);
    }

    .hero-visual {
      position: relative;
      height: 500px;
    }

    .hero-card {
      position: absolute;
      background: white;
      padding: 32px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.06);
    }

    .hero-card-1 {
      top: 0;
      right: 40px;
      width: 280px;
    }

    .hero-card-2 {
      bottom: 40px;
      left: 0;
      width: 240px;
    }

    .hero-card h3 {
      font-family: var(--font-heading);
      font-size: 1.25rem;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .hero-card p {
      font-size: 0.875rem;
      color: var(--color-text-muted);
      margin-bottom: 0;
    }

    .stat-number {
      font-family: var(--font-heading);
      font-size: 3rem;
      font-weight: 600;
      color: var(--color-accent);
      line-height: 1;
    }

    /* Section */
    section {
      padding: 120px 0;
    }

    .section-header {
      text-align: center;
      max-width: 600px;
      margin: 0 auto 80px;
    }

    .section-label {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      color: var(--color-accent);
      margin-bottom: 16px;
      font-weight: 500;
    }

    .section-title {
      font-family: var(--font-heading);
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 500;
      margin-bottom: 16px;
      line-height: 1.2;
    }

    .section-desc {
      color: var(--color-text-muted);
      font-size: 1rem;
      line-height: 1.8;
    }

    /* About */
    .about {
      background: white;
    }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .about-content h2 {
      font-family: var(--font-heading);
      font-size: 2.5rem;
      font-weight: 500;
      margin-bottom: 24px;
      line-height: 1.2;
    }

    .about-content p {
      color: var(--color-text-muted);
      margin-bottom: 16px;
      line-height: 1.8;
    }

    .info-list {
      margin-top: 40px;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .info-item {
      display: flex;
      gap: 16px;
      padding: 20px;
      background: var(--color-bg);
      border-left: 3px solid var(--color-accent);
    }

    .info-item strong {
      font-weight: 500;
      min-width: 140px;
      color: var(--color-text);
    }

    .info-item span {
      color: var(--color-text-muted);
    }

    .about-visual {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .about-stat {
      padding: 40px;
      background: var(--color-bg);
      text-align: center;
    }

    .about-stat-main {
      grid-column: span 2;
      background: var(--color-text);
      color: var(--color-bg);
    }

    .about-stat-main .stat-value {
      color: var(--color-accent);
    }

    .stat-value {
      font-family: var(--font-heading);
      font-size: 3.5rem;
      font-weight: 600;
      line-height: 1;
      margin-bottom: 8px;
      color: var(--color-accent);
    }

    .stat-label {
      font-size: 0.875rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    /* Products */
    .products {
      background: var(--color-bg);
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
    }

    .product-card {
      background: white;
      padding: 48px 32px;
      text-align: center;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .product-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--color-accent);
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.08);
    }

    .product-card:hover::before {
      transform: scaleX(1);
    }

    .product-icon {
      width: 64px;
      height: 64px;
      margin: 0 auto 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--color-bg);
      border-radius: 50%;
    }

    .product-icon svg {
      width: 28px;
      height: 28px;
      stroke: var(--color-accent);
      fill: none;
      stroke-width: 1.5;
    }

    .product-card h3 {
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 500;
      margin-bottom: 12px;
    }

    .product-card p {
      color: var(--color-text-muted);
      font-size: 0.9375rem;
      line-height: 1.7;
    }

    /* Features */
    .features {
      background: var(--color-text);
      color: var(--color-bg);
    }

    .features .section-label {
      color: var(--color-accent);
    }

    .features .section-title {
      color: var(--color-bg);
    }

    .features .section-desc {
      color: rgba(250, 248, 245, 0.7);
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 48px;
    }

    .feature-item {
      text-align: center;
    }

    .feature-number {
      font-family: var(--font-heading);
      font-size: 4rem;
      font-weight: 600;
      color: var(--color-accent);
      line-height: 1;
      margin-bottom: 16px;
    }

    .feature-item h4 {
      font-size: 1rem;
      font-weight: 500;
      margin-bottom: 8px;
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    .feature-item p {
      font-size: 0.875rem;
      color: rgba(250, 248, 245, 0.6);
      line-height: 1.7;
    }

    /* Contact */
    .contact {
      background: white;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
    }

    .contact-info h2 {
      font-family: var(--font-heading);
      font-size: 2.5rem;
      font-weight: 500;
      margin-bottom: 24px;
    }

    .contact-info > p {
      color: var(--color-text-muted);
      margin-bottom: 40px;
      line-height: 1.8;
    }

    .contact-details {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .contact-item {
      display: flex;
      gap: 20px;
    }

    .contact-item-icon {
      width: 48px;
      height: 48px;
      background: var(--color-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .contact-item-icon svg {
      width: 20px;
      height: 20px;
      stroke: var(--color-accent);
      fill: none;
      stroke-width: 1.5;
    }

    .contact-item h4 {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--color-text-muted);
      margin-bottom: 4px;
      font-weight: 500;
    }

    .contact-item p {
      color: var(--color-text);
      font-weight: 400;
    }

    .contact-form {
      background: var(--color-bg);
      padding: 48px;
    }

    .contact-form h3 {
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 500;
      margin-bottom: 32px;
    }

    .form-group {
      margin-bottom: 24px;
    }

    .form-group label {
      display: block;
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--color-text-muted);
      margin-bottom: 8px;
      font-weight: 500;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 16px;
      border: 1px solid var(--color-border);
      background: white;
      font-family: var(--font-body);
      font-size: 1rem;
      color: var(--color-text);
      transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--color-accent);
    }

    .form-group textarea {
      min-height: 120px;
      resize: vertical;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    /* Footer */
    footer {
      background: var(--color-text);
      color: var(--color-bg);
      padding: 80px 0 40px;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 60px;
      margin-bottom: 60px;
    }

    .footer-brand .logo {
      color: var(--color-bg);
      display: inline-block;
      margin-bottom: 20px;
    }

    .footer-brand p {
      color: rgba(250, 248, 245, 0.6);
      font-size: 0.9375rem;
      line-height: 1.8;
      margin-bottom: 24px;
    }

    .footer-title {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      margin-bottom: 24px;
      font-weight: 500;
    }

    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .footer-links a {
      color: rgba(250, 248, 245, 0.6);
      text-decoration: none;
      font-size: 0.9375rem;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--color-accent);
    }

    .footer-bottom {
      padding-top: 40px;
      border-top: 1px solid rgba(250, 248, 245, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .footer-bottom p {
      color: rgba(250, 248, 245, 0.4);
      font-size: 0.875rem;
    }

    /* Mobile Menu */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px;
    }

    .mobile-menu-btn span {
      display: block;
      width: 24px;
      height: 2px;
      background: var(--color-text);
      margin: 5px 0;
      transition: all 0.3s ease;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .hero-content,
      .about-grid,
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 60px;
      }

      .hero-visual {
        display: none;
      }

      .products-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .features-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
      }
    }

    @media (max-width: 768px) {
      nav {
        display: none;
      }

      .mobile-menu-btn {
        display: block;
      }

      .header-contact {
        display: none;
      }

      section {
        padding: 80px 0;
      }

      .products-grid {
        grid-template-columns: 1fr;
      }

      .features-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .about-visual {
        grid-template-columns: 1fr;
      }

      .about-stat-main {
        grid-column: span 1;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .footer-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .footer-bottom {
        flex-direction: column;
        gap: 16px;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="header-inner">
      <a href="#" class="logo">Hồng<span>Hiến</span></a>
      <nav>
        <a href="#about">Giới thiệu</a>
        <a href="#products">Sản phẩm</a>
        <a href="#features">Cam kết</a>
        <a href="#contact">Liên hệ</a>
      </nav>
      <div class="header-contact">0766 667 020</div>
      <button class="mobile-menu-btn" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <div class="hero-label">Thành lập từ 2005</div>
          <h1>Đồ Điện Gia Dụng & Thiết Bị Chiếu Sáng</h1>
          <p>
            Nhà phân phối uy tín hàng đầu khu vực Tây Nguyên. Chuyên cung cấp sỉ các sản phẩm
            đèn, thiết bị chiếu sáng và đồ điện gia dụng chất lượng cao.
          </p>
          <div style="display: flex; gap: 16px; flex-wrap: wrap;">
            <a href="#contact" class="btn btn-primary">
              Liên hệ ngay
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
            <a href="#products" class="btn btn-outline">Xem sản phẩm</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="hero-card hero-card-1">
            <div class="stat-number">20+</div>
            <h3>Năm kinh nghiệm</h3>
            <p>Đồng hành cùng khách hàng</p>
          </div>
          <div class="hero-card hero-card-2">
            <h3>Đối tác tin cậy</h3>
            <p>Hơn 500 đại lý trên toàn khu vực Tây Nguyên</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-content">
          <div class="section-label">Về chúng tôi</div>
          <h2>Công ty TNHH TM&DV Hồng Hiến</h2>
          <p>
            Với hơn 20 năm hoạt động trong lĩnh vực phân phối đồ điện gia dụng và thiết bị
            chiếu sáng, chúng tôi tự hào là đối tác tin cậy của hàng trăm đại lý và cửa hàng
            trên khắp khu vực Tây Nguyên.
          </p>
          <p>
            Chúng tôi cam kết mang đến những sản phẩm chất lượng, giá cả cạnh tranh và dịch vụ
            hậu mãi tận tâm.
          </p>
          <div class="info-list">
            <div class="info-item">
              <strong>Mã số thuế</strong>
              <span>6000467853</span>
            </div>
            <div class="info-item">
              <strong>Người đại diện</strong>
              <span>Hà Văn Hiến</span>
            </div>
            <div class="info-item">
              <strong>Ngành nghề</strong>
              <span>Bán buôn đồ điện gia dụng, đèn và bộ đèn điện</span>
            </div>
          </div>
        </div>
        <div class="about-visual">
          <div class="about-stat about-stat-main">
            <div class="stat-value">2005</div>
            <div class="stat-label">Năm thành lập</div>
          </div>
          <div class="about-stat">
            <div class="stat-value">500+</div>
            <div class="stat-label">Đại lý</div>
          </div>
          <div class="about-stat">
            <div class="stat-value">1000+</div>
            <div class="stat-label">Sản phẩm</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products -->
  <section class="products" id="products">
    <div class="container">
      <div class="section-header">
        <div class="section-label">Danh mục</div>
        <h2 class="section-title">Sản Phẩm Kinh Doanh</h2>
        <p class="section-desc">
          Đa dạng các sản phẩm điện gia dụng và thiết bị chiếu sáng từ các thương hiệu uy tín
        </p>
      </div>
      <div class="products-grid">
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <path d="M9 18h6M10 22h4M12 2v1M12 6a4 4 0 0 0-4 4c0 2 2 4 2 6h4c0-2 2-4 2-6a4 4 0 0 0-4-4Z"/>
            </svg>
          </div>
          <h3>Đèn LED</h3>
          <p>Đèn LED các loại: bóng đèn, đèn ống, đèn panel tiết kiệm năng lượng</p>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="3"/>
              <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
            </svg>
          </div>
          <h3>Đèn Trang Trí</h3>
          <p>Đèn chùm, đèn thả, đèn tường, đèn sân vườn cao cấp</p>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="3"/>
              <path d="M12 5V3M12 21v-2M16.24 7.76l1.42-1.42M6.34 17.66l-1.42 1.42M19 12h2M3 12h2M17.66 17.66l1.42 1.42M6.34 6.34L4.92 4.92"/>
            </svg>
          </div>
          <h3>Quạt Điện</h3>
          <p>Quạt trần, quạt đứng, quạt treo tường, quạt hộp các loại</p>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
              <path d="M16 3v4M8 3v4"/>
            </svg>
          </div>
          <h3>Đồ Điện Gia Dụng</h3>
          <p>Nồi cơm điện, bếp từ, ấm siêu tốc và nhiều thiết bị khác</p>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18.36 6.64a9 9 0 1 1-12.73 0M12 2v10"/>
            </svg>
          </div>
          <h3>Thiết Bị Điện</h3>
          <p>Ổ cắm, công tắc, aptomat, dây điện các loại</p>
        </div>
        <div class="product-card">
          <div class="product-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h3>Thiết Bị Chiếu Sáng</h3>
          <p>Đèn đường, đèn công nghiệp, đèn nhà xưởng</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="features" id="features">
    <div class="container">
      <div class="section-header">
        <div class="section-label">Tại sao chọn chúng tôi</div>
        <h2 class="section-title">Cam Kết Của Hồng Hiến</h2>
        <p class="section-desc">
          Những giá trị cốt lõi tạo nên sự khác biệt và niềm tin từ khách hàng
        </p>
      </div>
      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-number">01</div>
          <h4>Giá sỉ tốt nhất</h4>
          <p>Cam kết giá sỉ cạnh tranh nhất thị trường khu vực Tây Nguyên</p>
        </div>
        <div class="feature-item">
          <div class="feature-number">02</div>
          <h4>Hàng chính hãng</h4>
          <p>100% sản phẩm chính hãng, có đầy đủ giấy tờ và bảo hành</p>
        </div>
        <div class="feature-item">
          <div class="feature-number">03</div>
          <h4>Giao hàng nhanh</h4>
          <p>Giao hàng tận nơi trong vòng 24h cho khu vực Đắk Lắk</p>
        </div>
        <div class="feature-item">
          <div class="feature-number">04</div>
          <h4>Hỗ trợ 24/7</h4>
          <p>Đội ngũ tư vấn nhiệt tình, sẵn sàng hỗ trợ mọi lúc</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-info">
          <div class="section-label">Liên hệ</div>
          <h2>Kết Nối Với Chúng Tôi</h2>
          <p>
            Hãy liên hệ để được tư vấn và báo giá tốt nhất. Chúng tôi luôn sẵn sàng phục vụ
            quý khách.
          </p>
          <div class="contact-details">
            <div class="contact-item">
              <div class="contact-item-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div>
                <h4>Địa chỉ</h4>
                <p>Số 279 đường Hoàng Diệu, Phường Tân Tiến, TP.Buôn Ma Thuột, Đắk Lắk</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
              </div>
              <div>
                <h4>Điện thoại</h4>
                <p>0766 667 020</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <div>
                <h4>Giờ làm việc</h4>
                <p>Thứ 2 - Chủ nhật: 7:00 - 21:00</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <polyline points="14 2 14 8 20 8"/>
                  <line x1="16" y1="13" x2="8" y2="13"/>
                  <line x1="16" y1="17" x2="8" y2="17"/>
                </svg>
              </div>
              <div>
                <h4>Mã số thuế</h4>
                <p>6000467853</p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <h3>Gửi yêu cầu báo giá</h3>
          <form>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" id="name" placeholder="Nhập họ và tên">
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="tel" id="phone" placeholder="Nhập số điện thoại">
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" placeholder="Nhập email (không bắt buộc)">
            </div>
            <div class="form-group">
              <label for="message">Nội dung</label>
              <textarea id="message" placeholder="Nhập sản phẩm cần báo giá hoặc yêu cầu của bạn..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">
              Gửi yêu cầu
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#" class="logo">Hồng<span>Hiến</span></a>
          <p>
            Nhà phân phối đồ điện gia dụng và thiết bị chiếu sáng uy tín hàng đầu khu vực Tây
            Nguyên. Đồng hành cùng sự phát triển của quý khách hàng từ năm 2005.
          </p>
        </div>
        <div>
          <div class="footer-title">Điều hướng</div>
          <div class="footer-links">
            <a href="#about">Giới thiệu</a>
            <a href="#products">Sản phẩm</a>
            <a href="#features">Cam kết</a>
            <a href="#contact">Liên hệ</a>
          </div>
        </div>
        <div>
          <div class="footer-title">Sản phẩm</div>
          <div class="footer-links">
            <a href="#">Đèn LED</a>
            <a href="#">Đèn trang trí</a>
            <a href="#">Quạt điện</a>
            <a href="#">Đồ điện gia dụng</a>
          </div>
        </div>
        <div>
          <div class="footer-title">Liên hệ</div>
          <div class="footer-links">
            <a href="tel:0919857799">0766 667 020</a>
            <a href="#">279 Hoàng Diệu, Buôn Ma Thuột</a>
            <a href="#">MST: 6000467853</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2005 - 2025 Công ty TNHH TM&DV Hồng Hiến. Tất cả quyền được bảo lưu.</p>
      </div>
    </div>
  </footer>
</body>
</html>