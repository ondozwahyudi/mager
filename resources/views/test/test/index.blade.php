
@extends('layouts.layouts')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row  ">
            <div class="col-12">
                <h1>Dashboard</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="icon-cards-row">
                    <div class="owl-container">
                        <div class="owl-carousel dashboard-numbers">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Alarm"></i>
                                    <p class="card-text mb-0">Pending Orders</p>
                                    <p class="lead text-center">16</p>
                                </div>
                            </a>
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Basket-Coins"></i>
                                    <p class="card-text mb-0">Completed Orders</p>
                                    <p class="lead text-center">32</p>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Arrow-Refresh"></i>
                                    <p class="card-text mb-0">Refund Requests</p>
                                    <p class="lead text-center">2</p>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Mail-Read"></i>
                                    <p class="card-text mb-0">New Comments</p>
                                    <p class="lead text-center">25</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row sortable">
                    <div class="col-xl-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="position-absolute handle card-icon">
                                    <i class="simple-icon-shuffle"></i>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Payment Status</h6>
                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="position-absolute handle card-icon">
                                    <i class="simple-icon-shuffle"></i>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Work Progress</h6>
                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="position-absolute handle card-icon">
                                    <i class="simple-icon-shuffle"></i>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Tasks Completed</h6>
                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="position-absolute handle card-icon">
                                    <i class="simple-icon-shuffle"></i>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Payments Done</h6>
                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Best Sellers</h5>
                                <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Sales</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Marble Cake</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">1452</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">62</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cupcakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Fruitcake</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">1245</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">65</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Desserts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Chocolate Cake</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">1200</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">45</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Desserts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Bebinca</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">1150</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">4</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cupcakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Napoleonshat</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">1050</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">41</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Magdalena</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">998</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">24</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Salzburger Nockerl</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">924</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">20</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Desserts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Soufflé</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">905</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">64</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cupcakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Cremeschnitte</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">845</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">12</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Desserts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Cheesecake</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">830</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">36</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Desserts</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Gingerbread</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">807</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">21</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cupcakes</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="list-item-heading">Goose Breast</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">795</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">9</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Cupcakes</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 md-4">
                        <div class="card">
                            <div class="position-absolute card-top-buttons">
                                <button class="btn btn-header-light icon-button">
                                    <i class="simple-icon-refresh"></i>
                                </button>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Orders</h5>
                                <div class="scroll dashboard-list-with-thumbs">
                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/marble-cake-thumb.jpg" alt="Marble Cake"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Marble Cake</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                                        Trfy, Kansas City, USA</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/fruitcake-thumb.jpg" alt="Fruitcake"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Fruitcake</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                                        Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Chocolate Cake</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                                        Kühndorf, Germany</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Fat Rascal</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Rasheeda Vaquera - 37 Rue des
                                                        Grands Prés, 03100 Montluçon, France</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/streuselkuchen-thumb.jpg" alt="Streuselkuchen"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Streuselkuchen</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Mimi Carreira - 36-71 Victoria
                                                        St, Birmingham, UK</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3">
                                        <a class="d-block position-relative" href="#">
                                            <img src="img/cremeschnitte-thumb.jpg" alt="Cremeschnitte"
                                                class="list-thumbnail border-0" />
                                            <span
                                                class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                        </a>
                                        <div class="pl-3 pt-2 pr-2 pb-2">
                                            <a href="#">
                                                <p class="list-item-heading">Cremeschnitte</p>
                                                <div class="pr-4 d-none d-sm-block">
                                                    <p class="text-muted mb-1 text-small">Lenna Majeed - 6 Hertford St
                                                        Mayfair, London, UK</p>
                                                </div>
                                                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                    09.04.2018</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="owl-container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
