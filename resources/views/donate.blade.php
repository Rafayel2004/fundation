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
            <p style="align-self: center">
                {!! trans('donate.donate_online') !!}
            </p>
            <div class="input-group">

                <input required type="number" id="amount" placeholder="{!! trans('donate.sum') !!}" style="padding-left: 12px">
                <select required class="custom-select" id="inputGroupSelect04">
                    <option selected>{!! trans('donate.choose_currency') !!}</option>
                    <option value="051">AMD</option>
                    <option value="840">USD</option>
                    <option value="978">EUR</option>
                    <option value="643">RUR</option>
                </select>
                <div class="donate-button-box">
                    <button id="donateButton" class="btn btn-primary" disabled onclick="createDonation()">Donate</button>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">{!! trans('donate.terms1') !!}</label>
                <a href="{{'/files/'. $locale.'-terms.pdf' }}" target="_blank">{!! trans('donate.terms2') !!}</a>
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
    let isChecked= false;
    let code;
    let value;

    const amount = document.querySelector('#amount');
    const currency = document.querySelector('#inputGroupSelect04');
    const donateButton = document.querySelector('#donateButton');
    const checkbox = document.querySelector('#exampleCheck1');
    currency.addEventListener('change', (e) => {
        code = e.target.value;
    });
    amount.addEventListener('change', (e) => {
        value = e.target.value;
    });
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
        if (!value || !code || value <= 0) {
            return false;
        }
        const response = await axios.post('/create-donation', {currency: code, amount: value * 100, isChecked});
        if (response && response.status === 200) {
            window.location.href = response.data.formUrl;
        }
    }
    </script>
@endsection
