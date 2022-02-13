<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="receptionist__add section container" id="receptionist-add">
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
                <img src="{{asset('img/receptionist_form.png')}}" alt="" class="form__img">
                <form action="add" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Add Receptionist</h1>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="name" class="form__label"></label>
                            <input type="text" name="name" placeholder="name" class="form__input"
                                value="{{old('name')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-men-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="gender" class="form__label"></label>
                            <input type="text" name="gender" placeholder="gender" class="form__input"
                                value="{{old('gender')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('gender'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="age" class="form__label"></label>
                            <input type="text" name="age" placeholder="age" class="form__input" value="{{old('age')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('age'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Add Receptionist">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>