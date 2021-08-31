@extends('layouts.app')

@section('title')
    <title>{!! trans('donate.meta_title') !!}</title>
    <meta property="og:title" content="{!! trans('donate.meta_title') !!}">
@endsection
@php $locale = session()->get('locale'); @endphp
@section('content')

    <div class="donate-container">
        <div class="donate-box">
            <h1 class="title">{!! trans('donate.title') !!}</h1>
            <div class="description">
                <p>{!! trans('donate.description') !!}</p>
            </div>
            <div class="payment-list">
                <ul>
                    <li>
                        <a href="{{'/files/dram-vaverapaymanner.pdf' }}" target="_blank">
                            {!! trans('donate.payment_type_1') !!}
                        </a>
                    </li>
                    <li>
                        <a href="{{'/files/euro-vaverapaymanner.pdf' }}" target="_blank">
                            {!! trans('donate.payment_type_2') !!}
                        </a>
                    </li>
                    <li>
                        <a href="{{'/files/usd-vaverapaymanner.pdf' }}" target="_blank">
                            {!! trans('donate.payment_type_3') !!}
                        </a>
                    </li>
                    <li>
                        <a href="{{'/files/rur-vaverapaymanner.pdf' }}" target="_blank">
                            {!! trans('donate.payment_type_4') !!}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main bg-white">
                <form  method="POST" class="needs-validation" novalidate>
                    @csrf
                    <p class="donate-title h5 text-center">
                        {!! trans('donate.donate_online') !!}
                    </p>
                    <div class="donation_currency d-flex p-2 justify-content-center">
                        <p class="h5 pr-3">{!! trans('donate.donation_currency') !!}</p>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item tab-li"  role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-currency="051" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">AMD</a>
                            </li>
                            <li class="nav-item tab-li" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-currency="643"  data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">RUB</a>
                            </li>
                            <li class="nav-item tab-li" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-currency="840"  data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">USD</a>
                            </li>
                            <li class="nav-item tab-li" role="presentation">
                                <a class="nav-link" id="pills-euro-tab" data-currency="978" data-toggle="pill" href="#euro" role="tab" aria-controls="euro" aria-selected="false">EUR</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content " id="pills-tabContent">
                        <div class="tab-pane fade show currency-radio-box active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <label class="h2 text-dark" for="">5.000 </label>
                                    <span class="ver-top-box text-dark">դր.</span>
                                    <input name="amount" type="radio" value="5000" data-currency="051" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">10.000 </label>
                                    <span class="ver-top-box text-dark">դր.</span>
                                    <input name="amount" type="radio" value="10000" data-currency="051" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">20.000 </label>
                                    <span class="ver-top-box text-dark">դր.</span>
                                    <input name="amount" type="radio" value="20000" data-currency="051" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">50.000 </label>
                                    <span class="ver-top-box text-dark">դր.</span>
                                    <input name="amount" type="radio" value="50000" data-currency="051" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">100.000 </label>
                                    <span class="ver-top-box text-dark">դր.</span>
                                    <input name="amount" type="radio" value="100000" data-currency="051" class="d-block mx-auto currency-input">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade currency-radio-box" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <label class="h2 text-dark" for="">1.000 </label>
                                    <i class="fas fa-ruble-sign text-dark"></i>
                                    <input name="amount" type="radio" value="1000" data-currency="643" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">2.000 </label>
                                    <i class="fas fa-ruble-sign text-dark"></i>
                                    <input name="amount" type="radio" value="2000" data-currency="643" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">5.000 </label>
                                    <i class="fas fa-ruble-sign text-dark"></i>
                                    <input name="amount" type="radio" value="5000" data-currency="643" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">10.000 </label>
                                    <i class="fas fa-ruble-sign text-dark"></i>
                                    <input name="amount" type="radio" value="10000" data-currency="643" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">50.000 </label>
                                    <i class="fas fa-ruble-sign text-dark"></i>
                                    <input name="amount" type="radio" value="50000" data-currency="643"  class="d-block mx-auto currency-input">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade currency-radio-box" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <label class="h2 text-dark" for="">10</label>
                                    <i class="fas fa-dollar-sign text-dark"></i>
                                    <input name="amount" type="radio" value="10" data-currency="840" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">20</label>
                                    <i class="fas fa-dollar-sign text-dark"></i>
                                    <input name="amount" type="radio" value="20" data-currency="840" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">50</label>
                                    <i class="fas fa-dollar-sign text-dark"></i>
                                    <input name="amount" type="radio" value="50" data-currency="840" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">100</label>
                                    <i class="fas fa-dollar-sign text-dark"></i>
                                    <input name="amount" type="radio" value="100" data-currency="840" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">500</label>
                                    <i class="fas fa-dollar-sign text-dark"></i>
                                    <input name="amount" type="radio" value="500" data-currency="840" class="d-block mx-auto currency-input">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade currency-radio-box" id="euro" role="tabpanel" aria-labelledby="pills-euro-tab">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <label class="h2 text-dark" for="">10</label>
                                    <i class="fas fa-euro-sign text-dark"></i>
                                    <input name="amount" type="radio" value="10"  data-currency="978" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">20</label>
                                    <i class="fas fa-euro-sign text-dark"></i>
                                    <input name="amount" type="radio" value="20"  data-currency="978" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">50</label>
                                    <i class="fas fa-euro-sign text-dark"></i>
                                    <input name="amount" type="radio" value="50" data-currency="978" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">100</label>
                                    <i class="fas fa-euro-sign text-dark"></i>
                                    <input name="amount" type="radio" value="50"  data-currency="978" class="d-block mx-auto currency-input">
                                </div>
                                <div>
                                    <label class="h2 text-dark" for="">500</label>
                                    <i class="fas fa-euro-sign text-dark"></i>
                                    <input name="amount" type="radio" value="500"  data-currency="978" class="d-block mx-auto currency-input">
                                </div>
                            </div>
                        </div>
                        <div class="other-way-amount pb-3">
                            <div class="d-flex justify-content-center">
                                <p class="h5">
                                    {!! trans('donate.donation_amount_other_ways') !!}
                                </p>
                                <input data-currency="051" class="form-control amount" id="amount" name="amount" type="number" placeholder="{!! trans('donate.sum') !!}" >
                            </div>
                        </div>
                    </div>
                    <div class="form-info p-4 bg-page">
                        <div class="user d-flex justify-content-around">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputFirstName" name="firstname"  placeholder="{!! trans('donate.donator_fistname') !!}" required>
                                <div class="invalid-feedback ">
                                    {!! trans('donate.donator_fistname')  . ' ' . trans('donate.required')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputLastName" name="lastname" placeholder="{!! trans('donate.donator_lastname') !!}" required>
                                <div class="invalid-feedback ">
                                    {!! trans('donate.donator_lastname')  . ' ' . trans('donate.required')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <input  type="email" class="form-control" id="inputEmail" name="email" placeholder="{!! trans('donate.donator_email') !!}" required>
                                <div class="invalid-feedback ">
                                    {!! trans('donate.donator_email')  . ' ' . trans('donate.required')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around bg-page">
                        <div class="security d-flex">
                            <div class="mr-3 mt-2">
                                <input type="radio" class="align-top" id="public" checked>
                                <label class="h5 mb-0 align-middle" for="public">{!! trans('donate.security_public') !!}</label>
                            </div>
                            <div class="d-inline mt-2">
                                <input type="radio" id="public" class="align-middle">
                                <label class="h5 mb-0 align-middle"  for="public">{!! trans('donate.security_secret') !!}</label>
                            </div>
                        </div>
                        <div class="monthly-payment mt-2">
                            <input type="checkbox" class="align-top" value="false" name="monthly" id="monthly">
                            <label class="h5" for="monthly">{!! trans('donate.monthly') !!}</label>
                        </div>
                    </div>
                    <div class="bg-page pl-5 pt-5">
                        <input type="checkbox" class="form-check-input" name="isChecked" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{!! trans('donate.terms1') !!}</label>
                        <a href="{{'/files/'. $locale.'-terms.pdf' }}" target="_blank">{!! trans('donate.terms2') !!}</a>
                    </div>
                    <div class="bg-page text-center pt-5 submit">
                        <button onclick="createDonation()" id="submit" type="submit" disabled class="btn btn-primary">{!! trans('donate.submit_button') !!}</button>
                    </div>
                </form>
            </div>

            <footer class="footer">
                <div class="flex_row">
                    <div class="arca_secure_logo"></div>
                    <div class="visa_logo"></div>
                    <div class="master_logo"></div>
                    <div class="amex_logo"></div>
                </div>
                <div class="amex-note">{!! trans('donate.amex_notification') !!}</div>
            </footer>
        </div>
    </div>


    <script>

        let isChecked = false;
        let code;
        let value;
        const tabs = document.querySelectorAll(".tab-li");
        const amount = document.querySelector('#amount');
        const firstname = document.querySelector('#inputFirstName');
        const lastname = document.querySelector('#inputLastName');
        const email = document.querySelector('#inputEmail');
        const currency = document.querySelector('#inputGroupSelect04');
        const donateButton = document.querySelector('#submit');
        const checkbox = document.querySelector('#exampleCheck1');
        const forms = document.getElementsByClassName('needs-validation');
        const monthly = document.getElementById("monthly");
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        } else {
                            // event.preventDefault();
                            // console.log("haba1")
                            let radio = document.querySelector(".tab-content input:checked");
                            const currency = document.createElement("input")
                            currency.type = 'hidden';
                            currency.name = "currency";
                            if(radio){
                                currency.value = radio.dataset.currency
                                amount.value = radio.value
                            } else {
                                currency.value = document.querySelector("input[type='number']").dataset.currency
                            }
                            forms[0].append(currency)
                            forms[0].querySelector("input[type='checkbox'][name='isChecked']").value = true
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        document.getElementById("submit").addEventListener("click", function (){
            let checkedRadio  = document.querySelectorAll(".tab-content input:checked");
            if(checkedRadio.length == 0){
                document.querySelector("input[type='number']").setAttribute("required", "")
            }

        })

        amount.addEventListener("click", function (){
            if(document.querySelector(".tab-content input:checked")){
                document.querySelector(".tab-content input:checked").checked = false;
            }
        })
        tabs.forEach( (tabs) => {
            tabs.addEventListener("click", (e) => {
                amount.dataset.currency = e.target.dataset.currency
            })
        })
        firstname.addEventListener("change", (e) => {
            if(e.target.value.trim() == ""){
               e.target.value = "";
            }
        })
        lastname.addEventListener("change", (e) => {
            if(e.target.value.trim() == ""){
                e.target.value = "";
            }
        })
        email.addEventListener("change", (e) => {
            if(e.target.value.trim() == ""){
                e.target.value = "";
            }
        })
        checkbox.addEventListener('change', (e) => {
            if (e.target.checked === true) {
                isChecked = true;
                donateButton.removeAttribute('disabled');
            } else {
                isChecked = false;
                donateButton.setAttribute('disabled', 'disabled');
            }
        })

        async function createDonation() {
            event.preventDefault()
            // if (!isChecked || firstname.value || lastname.value || amount <= 0 || amount.dataset.currency) {
            //     return false;
            // }

            if(monthly.checked){
               monthly.value = true;
            }
            if(document.querySelector(".tab-content input:checked")){
                amount.value = document.querySelector(".tab-content input:checked").value
            }
            const response = await axios.post('/create-donation', {
                isChecked: isChecked,
                firstname: firstname.value,
                lastname: lastname.value,
                email: email.value,
                donate_monthly: monthly.value,
                amount: amount.value,
                currency: amount.dataset.currency
            });
            console.log(response)
            if (response && response.status === 200) {
                console.log(response.data)
                window.location.href = response.data.formUrl;
            }
        }
    </script>
@endsection
