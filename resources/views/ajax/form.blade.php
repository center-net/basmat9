@section('main')
    {{-- <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
    <form action="{{route('donte')}}" class="paymentWidgets" data-brands="VISA MASTER "></form>
 --}}
 {{-- <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
 <form action="https://eu-test.oppwa.com/v1/checkouts/{{$responseData['id']}}/payment" class="paymentWidgets">VISA MASTER AMEX</form> --}}



    <div id="card_220921339056" class="wpwl-container wpwl-container-card">
        {{-- <form class="wpwl-form wpwl-form-card wpwl-clearfix" action="{{route('dontemessage')}}" method="POST" target="cnpIframe" lang="en"> --}}
            @csrf
        <form class="wpwl-form wpwl-form-card wpwl-clearfix" action="https://eu-test.oppwa.com/v1/checkouts/{{$responseData['id']}}/payment" method="get"  lang="en">
            <div class="wpwl-group wpwl-group-brand wpwl-clearfix">
                <div class="wpwl-label wpwl-label-brand">Brand</div>
                <div class="wpwl-wrapper wpwl-wrapper-brand">
                    <select class="wpwl-control wpwl-control-brand" name="paymentBrand">
                        <option value="MASTER">Mastercard</option>
                        <option value="VISA">Visa</option>
                    </select>
                </div>
                <div class="wpwl-brand wpwl-brand-card wpwl-brand-MASTER"></div>
            </div>
            <div class="wpwl-group wpwl-group-cardNumber wpwl-clearfix">
                <div class="wpwl-label wpwl-label-cardNumber">Card Number</div>
                <div class="wpwl-wrapper wpwl-wrapper-cardNumber">
                    <input autocomplete="off" type="tel" name="card.number" class="wpwl-control wpwl-control-cardNumber" placeholder="Card Number">
                </div>a
            </div>
            <div class="wpwl-group wpwl-group-expiry wpwl-clearfix">
                <div class="wpwl-label wpwl-label-expiry">Expiry Date</div>
                <div class="wpwl-wrapper wpwl-wrapper-expiry">
                    <input autocomplete="off" type="tel" name="card.expiry"b class="wpwl-control wpwl-control-expiry" placeholder="MM / YY">
                </div>
            </div>
            <div class="wpwl-group wpwl-group-cardHolder wpwl-clearfix">
                <div class="wpwl-label wpwl-label-cardHolder">Card holder</div>
                <div class="wpwl-wrapper wpwl-wrapper-cardHolder">
                    <input autocomplete="off" type="text" name="card.holder" class="wpwl-control wpwl-control-cardHolder" placeholder="Card holder">
                </div>
            </div>
            <div class="wpwl-group wpwl-group-cvv wpwl-clearfix">
                <div class="wpwl-label wpwl-label-cvv">CVV</div>
                <div class="wpwl-wrapper wpwl-wrapper-cvv">
                    <input autocomplete="off" type="tel" name="card.cvv" class="wpwl-control wpwl-control-cvv" placeholder="CVV">
                </div>
            </div>
            <div class="wpwl-group wpwl-group-submit wpwl-clearfix">
                <div class="wpwl-wrapper wpwl-wrapper-submit">
                    <button type="submit" name="pay" class="wpwl-button wpwl-button-pay">Pay now</button>
                </div>
            </div>
            <input type="hidden" name="shopperResultUrl" value="https://eu-test.oppwa.com/v1/checkouts/{{$responseData['id']}}/payment">
            <input type="hidden" name="card.expiryMonth" value="">
            <input type="hidden" name="card.expiryYear" value="">
        </form>
    </div>
@stop