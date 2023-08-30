<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>مدیریت</title>




    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin_asset/dist/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

{{--    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('admin_asset/dashboard.rtl.css')}}" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">پنل مدیریت همایش</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">تسجيل الخروج</a>
        </div>
    </div>
</header>

@yield('content')


<script src="{{asset('admin_asset/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script><script src="dashboard.js"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script >
    new DataTable('#example');
</script>
</body>
</html>
