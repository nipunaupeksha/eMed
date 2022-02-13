<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="department__add section container" id="department-add">
        @if(Session::get('success'))
        <div class="alert__success">
            {{Session::get('success')}}
        </div>
        @endif
        @if(Session::get('fail'))
        <div class="alert__fail">
            {{Session::get('fail')}}
        </div>
        @endif
        <div class="grid">
            <div class="form">
                <img src="{{asset('img/department_form.png')}}" alt="" class="form__img">
                <form action="add" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Add Department</h1>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-building-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="departmentName" class="form__label"></label>
                            <input type="text" placeholder="department name" name="departmentName" class="form__input" value="{{old('departmentName')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('departmentName'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Add Department">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>