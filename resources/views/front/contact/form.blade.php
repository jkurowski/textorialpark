<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 position-relative">
            <h2 class="text-center mb-5" style="width:100% !important;font-weight:300;color:#ffffff">@lang('website.contactform-cta')</h2>
            @if (session('success'))
                <div class="alert alert-success border-0">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning border-0">
                    {{ session('warning') }}
                </div>
            @endif
            <form method="post" id="contact-form" action="{{ route('contact.form') }}" class="validateForm">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12 mb-4 mb-md-0 col-md-4 form-input">
                        <label for="form_name">@lang('website.contactform-name') <span class="text-danger">*</span></label>
                        <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                        @error('form_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 mb-4 mb-md-0 col-md-4 form-input col-input-important">
                        <label for="form_surnames">@lang('website.contactform-surname') <span class="text-danger">*</span></label>
                        <input name="form_surnames" id="form_surnames" class="form-control" type="text" value="{{ old('form_surname') }}">
                    </div>
                    <div class="col-12 mb-4 mb-md-0 col-md-4 form-input">
                        <label for="form_email">@lang('website.contactform-email') <span class="text-danger">*</span></label>
                        <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                        @error('form_email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-4 form-input">
                        <label for="form_phone">@lang('website.contactform-phone') <span class="text-danger">*</span></label>
                        <input name="form_phone" id="form_phone" class="validate[required] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                        @error('form_phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 mt-4 form-input">
                        <label for="form_message">@lang('website.contactform-message') <span class="text-danger">*</span></label>
                        <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                        @error('form_message')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-9">
                        @isset($obligation)
                            <div class="rodo-obligation mt-3">
                                {!! $obligation->obligation !!}
                            </div>
                        @endif

                        @isset($rules)
                            <div class="rodo-rules">
                                @foreach ($rules as $r)
                                    <div class="col-12 @error('rule_'.$r->id) is-invalid @enderror">
                                        <div class="rodo-rule clearfix">
                                            <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                            <label for="rule_{{$r->id}}" class="rules-text">
                                                {!! $r->text !!}
                                                @error('rule_'.$r->id)
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="rodo-rules">
                            <div class="col-12">
                                <div class="rodo-rule clearfix">
                                    <input name="rule_1" id="rule_1" value="1" type="checkbox" data-prompt-position="topLeft:0">
                                    <label for="rule_1" class="rules-text">@lang('website.contactform-rule')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-end align-items-end">
                        <div class="form-submit w-100">
                            <input name="form_page" type="hidden" value="@isset($page_name) {{ $page_name }} @endif">
                            <script type="text/javascript">
                                document.write("<button type=\"submit\" class=\"g-recaptcha bttn w-100\" data-sitekey=\"{{ config('services.recaptcha_v3.siteKey') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">@lang('website.contactform-sendbutton')</button>");
                            </script>
                            <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px",
                autoPositionUpdate: false
            });
        });

        function onRecaptchaSuccess(token) {
            $(".validateForm").validationEngine('updatePromptsPosition');
            const isValid = $(".validateForm").validationEngine('validate');
            if (isValid) {
                $("#contact-form").submit();
            } else {
                grecaptcha.reset();
            }
        }

        @if (session('success') || session('warning') || $errors->any())
        $(window).load(function() {
            const aboveHeight = $('#mainNav').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush