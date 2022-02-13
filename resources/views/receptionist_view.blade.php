<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="receptionist section container" id="receptionist">
        <div class="receptionist__container grid">
            <div class="receptionist__content">
                <a href="{{url('/receptionist/add')}}" class="button button--flex">
                    Add Receptionist <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->age}}</td>
                            <td>
                                <a class="table__link" href="receptionist/edit/{{$item->id}}"><i class="ri-refresh-line table__update"></i>&nbsp;update</a>
                                <br>
                                <a class="table__link" href="receptionist/delete/{{$item->id}}"><i class="ri-delete-bin-line table__remove"></i>&nbsp;remove</a>
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