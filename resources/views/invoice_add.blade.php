<!DOCTYPE html>
<html lang="en">

<head>
    {{View::make('head')}}
</head>

<body>
    {{View::make('header')}}
    <section class="invoice__add section container" id="invoice-add">
        <div class="grid">
            <div class="form">
                <img src="{{asset('img/invoice_form.png')}}" alt="" class="form__img">
                <form action="" class="form__content">
                    @csrf
                    <h1 class="form__title">Create Invoice</h1>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="patient name" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-men-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="gender" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-home-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="address" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="admit date" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="discharge date" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-money-dollar-box-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="total amount" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-syringe-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="doctor charges" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-patreon-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="initial payment" class="form__input">
                        </div>
                    </div>
                    <div class="form__div">
                        <div class="form__icon">
                            <i class="ri-currency-line"></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <input type="text" placeholder="total payable" class="form__input">
                        </div>
                    </div>
                    <input type="submit" class="form__button" value="Create Invoice">
                </form>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>

</html>