<!--==============================
    All Js File
============================== -->
<!-- Jquery -->
<script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Swiper Js -->
<script src="<?php echo BASE_URL; ?>assets/js/swiper-bundle.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery.counterup.min.js"></script>
<!-- Range Slider -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
<!-- imagesloaded -->
<script src="<?php echo BASE_URL; ?>assets/js/imagesloaded.pkgd.min.js"></script>

<!-- isotope -->
<script src="<?php echo BASE_URL; ?>assets/js/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="<?php echo BASE_URL; ?>assets/js/nice-select.min.js"></script>

<!-- Main Js File -->
<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

    [...tooltipTriggerList].map(tooltipTriggerEl =>
        new bootstrap.Tooltip(tooltipTriggerEl)
    );
</script>

<!-- Service page price table JS -->

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const rowsPerPage = 10;

        // Each tab separately
        document.querySelectorAll(".tab-pane").forEach(tabPane => {

            const tableRows = tabPane.querySelectorAll("tbody tr");

            if (tableRows.length === 0) return;

            // Create Pagination Container
            const pagination = document.createElement("div");
            pagination.classList.add("custom-pagination");

            tabPane.appendChild(pagination);

            let currentPage = 1;
            const totalPages = Math.ceil(tableRows.length / rowsPerPage);

            function showPage(page) {

                currentPage = page;

                // Hide all rows
                tableRows.forEach((row, index) => {

                    row.style.display =
                        (index >= (page - 1) * rowsPerPage &&
                            index < page * rowsPerPage) ?
                        "" :
                        "none";
                });

                renderPagination();
            }

            function renderPagination() {

                pagination.innerHTML = "";

                // Prev Button
                const prevBtn = document.createElement("button");
                prevBtn.innerHTML = "&laquo;";
                prevBtn.disabled = currentPage === 1;

                prevBtn.addEventListener("click", () => {
                    if (currentPage > 1) {
                        showPage(currentPage - 1);
                    }
                });

                pagination.appendChild(prevBtn);

                // Page Numbers
                for (let i = 1; i <= totalPages; i++) {

                    const btn = document.createElement("button");

                    btn.innerText = i;

                    if (i === currentPage) {
                        btn.classList.add("active");
                    }

                    btn.addEventListener("click", () => {
                        showPage(i);
                    });

                    pagination.appendChild(btn);
                }

                // Next Button
                const nextBtn = document.createElement("button");
                nextBtn.innerHTML = "&raquo;";
                nextBtn.disabled = currentPage === totalPages;

                nextBtn.addEventListener("click", () => {
                    if (currentPage < totalPages) {
                        showPage(currentPage + 1);
                    }
                });

                pagination.appendChild(nextBtn);
            }

            // Initial Load
            showPage(1);

        });

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const vanBox = document.getElementById("vanScrollBox");

        if (!vanBox) return;

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    vanBox.classList.add("active");
                    observer.unobserve(vanBox); // run only once
                }
            });
        }, {
            threshold: 0.35
        });

        observer.observe(vanBox);
    });
</script>