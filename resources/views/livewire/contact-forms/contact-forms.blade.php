<div>

    <div class="row mb-2 mt-4">
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">

                    <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="{{ asset('site-template/dist/img/contact.jpeg')  }}" alt="" width="87" height="87">
                        <h2>Contact form</h2>
                    </div>

                    <div class="row g-5">

                        <div class="col-md-12 col-lg-12">
                            <form>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="names" class="form-label">First name</label>
                                        <input wire:model="names" type="text" class="form-control" id="names" placeholder="Names" required>
                                        @error('names') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="surnames" class="form-label">Last name</label>
                                        <input wire:model="surnames" type="text" class="form-control" id="surnames" placeholder="Last name" required>
                                        @error('surnames') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="contact_number" class="form-label">Phone</label>
                                        <input wire:model="contact_number" type="text" class="form-control" id="contact_number" placeholder="1234">
                                    </div>

                                    <div class="col-6">
                                        <label for="email_address" class="form-label">Email</label>
                                        <input wire:model="email_address" type="email" class="form-control" id="email_address" placeholder="you@example.com" required>
                                        @error('email_address') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="company" class="form-label">Company <span class="text-muted">(Optional)</span></label>
                                        <input wire:model="company" type="text" class="form-control" id="company" placeholder="Company">
                                    </div>

                                    <div class="col-6">
                                        <label for="looking_for" class="form-label">Looking for <span class="text-muted">(Optional)</span></label>
                                        <select wire:model="looking_for" class="form-select" id="to_start">
                                            <option selected>Open this select menu</option>
                                            @foreach( $types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="to_start" class="form-label">When are you looking to start <span class="text-muted">(Optional)</span></label>
                                        <select wire:model="to_start" class="form-select" id="to_start">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Inmediatly</option>
                                            <option value="2">Within 1 to 2 months</option>
                                            <option value="3">After 2 months</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="budget" class="form-label">What's your budget <span class="text-muted">(Optional)</span></label>
                                        <select wire:model="budget" class="form-select" id="to_start">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Less than USD 15,000</option>
                                            <option value="2">USD 15,000 - USD 50,000</option>
                                            <option value="3">USD 100,000</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="files" class="form-label">Attach the file <span class="text-muted">(Optional only zip, 7zip or rar)</span></label>
                                        <input wire:model="files" type="file" class="form-control" id="files" placeholder="Attach the file">
                                    </div>

                                    <div class="col-6">
                                        <label for="description_project" class="form-label">Describes the project <span class="text-muted">(Optional)</span></label>
                                        <textarea wire:model="description_project" type="text" class="form-control" id="description_project" placeholder="Describes the project"></textarea>
                                    </div>

                                    <div class="col-6">
                                        <label for="message" class="form-label">Mesasage</label>
                                        <textarea wire:model="message" type="text" class="form-control" id="message" placeholder="message"></textarea>
                                        @error('message') <span class="error text-danger">{{ $message }}</span> @enderror
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
