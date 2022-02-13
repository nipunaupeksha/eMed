<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="department section container" id="department">
        <div class="department__container grid">
            <div class="department__content">
                <a href="{{url('/department/add')}}" class="button button--flex">
                    Add Department <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a class="table__link" href="department/edit/{{$item->id}}"><i class="ri-refresh-line table__update"></i>&nbsp;update</a>
                                <br>
                                <a class="table__link" href="department/delete/{{$item->id}}"><i class="ri-delete-bin-line table__remove"></i>&nbsp;remove</a>
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