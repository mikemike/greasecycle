@extends('layouts.main')

@section('content')
   <section id="home" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap" style="height:500px;">
               <div class="algn-cntr inr-section" style="z-index:100;">
                   <img src="{{asset('/images/grease-cycle-icon-2.svg')}}" alt="Grease Cycle Logo" height="120">
                       <div class="wrap-middle ldnr-cnt-dv">
                           <h1 class="title-name" style="color:#2FA008">GREASE</h1>
                           <h1 class="title-name">CYCLE</h1>
                       </div>
                       <h5 class="sub-head">Capture. Collect. Recycle.</h5>
                       <p class="title-para">Bespoke Grease Trap Solutions.</p>
               </div>
               <div id="land-lst-sec" class="algn-cntr inr-section wrap-middle" style="height: 100%;">
                   <ul class="svg-list">
                       <li><span><svg xmlns="http://www.w3.org/2000/svg" height="54px" viewBox="0 0 24 24" width="44px" fill="#19A856"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"/></svg></span> <p class="svg-lst-p">free consultation</p></li>
                       <li><span><svg xmlns="http://www.w3.org/2000/svg" height="54px" viewBox="0 0 24 24" width="44px" fill="#19A856"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"/></svg></span> <p class="svg-lst-p">no upfront costs</p></li>
                       <li><span><svg xmlns="http://www.w3.org/2000/svg" height="54px" viewBox="0 0 24 24" width="44px" fill="#19A856"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"/></svg></span> <p class="svg-lst-p">monthly replacement Incl. Waste removal</p></li>
                       <li><span><svg xmlns="http://www.w3.org/2000/svg" height="54px" viewBox="0 0 24 24" width="44px" fill="#19A856"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"/></svg></span> <p class="svg-lst-p">low monthly fee</p></li>
                   </ul>
                   <a href="/#contact"><button class="act-btn">Book Now</button></a>
               </div>
           </div>
       </div>
   </section>
    <section id="about" class="wrap-start">
        <div class="outr-content-wrap">
            <div class="inr-content-wrap" style="flex-direction: column;overflow: hidden;position: relative;">
                <img id="about-img" src="{{asset('/images/20211123_124930.jpg')}}" alt="grease cycle office" />
                <div style="width:100%;position: relative;" class="wrap-space-between">
                    <div class="container">
                        <div class="algn-left">
                            <h2 class="section-header">GreaseCycle&trade;</h2>
                            <p style="color:#F0822B;margin-top:10px;font-size:18px;">About Us</p>
                        </div>
                        <p class="section-para">GreaseCycle&trade; is a fully managed grease trap leasing service for commercial kitchens.
                            <br/><br/>
                            Our grease traps are designed and manufactured in the UK and our unique modular design ensures we can accommodate kitchens of all shapes and sizes.
                            Rather than a fit and forget approach used by most grease trap companies, GreaseCycle&trade; continue to support your business following installation by replacing the grease trap system on a monthly basis with clean sanitised modules.
                            <br/><br/>
                            This ensures that your grease trap continues to work effectively without you having the hygiene risk of cleaning it out in the middle of your kitchen. The FOG captured in the modules is collected and recycled for Biogas in partnership with Gap Organics (<a class="display-link" href="https://www.gapgroupuk.com/food-waste/wardley-biogas-plant/" target="_blank">https://www.gapgroupuk.com/food-waste/wardley-biogas-plant/</a>) to help lower your carbon footprint and be more environmentally friendly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="algn-cntr" style="width:100%;margin-top:50px;">
                   <img style="margin-bottom:40px" src="{{asset('images/recycle-solid.svg')}}" alt="recycle icon" height="100px" />
                   <div class="wrap-middle" style="width:100%;">
                       <p class="cap-col-rec">Capture.</p>
                       <p class="cap-col-rec">Collect.</p>
                       <p class="cap-col-rec">Recycle.</p>
                   </div>
                   <a href="/#contact" class="act-btn">Book Now</a>
               </div>
           </div>
       </div>
   </section>
   <section id="why" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap" style="flex-direction: column;overflow: hidden;position: relative;">
               <img id="about-img" src="{{asset('/images/8h3d89h489h89hws.jpg')}}" alt="grease cycle office" />
               <div style="width:100%;position: relative;" class="wrap-space-between">
                   <div class="container">
                       <div class="algn-left">
                           <h2 class="section-header">Why GreaseCycle&trade;?</h2>
                       </div>
                       <p class="section-para">
                           GreaseCycle&trade; provide a hassle free grease management service for commercial kitchens.
                           We provide a hassle free service from installation through to monthly replacements and waste removal.
                       </p>
                       <p class="section-para" style="margin-top:15px;">Grease traps are now required by law under <a class="display-link" style="font-style: italic;" href="https://www.legislation.gov.uk/ukpga/1991/56/section/111" target="_blank">section 111 of the Water Industry Act.</a> and our product &amp; services protect you from large waste water fines &amp; business delays.</p>
                       <p style="margin-top:30px;">What you get:</p>
                       <ul style="width:70%">
                           <li>Free Installation</li>
                           <li>Hassle Free - Monthly replacements and waste removal by a trained technician</li>
                           <li>Improved Drainage - Avoid blockages and bad odours</li>
                           <li>Peace of Mind - Ongoing support to avoid potential fines</li>
                           <li>Environmentally Friendly - Fat, oil and grease recovered from our grease traps is recycled for biogas in partnership with Gap Organics <a class="display-link" href="https://www.gapgroupuk.com/food-waste/wardley-biogas-plant/" target="_blank">https://www.gapgroupuk.com/food-waste/wardley-biogas-plant/</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section id="pricing" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="container algn-cntr">
                   <h2 class="section-header">Pricing</h2>
                   <p style="margin-top:30px; text-align: center;">All of this for an affordable monthly fee starting from as little as:</p>
                   <p class="price-p">£69.99 per month</p>
                   <small style="margin-top:5px;font-style: italic;">(Excl. VAT)</small>
                   <a href="/#contact" class="act-btn">Book Now</a>
               </div>
           </div>
       </div>
   </section>
   <section id="contact" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="container algn-cntr">
                   <div class="algn-cntr">
                       <h2 class="section-header">Contact</h2>
                   </div>
                   <p class="algn-cntr call-us-p text-center" style="text-align: center">
                       Call us on<br> 07949505451 <br>
                       or email <br><a href="mailto:info@greasecycle.co.uk">info@greasecycle.co.uk</a>
                    </p>
                   {{--
                   <form class="form form-stndrd form-all-req" style="margin-top:20px;" action="/call-back-submit" method="POST" enctype="application/x-www-form-urlencoded">
                       @csrf
                       <p style="margin: 20px 0px;">Request a callback</p>
                       @if(session()->has('form-success'))
                           <div class="form-resp-dv form-resp-dv-success">Successfully sent callback request.</div>
                       @endif
                       @if(session()->has('form-failed'))
                           <div class="form-resp-dv form-resp-dv-failed">Form failed to submit. please try again or call us.</div>
                       @endif
                       <div class="form-inpt-sec">
                           <label>Full Name<small>*</small></label>
                           <input id="contact-name" type="text" name="name" placeholder="Full Name" required/>
                       </div>
                       <div class="form-inpt-sec">
                           <label>Company Name<small>*</small></label>
                           <input id="contact-company" type="text" name="company" placeholder="Company Name" required/>
                       </div>
                       <div class="form-inpt-sec">
                           <label>Email <small>*</small></label>
                           <input id="contact-email" type="text" name="email" placeholder="Email" autocomplete="email"/>
                           @error('email')
                           <p class="invalid-feedback">{{ $message }}</p>
                           @enderror
                       </div>
                       <div class="form-inpt-sec">
                           <label>Telephone <small>*</small></label>
                           <input id="contact-tel" type="text" name="telephone" placeholder="Telephone" autocomplete="tel" required/>
                       </div>
                       <input id="contact-type" type="hidden" name="reqtype" value="grease trap" required/>
                       @if(config('services.recaptcha.key'))
                           <div id="recaptcha" class="g-recaptcha"
                                data-sitekey="{{config('services.recaptcha.key')}}">
                           </div>
                       @endif
                        <button id="submit-contact-btn" type="submit">Request Callback</button>
                       <small style="margin-top:10px;">By Submitting this form you are agreeing to allow us to use and store this data. We aim to be back in contact within 3 bussiness days. Thank you.</small>
                   </form>
                   --}}
               </div>
           </div>
       </div>
   </section>
   <section id="gallery" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="container algn-cntr">
                   <h2 class="section-header">Gallery</h2>

                   <div class="grid-container" style="padding-top:20px;width:100%;">
                       <img class="grid-item" width="500" src="{{asset('/images/sh38hs93s8hs3s.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/8h3d89h489h89hws.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/8ed89e8389j3sjfhgg.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/90sj092js9vjajaaa.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/903hd09h89h566hdg.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/93d90390f8sasdff.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/s9j390djrfaaaaaw3.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/9jd-3940epqaloak.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/00h89he89h4ss3d.jpg')}}" alt="grease trap">
                       <img class="grid-item" width="500" src="{{asset('/images/03890h894h5h5sd.jpg')}}" alt="grease trap">
                   </div>

               </div>
           </div>
       </div>
   </section>
@endsection
