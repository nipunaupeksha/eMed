<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="patient__add section container" id="patient-add">
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
                <img src="{{asset('img/patient_form.png')}}" alt="" class="form__img">
                <form action="{{route('patient/update')}}" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Update Patient</h1>
                    <input type="hidden" name="idt" value="{{$info->id}}">
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="firstName" class="form__label"></label>
                            <input type="text" name="firstName" placeholder="first name" class="form__input"
                                value="{{$info->fName}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('firstName'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line not__visible"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="lastName" class="form__label"></label>
                            <input type="text" name="lastName" placeholder="last name" class="form__input"
                                value="{{$info->lName}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('lastName'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-home-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="address" class="form__label"></label>
                            <input type="text" name="address" placeholder="address" class="form__input"
                                value="{{$info->address}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('address'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-men-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="gender" class="form__label"></label>
                            <input type="text" name="gender" placeholder="gender" class="form__input"
                                value="{{$info->gender}}">
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
                            <input type="text" name="age" placeholder="age" class="form__input" value="{{$info->age}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('age'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="contact" class="form__label"></label>
                            <input type="text" name="contact" placeholder="contact" class="form__input"
                                value="{{$info->contact}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('contact'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Update Patient">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>