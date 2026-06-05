<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Process</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f8f8f8;
            font-family: Arial, sans-serif;
        }

        .process-section {
            padding: 100px 0;
            overflow: hidden;
        }

        .section-title {
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            /* color: #0c4b3d; */
            margin-bottom: 140px;
        }

        .process-wrapper {
            position: relative;
        }

        /* REAL CONNECTED SVG LINE */

        /* .zigzag-line {
            position: absolute;
            top: -20px;
            left: 0;
            width: 100%;
            height: 300px;
            z-index: 0;
        } */

        .zigzag-line {
            position: absolute;
            top: -70px;
            left: 0;
            width: 100%;
            height: 400px;
            z-index: 0;
        }

        .process-row {
            display: flex;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .process-step {
            width: 12%;
            text-align: center;
            position: relative;
        }

        /* Zig Zag Positions */

        .process-step:nth-child(odd) {
            margin-top: 120px;
        }

        .process-step:nth-child(even) {
            margin-top: -120px;
        }

        /* Icon */

        .icon-box {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #8cc63f;
            background: #fff;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .4s;
            position: relative;
        }

        .icon-box:hover {
            transform: translateY(-10px);
            background: #dcf28f;
        }

        .icon-box i {
            font-size: 48px;
            color: #2c9fda;
        }

        .step-title {
            margin-top: 20px;
            font-size: 22px;
            font-weight: 600;
        }

        /* Responsive */

        @media(max-width:991px) {

            .zigzag-line {
                display: none;
            }

            .process-row {
                flex-wrap: wrap;
                gap: 40px 0;
            }

            .process-step {
                width: 25%;
                margin-top: 0 !important;
            }
        }

        @media(max-width:576px) {

            .process-step {
                width: 50%;
            }

            .icon-box {
                width: 90px;
                height: 90px;
            }

            .icon-box i {
                font-size: 35px;
            }

            .section-title {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <section class="process-section">

        <div class="container">

            <h2 class="section-title sec-title1">The Laundry Process</h2>

            <div class="process-wrapper">

                <!-- CONNECTED SVG LINE -->


                <div class="process-row">

                    <!-- 1 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Tagging Process">

                            <i class="bi bi-tag"></i>

                        </div>

                        <h5 class="step-title sec-title1 ">Tagging</h5>

                    </div>

                    <!-- 2 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Sorting Process">

                            <i class="bi bi-funnel"></i>

                        </div>

                        <h5 class="step-title">Sorting</h5>

                    </div>

                    <!-- 3 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Treatment Process">

                            <i class="bi bi-droplet-half"></i>

                        </div>

                        <h5 class="step-title">Treatment</h5>

                    </div>

                    <!-- 4 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Pre Wash Process">

                            <i class="bi bi-bucket"></i>

                        </div>

                        <h5 class="step-title">Pre-Wash</h5>

                    </div>

                    <!-- 5 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Washing Process">

                            <i class="bi bi-house-gear"></i>

                        </div>

                        <h5 class="step-title">Washing</h5>

                    </div>

                    <!-- 6 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Softener Process">

                            <i class="bi bi-flower1"></i>

                        </div>

                        <h5 class="step-title">Softener</h5>

                    </div>

                    <!-- 7 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Drying Process">

                            <i class="bi bi-wind"></i>

                        </div>

                        <h5 class="step-title">Drying</h5>

                    </div>

                    <!-- 8 -->

                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Ironing Process">

                            <i class="bi bi-steam"></i>

                        </div>

                        <h5 class="step-title">Ironing</h5>

                    </div>
                    <div class="process-step">

                        <div class="icon-box"
                            data-bs-toggle="tooltip"
                            title="Ironing Process">

                            <i class="bi bi-steam"></i>

                        </div>

                        <h5 class="step-title">Ironing</h5>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

        [...tooltipTriggerList].map(tooltipTriggerEl =>
            new bootstrap.Tooltip(tooltipTriggerEl)
        );
    </script>

</body>

</html>