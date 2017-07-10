<section class="switchable imagebg height-100" data-overlay="2" id="contact">
    <div class="background-image-holder"><img alt="background" src="{{ asset('img/architecture-3.jpg') }}"></div>
    <div class="container pos-vertical-center">
        <div class="row">

            <div class="col-md-5 col-sm-7 switchable__text">
                <h1> Would You like a quote? </h1>
                <p class="lead"> Drop us a line, we would love to chat. </p>
                <p>Tel: <a href="tel:+61401971692">0401 971 692</a></p>
                <p>Email:<a href="mailto:enquiries@masempaintingcontactors.com">enquiries@masempaintingcontactors.com</a></p>
                <p>Facebook Messenger:<a href="https://m.me/masempainting" class="fb-msg-btn" target="_blank">@masempainting</a></p>
            </div>

            <div class="col-sm-6">
                <div class="boxed boxed--lg bg--googleplus boxed--border boxed-form">
                    <h4>Contact US</h4>
                    <p>We will respond to your enquiry ASAP</p>
                    {{csrf_field()}}
                    <form class="text-left form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                        <div class="col-sm-12"> <label>Your Name:</label> <input type="text" name="Name" class="validate-required"> </div>
                        <div class="col-sm-12"> <label>Email Address:</label> <input type="email" name="Email" class="validate-required validate-email"> </div>
                        <div class="col-sm-12"> <label>Phone Number:</label> <input type="number" name="Phone" class="validate-required"> </div>
                        <div class="col-sm-12"> <label>Message:</label> <textarea rows="6" name="Message" class="validate-required"></textarea> </div>
                        <div class="col-sm-5 col-md-4"> <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button> </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>