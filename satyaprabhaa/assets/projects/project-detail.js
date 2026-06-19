const params = new URLSearchParams(window.location.search);

const slug = params.get("slug");

const project = projects.find(
item => item.slug === slug
);

if(project){

document.getElementById("banner").src =
project.image;

document.getElementById("title").innerText =
project.title;

document.getElementById("location").innerText =
project.location;

document.getElementById("price").innerText =
project.price;

document.getElementById("description").innerText =
project.description;

document.getElementById("brochureBtn").href =
project.brochure;

project.amenities.forEach(item => {

document.getElementById("amenities").innerHTML +=
`<li>${item}</li>`;

});

project.highlights.forEach(item => {

document.getElementById("highlights").innerHTML +=
`<li>${item}</li>`;

});

}