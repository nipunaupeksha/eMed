<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="prescription__add section container" id="prescription-add">
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
                <img src="{{asset('img/prescription_form.png')}}" alt="" class="form__img">
                <form action="add" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Create Prescription</h1>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-ink-bottle-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="name" class="form__label"></label>
                            <input type="text" name="name" placeholder="name" class="form__input" value="{{old('name')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-bubble-chart-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="type" class="form__label"></label>
                            <input type="text" name="type" value="{{old('type')}}" placeholder="type" class="form__input">
                        </div>
                        <span></span>
                        <span class="form__error">@error('type'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-money-dollar-box-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="price" class="form__label"></label>
                            <input type="text" name="price" value="{{old('price')}}" placeholder="price" class="form__input">
                        </div>
                        <span></span>
                        <span class="form__error">@error('price'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="quantity" class="form__label"></label>
                            <input type="text" name="quantity" value="{{old('quantity')}}" placeholder="quantity" class="form__input">
                        </div>
                        <span></span>
                        <span class="form__error">@error('quantity'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Create Prescription">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>