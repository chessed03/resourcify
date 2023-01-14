<div>

    <div class="row mb-2 mt-4">
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">

                    <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                        <h2>Contact form</h2>
                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                    </div>

                    <div class="row g-5">

                        <div class="col-md-12 col-lg-12">
                            <h4 class="mb-3">Billing address</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="names" class="form-label">First name</label>
                                        <input wire:model="names" type="text" class="form-control" id="names" placeholder="" value="" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="surnames" class="form-label">Last name</label>
                                        <input wire:model="surnames" type="text" class="form-control" id="surnames" placeholder="" value="" required>
                                    </div>

                                    <div class="col-6">
                                        <label for="contact_number" class="form-label">Phone</label>
                                        <input wire:model="contact_number" type="text" class="form-control" id="contact_number" placeholder="1234" required>
                                    </div>

                                    <div class="col-6">
                                        <label for="email_address" class="form-label">Email</label>
                                        <input wire:model="email_address" type="email" class="form-control" id="email_address" placeholder="you@example.com">
                                    </div>

                                    <div class="col-12">
                                        <label for="company" class="form-label">Company <span class="text-muted">(Optional)</span></label>
                                        <input wire:model="company" type="text" class="form-control" id="company" placeholder="Apartment or suite">
                                    </div>

                                    <div class="col-12">
                                        <label for="message" class="form-label">Mesasage</label>
                                        <textarea wire:model="message" type="text" class="form-control" id="message" placeholder="message" required></textarea>
                                    </div>

                                </div>

                            </form>

                            <button type="button" wire:click.prevent="store()" class="w-100 btn btn-primary btn-lg mt-4"> Send</button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
