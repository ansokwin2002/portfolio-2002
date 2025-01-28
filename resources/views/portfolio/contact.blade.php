<div class="contact" id="contact">
    <div class="box_contact">
        <div class="container-fluid">
            <h1>@lang('translate.get')</h1>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="box_left">
                        <h4>
                            <strong>@lang('translate.let')</strong>
                        </h4>
                        <p>@lang('translate.don') &nbsp;<small><a href="" style="text-decoration: none;color:#FFC006;">Email</a></small></p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="box_right">
                            <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="box_name">
                                            <input type="text" name="name" id="" placeholder="@lang('translate.name')">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="box_email">
                                            <input type="email" name="email" id="" placeholder="@lang('translate.email')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-4" style="padding-left: 0; padding-right: 0;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="box_name">
                                            <input type="text" name="subject" id="" placeholder="@lang('translate.subject')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-4" style="padding-left: 0; padding-right: 0;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="box_message">
                                            <textarea name="message" id="" cols="30" rows="10" placeholder="@lang('translate.message')"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-4" style="padding-left: 0; padding-right: 0;">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <button style="border: none;" class="btn_send" type="submit">@lang('translate.send')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>