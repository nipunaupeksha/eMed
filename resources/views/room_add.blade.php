<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="room__add section container" id="room-add">
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
                <img src="{{asset('img/room_form.png')}}" alt="" class="form__img">
                <form action="add" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Add Room</h1>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-bubble-chart-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="category" class="form__label"></label>
                            <input type="text" placeholder="room category" name="category" class="form__input" value="{{old('category')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('category'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-battery-2-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="status" class="form__label"></label>
                            <input type="text" placeholder="room status" name="status" class="form__input" value="{{old('status')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('status'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Add Room">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>