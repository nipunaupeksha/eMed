<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="patient section container" id="patient">
        <div class="patient__container grid">
            <div class="patient__content">
                <a href="{{url('/patient/add')}}" class="button button--flex">
                    Add Patient <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['list'] as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->fName}}</td>
                            <td>{{$item->lName}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->contact}}</td>
                            <td>
                                <a class="table__link" href="patient/edit/{{$item->id}}"><i class="ri-refresh-line table__update"></i>&nbsp;update</a>
                                <br>
                                <a class="table__link" href="patient/delete/{{$item->id}}"><i class="ri-delete-bin-line table__remove"></i>&nbsp;remove</a>
                                <br>
                                @if($admitArr[$item->id]==0)
                                <a class="table__link" href="patient/admit/{{$item->id}}"><i class="ri-login-circle-line table__admit"></i>&nbsp;admit</a>
                                @endif
                                @if($dischargeArr[$item->id]==0 && $admitArr[$item->id]==1)
                                <a class="table__link" href="patient/discharge/{{$item->id}}"><i class="ri-logout-circle-line table__discharge"></i>&nbsp;discharge</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>
</html>