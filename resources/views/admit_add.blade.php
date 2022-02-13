<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="patient__admit section container" id="patient-admit">
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
                <img src="{{asset('img/admit_form.png')}}" alt="" class="form__img">
                <form action="{{route('admit/add')}}" method="post" class="form__content">
                    @csrf
                    <h1 class="form__title">Admit Patient</h1>
                    <input type="hidden" name="id" value="{{$info->id}}">
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="name" class="form__label"></label>
                            <input type="text" name="name" placeholder="patient name" class="form__input" value="{{$info->fName}} {{$info->lName}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="admitDate" class="form__label"></label>
                            <input type="text" name="admitDate" placeholder="admit date" class="form__input datepicker" value="{{old('admitDate')}}">
                        </div>
                        <span></span>
                        <span class="form__error">@error('admitDate'){{$message}} @enderror</span>
                    </div>
                    <input type="submit" class="form__button" value="Admit">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>