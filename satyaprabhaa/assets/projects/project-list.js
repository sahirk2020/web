const projectGrid = document.getElementById("projectGrid");

projects.forEach(project => {

projectGrid.innerHTML += `
<div class="project-card">

    <img src="${project.image}" alt="">

    <div class="content">

        <span>${project.status}</span>

        <h3>${project.title}</h3>

        <p>${project.location}</p>

        <h4>${project.price}</h4>

        <a href="project.html?slug=${project.slug}">
            View Project
        </a>

    </div>

</div>
`;
});