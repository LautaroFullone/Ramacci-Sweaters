<div class="modal fade" id="mail">
    <div class="contact-form form-vertical">
        <div class="page-title">
            <h3>Camelia Reversible Jacket</h3>
        </div>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>cerrar</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ route('mail') }}" method="post" >
                    @csrf

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="text" id="ContactFormName" name="name" placeholder="Name"
                            value="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <input type="email" id="ContactFormEmail" name="email" placeholder="Email"
                            autocapitalize="off" value="" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <input required type="tel" id="ContactFormPhone" name="phone"
                            pattern="[0-9\-]*" placeholder="Phone Number" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea required rows="10" id="ContactFormMessage" name="body"
                            placeholder="Message"></textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" class="btn" >
                    </div>
                </div>
            </form>
            </div>


    </div>
</div>
