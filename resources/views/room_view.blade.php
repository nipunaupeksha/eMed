<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="room section container" id="room">
        <div class="room__container grid">
            <div class="room__content">
                <a href="{{url('/room/add')}}" class="button button--flex">
                    Add Room <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a class="table__link" href="room/edit/{{$item->id}}"><i class="ri-refresh-line table__update"></i>&nbsp;update</a>
                                <br>
                                <a class="table__link" href="room/delete/{{$item->id}}"><i class="ri-delete-bin-line table__remove"></i>&nbsp;remove</a>
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