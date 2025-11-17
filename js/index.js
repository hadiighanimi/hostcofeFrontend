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
  },
  {
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
const hostingPlans = [
  {
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
