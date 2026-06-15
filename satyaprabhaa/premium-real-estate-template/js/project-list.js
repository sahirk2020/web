
const grid=document.getElementById('projectGrid');
projects.forEach(p=>grid.innerHTML+=`<div class='card'><h3>${p.title}</h3><p>${p.location}</p><a href='project.html?slug=${p.slug}'>View Project</a></div>`);
