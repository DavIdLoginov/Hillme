Fancybox.defaults = {
  ...Fancybox.defaults,
  autoFocus: false,
  placeFocusBack: false,
  tpl: {
    ...Fancybox.defaults.tpl,
    closeButton: '<button data-fancybox-close class="close-btn" title="{{CLOSE}}"></button>',
  }
};

Fancybox.bind('[data-fancybox]', {
  ...Fancybox.defaults,
});


/* Years verification window */
if(!window.localStorage.getItem('aggreement')){
  Fancybox.show([{
    src: '#alert-window',
  }], {
    autoFocus: false,
    closeButton: false,
    dragToClose: false,
    backdropClick: false,
    keyboard: {
      Escape: false,
      Delete: false,
      Backspace: false,
    },
  });
}

/* Remove aggreement from localStorage to test alert window */
// window.localStorage.removeItem('aggreement');

const yearsVerifyNo = document.querySelector('.js-years-verify-no');
if(yearsVerifyNo){
  yearsVerifyNo.addEventListener('click', () => {
    window.location.reload();
  });
}

const yearsVerifyYes = document.querySelector('.js-years-verify-yes');
if(yearsVerifyYes){
  yearsVerifyYes.addEventListener('click', () => {
    window.localStorage.setItem('aggreement', 'true');
  });
}
/* ! Years verification window */


/* Home page sliders */
const bannersSwiper = new Swiper('.banners-slider .swiper',{
  effect: 'fade',
  loop : true,
  autoplay: {
    delay: 5000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.banners-slider .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.banners-slider .swiper-button-next',
    prevEl: '.banners-slider .swiper-button-prev',
  }
});

const mainSliderSwiper = new Swiper('.main-slider .swiper', {
  autoHeight: true,
  loop: true,
  spaceBetween: 20,
  pagination: {
    el: '.main-slider .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.main-slider .swiper-button-next',
    prevEl: '.main-slider .swiper-button-prev',
  }
});
/* ! Home page slider */


/* Home page exhibition */
const exhibitionMapDotts = document.querySelectorAll('.exhibition__map-dott, .exhibition__selectbox-btn');
const exhibitionGalleriesItems = document.querySelectorAll('.exhibition__galleries-item');
const exhibitionMapTitle = document.querySelector('.exhibition__map-title');
const exhibitioSelectbox = document.querySelector('.exhibition__selectbox');
const exhibitioSelectboxTarget = document.querySelector('.exhibition__selectbox-target');

if(exhibitioSelectboxTarget){
  exhibitioSelectboxTarget.addEventListener('click', () => {
    exhibitioSelectbox.classList.toggle('is-open');
  });

  document.addEventListener('click', e => {
    if(!exhibitioSelectbox.contains(e.target)){
      exhibitioSelectbox.classList.remove('is-open');
    }
  });
}

exhibitionMapDotts.forEach(dott => {
  dott.addEventListener('click', e => {
    e.preventDefault();
    exhibitionMapTitle.innerText = dott.querySelector('span').innerText;
    exhibitionGalleriesItems.forEach(section => {
      section.classList.toggle('is-active', '#' + section.id === dott.getAttribute('href'));
    });
    exhibitionMapDotts.forEach(currentDott => {
      currentDott.classList.toggle('is-active', currentDott.getAttribute('href') === dott.getAttribute('href'));
    });
    exhibitioSelectbox.classList.remove('is-open');
  });
});
/* ! Home page exhibition */


/* Products slider */
const product = document.querySelector('.product');
if(product){
  setTimeout(function(){
    product.classList.add('is-ready');
  }, 100);
}

var productThumbsSwiper = new Swiper('.product__thumbs-slider .swiper', {
  slidesPerView: 2,
  slidesPerGroup: 2,
  pagination: {
    el: '.product__thumbs-slider .swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    576: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});

var productSwiper = new Swiper('.product__slider .swiper', {
  loop: true,
  autoHeight: true,
  watchSlidesProgress: true,
  hashNavigation: {
    watchState: true,
  },
  effect: 'fade',
  speed: 1000,
  fadeEffect: {
    crossFade: true
  },
  thumbs: {
    swiper: productThumbsSwiper,
  },
});
/* ! Products slider */


/* Become a partner sidebar */
const partnersAsideSwiper = new Swiper('.partners-aside .swiper', {
  autoHeight: true,
  spaceBetween: 20,
  pagination: {
    el: '.partners-aside .swiper-pagination',
    clickable: true,
  }
});

const partnersAsideGlobalBtn = document.querySelector('.partners-aside__global-btn');
const partnersAsideMapDotts = document.querySelectorAll('.partners-aside__map-dott, .partners-aside__global-text a');
const partnersAsideListLinks = document.querySelectorAll('.partners-aside__list a');
const partnersAsideContactsSections = document.querySelectorAll('.partners-aside__contacts-section');

if(partnersAsideGlobalBtn){
  partnersAsideGlobalBtn.addEventListener('click', e => {
    e.preventDefault();
    partnersAsideSwiper.slideNext();
  });
}

partnersAsideMapDotts.forEach(dott => {
  dott.addEventListener('click', e => {
    e.preventDefault();
    const partnersAsideListLink = Array.from(partnersAsideListLinks).find(link => link.getAttribute('href') === dott.getAttribute('href'));
    partnersAsideListLink.click();
    partnersAsideSwiper.slideNext();
  });
});

partnersAsideListLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    partnersAsideContactsSections.forEach(section => {
      section.classList.toggle('is-active', '#' + section.id === link.getAttribute('href'));
    });
    partnersAsideListLinks.forEach(cLink => {
      cLink.classList.toggle('is-active', cLink === link);
    });
    partnersAsideSwiper.update();
  });
});
/* ! Become a partner sidebar */


/* Textarea autosize */
const textareas = document.querySelectorAll('textarea');
autosize(textareas);

/* Form selectbox placeholder */
const formSelects = document.querySelectorAll('.form-select');
formSelects.forEach(formSelect => {
  formSelect.classList.toggle('is-empty', formSelect.value === '');
  formSelect.addEventListener('change', e => {
    formSelect.classList.toggle('is-empty', formSelect.value === '');
  });
});


/* Form submit handler example */
const formSubmitHandler = (e) => {
  e.preventDefault();

  const form = e.target;
  Fancybox.close();
  document.documentElement.classList.add('is-loading');

  // setTimeout to demonstrate the loader, on the production need to remove
  setTimeout(function(){
    fetch(form.action, {
      method: 'post',
      body: new FormData(form),
    })
    .then(response => response.json())
    .then(data => {
      Fancybox.show([
      {
        src: data.message,
        type: 'html',
      },
      ]);
    })
    .catch(error => {
      alert(error);
    })
    .finally(() => {
      form.reset();
      document.documentElement.classList.remove('is-loading');
    });
  }, 1000);
}

const forms = document.querySelectorAll('.contacts-form, .partner-form, .product-verification__form');
forms.forEach(form => {
  form.addEventListener('submit', e => {
    formSubmitHandler(e);
  });
});
/* ! Form submit handler example */


/* Mobile menu */
const noScroll = {
  y: 0,
  start: () => {
    this.y = document.documentElement.scrollTop;
    document.documentElement.style.setProperty('--scrollbarWidth', (window.innerWidth - document.documentElement.getBoundingClientRect().width) + 'px');
    document.body.style.setProperty('top', 0 - this.y + 'px');
    document.documentElement.classList.add('is-noscroll');
  },
  finish: () => {
    document.documentElement.classList.remove('is-noscroll');
    document.documentElement.classList.add('behavior-auto');
    document.documentElement.scrollTop = this.y || 0;
    document.body.style.setProperty('top', 'auto');
    document.documentElement.classList.remove('behavior-auto');
  },
}

const menuBtn = document.querySelector('.menu-btn');
menuBtn.addEventListener('click', function(e){
  noScroll.start();
  document.documentElement.classList.add('is-menu-open');
});

const menuClose = document.querySelectorAll('.menu-popup__close, .menu-popup__bg');
menuClose.forEach(btn => {
  btn.addEventListener('click', (event)=> {
    document.documentElement.classList.remove('is-menu-open');
    noScroll.finish();
  });
});
/* ! Mobile menu */