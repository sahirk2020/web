<!doctype html>
<html class="no-js" lang="zxx">

<head>


    <style>
        table {
            margin: 0 0 0em !important;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            border: none !important;
        }

        .price-table-wrap {
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        /* Table */

        .laundry-price-table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Header */

        .laundry-price-table thead {
            background: linear-gradient(135deg, #2c9fda, #4fc3f7);
        }

        .laundry-price-table thead th {
            color: #fff;
            padding: 22px 15px;
            text-align: center;
            font-weight: 700;
            /* font-size: 20px; */
            border: none;
        }

        /* Row */



        .laundry-price-table tbody tr {
            border-bottom: 1px solid #e9eef3;
            transition: 0.3s ease;
            position: relative;
        }

        .laundry-price-table tr::before {

            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: transparent;
            transition: 0.3s ease;
        }

        .laundry-price-table tbody tr:last-child {
            border-bottom: none;
        }



        /* Hover Effect */

        .laundry-price-table tbody tr:hover {

            background: #f7fcff;
            transform: translateX(6px);
        }

        .laundry-price-table tbody tr:hover::before {

            background: #2c9fda;
        }


        /* .price-item:hover {
            background: #f7fcff;
            transform: translateX(6px);
            }

            .price-item:hover::before {
            background: #2c9fda;
            } */

        /* Cell */

        .laundry-price-table tbody td {
            padding: 14px 15px;
            text-align: center;
            border: none;
            /* font-size: 18px; */
            color: #222;
            vertical-align: middle;
        }

        /* Item Name */

        .laundry-price-table tbody td:first-child {
            font-weight: 500;
        }

        /* Price Design */

        .laundry-price-table tbody td:not(:first-child) {

            color: #79bf43;
            font-weight: 700;
        }

        /* Price Background */

        .laundry-price-table tbody td:not(:first-child) span {

            background: #edf3e4;
            display: inline-block;
            min-width: 170px;
            padding: 8px 16px;
            border-radius: 50px;
            text-align: center;
        }

        /* Responsive */

        @media (max-width: 767px) {

            .laundry-price-table thead {
                display: none;
            }

            .laundry-price-table,
            .laundry-price-table tbody,
            .laundry-price-table tr,
            .laundry-price-table td {
                display: block;
                width: 100%;
            }

            .laundry-price-table tr {
                margin-bottom: 15px;
                border-bottom: 1px solid #e9eef3;
                background: #fff;
            }

            .laundry-price-table td {

                text-align: right;
                padding: 15px;
                padding-left: 45%;
                position: relative;
            }

            .laundry-price-table td::before {

                content: attr(data-label);
                position: absolute;
                left: 15px;
                top: 15px;
                width: 40%;
                text-align: left;
                font-weight: 600;
                color: #222;
            }

            .laundry-price-table tbody td:not(:first-child) span {

                min-width: 120px;
                padding: 10px 15px;
                border-radius: 50px;
            }
        }
    </style>
</head>

<body>
    <?php include 'components/header.php'; ?>


    <!-- =====================================
        Cosmos Laundry Price Section working
====================================== -->

    <section class="laundry-price-area space-bottom">
        <div class="container">

            <!-- Tabs -->
            <ul class="nav nav-tabs laundry-tabs justify-content-center"
                id="laundryTab"
                role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active"
                        id="mens-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#mens"
                        type="button">

                        <!-- <i class="fa fa-user"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/mens.svg" width="30" height="30" alt="Mens Icon" class="tab-icon" />
                        Mens
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="womens-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#womens"
                        type="button">

                        <!-- <i class="fa fa-female"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/woman.svg" width="30" height="30" alt="Womens Icon" class="tab-icon" />
                        Womens
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="kids-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#kids"
                        type="button">

                        <!-- <i class="fa fa-child"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/kids.svg" width="30" height="30" alt="Kids Icon" class="tab-icon" />
                        Kids
                    </button>
                </li>


                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="household-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#household"
                        type="button">

                        <!-- <i class="fa fa-bed"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/household.svg" width="30" height="30" alt="Household Icon" class="tab-icon" />
                        Household
                    </button>
                </li>


                <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                id="luxury-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#luxury"
                                type="button">

                                <i class="fa fa-diamond"></i> Luxury
                            </button>
                        </li> -->

            </ul>
            <?php
            /*
            |--------------------------------------------------------------------------
            | Prepared Statement
            |--------------------------------------------------------------------------
            */

            $category = 'Mens'; // Change this value based on the selected tab (e.g., 'Womens', 'Kids', 'Household', etc.)

            $sql = "
                            SELECT 
                                item_name,
                                premium_wash,
                                dry_cleaning,
                                steam_ironing
                            FROM laundry_price_items
                            WHERE category_name = ?
                            AND status = 1
                            ORDER BY display_order ASC
                        ";

            $stmt = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param($stmt, "s", $category);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            ?>
            <!-- Tab Content -->
            <div class="tab-content laundry-tab-content">

                <div class="tab-pane fade show active" id="mens">

                    <div class="price-table-wrap table-responsive">

                        <table class="laundry-price-table">

                            <thead>
                                <tr>
                                    <th>Item List</th>
                                    <th>Premium Wash</th>
                                    <th>Dry Cleaning</th>
                                    <th>Steam Ironing</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                    <tr>

                                        <td>
                                            <?php echo htmlspecialchars($row['item_name']); ?>
                                        </td>

                                        <!-- <td data-label="Premium Wash">
                                            <?php
                                            // echo !empty($row['premium_wash'])
                                            //     ? '₹' . htmlspecialchars($row['premium_wash'])
                                            //     : '-';
                                            ?>
                                        </td> -->

                                        <td>
                                            <span>
                                                <?php
                                                echo !empty($row['premium_wash'])
                                                    ? '₹' . htmlspecialchars($row['premium_wash'])
                                                    : '-';
                                                ?>
                                            </span>
                                        </td>

                                        <td>
                                            <span>
                                                <?php
                                                echo !empty($row['dry_cleaning'])
                                                    ? '₹' . htmlspecialchars($row['dry_cleaning'])
                                                    : '-';
                                                ?>
                                            </span>
                                        </td>

                                        <td>
                                            <span>
                                                <?php
                                                echo !empty($row['steam_ironing'])
                                                    ? '₹' . htmlspecialchars($row['steam_ironing'])
                                                    : '-';
                                                ?>
                                            </span>
                                        </td>

                                    </tr>

                                <?php } ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =====================================
        Cosmos Laundry Price Section
====================================== -->

    <?php
    // include_once __DIR__ . '/components/db.php';

    function getLaundryItems($conn, $category)
    {
        $sql = "
        SELECT
            item_name,
            premium_wash,
            dry_cleaning,
            steam_ironing
        FROM laundry_price_items
        WHERE category_name = ?
        AND status = 1
        ORDER BY display_order ASC
    ";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $category);
        mysqli_stmt_execute($stmt);

        return mysqli_stmt_get_result($stmt);
    }
    ?>

    <section class="laundry-price-area space-bottom">
        <div class="container">



            <!-- Tabs -->
            <ul class="nav nav-tabs laundry-tabs justify-content-center"
                id="laundryTab"
                role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active"
                        id="mens-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#mens"
                        type="button">

                        <!-- <i class="fa fa-user"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/mens.svg" width="30" height="30" alt="Mens Icon" class="tab-icon" />
                        Mens
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="womens-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#womens"
                        type="button">

                        <!-- <i class="fa fa-female"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/woman.svg" width="30" height="30" alt="Womens Icon" class="tab-icon" />
                        Womens
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="kids-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#kids"
                        type="button">

                        <!-- <i class="fa fa-child"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/kids.svg" width="30" height="30" alt="Kids Icon" class="tab-icon" />
                        Kids
                    </button>
                </li>


                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        id="household-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#household"
                        type="button">

                        <!-- <i class="fa fa-bed"></i> -->
                        <img src="<?php echo BASE_URL; ?>assets/img/icon/price-table/household.svg" width="30" height="30" alt="Household Icon" class="tab-icon" />
                        Household
                    </button>
                </li>


                <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                id="luxury-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#luxury"
                                type="button">

                                <i class="fa fa-diamond"></i> Luxury
                            </button>
                        </li> -->

            </ul>

            <div class="tab-content laundry-tab-content">

                <?php
                $categories = [
                    'mens'      => 'Mens',
                    'womens'    => 'Womens',
                    'kids'      => 'Kids',
                    'household' => 'Household'
                ];

                foreach ($categories as $tabId => $category) {

                    $result = getLaundryItems($conn, $category);
                ?>

                    <div class="tab-pane fade <?php echo ($tabId == 'mens') ? 'show active' : ''; ?>"
                        id="<?php echo $tabId; ?>">

                        <div class="price-table-wrap table-responsive">

                            <table class="laundry-price-table">

                                <thead>
                                    <tr>
                                        <th>Item List</th>
                                        <th>Premium Wash</th>
                                        <th>Dry Cleaning</th>
                                        <th>Steam Ironing</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                        <tr>

                                            <td data-label="Item List">
                                                <?php echo htmlspecialchars($row['item_name']); ?>
                                            </td>

                                            <td data-label="Premium Wash">
                                                <span>
                                                    <?php
                                                    echo !empty($row['premium_wash'])
                                                        ? '₹' . htmlspecialchars($row['premium_wash'])
                                                        : '-';
                                                    ?>
                                                </span>
                                            </td>

                                            <td data-label="Dry Cleaning">
                                                <span>
                                                    <?php
                                                    echo !empty($row['dry_cleaning'])
                                                        ? '₹' . htmlspecialchars($row['dry_cleaning'])
                                                        : '-';
                                                    ?>
                                                </span>
                                            </td>

                                            <td data-label="Steam Ironing">
                                                <span>
                                                    <?php
                                                    echo !empty($row['steam_ironing'])
                                                        ? '₹' . htmlspecialchars($row['steam_ironing'])
                                                        : '-';
                                                    ?>
                                                </span>
                                            </td>

                                        </tr>

                                    <?php } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>
    </section>


    <!--==============================
	     Footer Area
==============================-->

    <?php require('components/footer.php'); ?>