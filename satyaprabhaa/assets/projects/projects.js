const projects = [
{
    slug: "kohinoor-royale",

    title: "Kohinoor Royale",

    location: "Kharadi, Pune",

    price: "₹95 Lacs Onwards",

    status: "New Launch",

    image: "assets/kohinoor-royale.jpg",

    brochure: "assets/brochure.pdf",

    description:
    "Premium residences crafted for luxury living.",

    amenities: [
        "pool",
        "clubhouse",
        "gym",
        "clubhouse"
    ],

    highlights: [
        "5 mins from EON IT Park",
        "Near Airport",
        "Prime Kharadi Location"
    ]
},

{
    slug: "6-boulevard",

    title: "6 Boulevard",

    location: "Wakad, Pune",

    price: "₹1.2 Cr Onwards",

    status: "Under Construction",

    image: "assets/boulevard.jpg",

    brochure: "assets/brochure.pdf",

    description:
    "Luxury apartments for modern lifestyles.",

    amenities: [
        "pool",
        "gym",
        "clubhouse"
    ],

    highlights: [
        "Mumbai Highway Access",
        "Near Metro Station"
    ]
}
];

const amenitiesWrapper =
document.getElementById("amenitiesWrapper");

project.amenities.forEach(item => {

amenitiesWrapper.innerHTML += `
<div class="amenity-slide">

    <img src="${item.icon}"
         alt="${item.title}">

    <h4>${item.title}</h4>

</div>
`;

});

// all amenities
const amenitiesMaster = {
    pool: {
        icon: "assets/icons/pool.svg",
        title: "Swimming Pool"
    },

    gym: {
        icon: "assets/icons/gym.svg",
        title: "Gymnasium"
    },

    clubhouse: {
        icon: "assets/icons/clubhouse.svg",
        title: "Clubhouse"
    }
};

// swipper.js
new Swiper(".amenities-slider", {
    slidesPerView: 4,
    spaceBetween: 30,

    breakpoints: {
        320: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 3
        },
        1200: {
            slidesPerView: 4
        }
    }
});