<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="doctor section container" id="doctor">
        <div class="doctor__container grid">
            <div class="doctor__content">
                <a href="{{url('/doctor/add')}}" class="button button--flex">
                    Add Doctor <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Specialization</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->number}}</td>
                            <td>{{$item->specialization}}</td>
                            <td>{{$item->contactNumber}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a class="table__link" href="doctor/edit/{{$item->id}}"><i class="ri-refresh-line table__update"></i>&nbsp;update</a>
                                <br>
                                <a class="table__link" href="doctor/delete/{{$item->id}}"><i class="ri-delete-bin-line table__remove"></i>&nbsp;remove</a>
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