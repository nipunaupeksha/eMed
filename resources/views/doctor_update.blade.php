<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="doctor__add section container" id="doctor-add">
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
                <img src="{{asset('img/doctor_form.png')}}" alt="" class="form__img">
                <form action="{{route('doctor/update')}}" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Update Doctor</h1>
                    <input type="hidden" name="idt" value="{{$info->id}}">
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="name" class="form__label"></label>
                            <input type="text" name="name" placeholder="name" class="form__input" value="{{$info->name}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-numbers-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="number" class="form__label"></label>
                            <input type="text" name="number" placeholder="number" class="form__input" value="{{$info->number}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('number'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-syringe-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="specialization" class="form__label"></label>
                            <input type="text" name="specialization" placeholder="specialization" class="form__input" value="{{$info->specialization}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('specialization'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-men-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="gender" class="form__label"></label>
                            <input type="text" name="gender" placeholder="gender" class="form__input" value="{{$info->gender}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('gender'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-home-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="address" class="form__label"></label>
                            <input type="text" name="address" placeholder="address" class="form__input" value="{{$info->address}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('address'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="contact" class="form__label"></label>
                            <input type="text" name="contact" placeholder="contact" class="form__input" value="{{$info->contactNumber}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('contact'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Update Doctor">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>