@extends('Admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            پیشخان
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
{{--            <th scope="col">id</th>--}}
{{--            <th scope="col">نام و نام خانوادگی</th>--}}
{{--            <th scope="col">شماره تماس</th>--}}
{{--            <th scope="col">ایمیل</th>--}}
{{--            <th scope="col">شغل</th>--}}
{{--            <th scope="col">شهر</th>--}}
{{--            <th scope="col">عملیات</th>--}}
            <h2> کاربران</h2>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">شماره تماس</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">شغل</th>
                    <th scope="col">شهر</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->job}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->status_sms}}</td>


                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>نام و نام خانوادگی</th>
                    <th>شماره تماس</th>
                    <th>ایمیل</th>
                    <th>شغل</th>
                    <th>شهر</th>
                    <th>عملیات</th>
                </tr>
                </tfoot>
            </table>
        </main>
    </div>
</div>
@endsection
