// =========================================
// 1. ハンバーガーメニューの動作
// =========================================
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

if (hamburger && navMenu) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
}

// =========================================
// 2. スムーズスクロール (メニューリンクをクリックした時)
// =========================================
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    // メニューを閉じる（スマホ時）
    if (hamburger && navMenu) {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
    }

    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    
    if (targetElement) {
      // ヘッダーの高さを考慮してスクロール
      const headerHeight = document.querySelector('header').offsetHeight;
      const targetPosition = targetElement.offsetTop - headerHeight;
      
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });
});

// =========================================
// 3. スクロール時のフェードインアニメーション
// =========================================
const fadeElements = document.querySelectorAll('.fade-in');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

fadeElements.forEach(element => {
  observer.observe(element);
});

// =========================================
// 4. Heroセクションの文字アニメーション
// =========================================
window.addEventListener("load", () => {
  const heroTitle = document.querySelector(".hero-title");
  const heroCopy = document.querySelector(".hero-copy");
  
  // 要素が存在するページ（トップページ）でのみ実行する安全装置
  if (heroTitle) {
    heroTitle.classList.add("show");
  }
  if (heroCopy) {
    heroCopy.classList.add("show");
  }
});

// =========================================
// 5. 画像拡大表示（ライトボックス）
// =========================================
// WordPressのギャラリー画像も含めて取得する
const lightboxTriggers = document.querySelectorAll('.js-lightbox-trigger, .wp-block-gallery img');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.querySelector('.lightbox-image');
const lightboxClose = document.querySelector('.lightbox-close');

if (lightbox && lightboxImage && lightboxClose) {
  // 画像がクリックされた時の処理
  lightboxTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
      const src = this.getAttribute('src'); // クリックされた画像のURLを取得
      if (src) {
        lightboxImage.setAttribute('src', src); // ライトボックス用の画像にURLをセット
        lightbox.classList.add('active'); // ライトボックスを表示
      }
    });
  });

  // バツボタンがクリックされた時の処理
  lightboxClose.addEventListener('click', () => {
    lightbox.classList.remove('active');
  });

  // 黒い背景部分がクリックされた時の処理
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove('active');
    }
  });
}