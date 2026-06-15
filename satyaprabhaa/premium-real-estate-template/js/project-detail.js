
const slug=new URLSearchParams(location.search).get('slug');
const project=projects.find(x=>x.slug===slug)||projects[0];
title.innerText=project.title;location.innerText=project.location;price.innerText=project.price;
description.innerText=project.description;rera.innerText=project.rera;
project.amenities.forEach(k=>amenitiesWrapper.innerHTML+=`<div class='swiper-slide'>${amenitiesMaster[k].title}</div>`);
project.gallery.forEach(g=>gallery.innerHTML+=`<div class='swiper-slide'>${g}</div>`);
project.floorPlans.forEach(f=>floorPlans.innerHTML+=`<div class='swiper-slide'>${f}</div>`);
project.highlights.forEach(h=>highlights.innerHTML+=`<li>${h}</li>`);
project.faq.forEach(i=>faq.innerHTML+=`<details><summary>${i.q}</summary><p>${i.a}</p></details>`);
new Swiper('.amenities-slider',{slidesPerView:3,spaceBetween:20});
new Swiper('.gallery-slider',{slidesPerView:2,spaceBetween:20});
new Swiper('.floor-slider',{slidesPerView:2,spaceBetween:20});
gsap.from('.hero',{y:60,opacity:0,duration:1});
