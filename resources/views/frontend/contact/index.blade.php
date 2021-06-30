@extends('layouts.master')

@section('title', trans('contact.contact'))

@section('content')

<!-- main -->
<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-offset-1">
                <h3>{{ trans('contact.contact_info') }}</h3>
                <div class="row contact-info-wrap">
                    <div class="col-md-3">
                        <p><span><i class="fas fa-map-marker-alt"></i></span> Học viện Nông nghiệp Việt Nam, thị trấn
                            Trâu Quỳ, Gia
                            Lâm, Hà Nội</p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="fas fa-phone"></i></span> <a href="tel://0988 550 553">Phone: 0355813434</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="fas fa-paper-plane"></i></span> <a
                                href="mailto:info@yoursite.com">Gmail: anh980523@gmail.com</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="fab fa-skype"></i></span> <a href="skype:Anh Nguyễn?userinfo">Skype: Anh Nguyễn</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-offset-1">
                <div class="contact-wrap">
                    <h3>{{ trans('contact.contact') }}</h3>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-12 padding-bottom">
                                <label for="fname">{{ trans('contact.full_name') }}</label>
                                <input type="text" id="fname" class="form-control" placeholder="{{ trans('contact.full_name') }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">{{ trans('contact.email') }}</label>
                                <input type="text" id="email" class="form-control" placeholder="Email của bạn">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">{{ trans('contact.subject') }}</label>
                                <input type="text" id="subject" class="form-control" placeholder="{{ trans('contact.enter_subject') }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">{{ trans('contact.message') }}</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                    placeholder="{{ trans('contact.tell_us_something') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="{{ trans('contact.send_the_contact') }}" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7449.302382412657!2d105.9380951!3d21.006614799999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1618808175718!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- end main -->

@endsection


@section('scripts')
@parent
<script>
$(document).ready(function() {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);

        // Increment

    });

    $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });

});
</script>

@endsection