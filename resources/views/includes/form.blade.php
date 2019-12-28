@csrf
<div class="row">

    <div class="col-4">
        <div class="form-group">
            <label for="client"> Nom et prénoms</label>
            <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') ?? $client->fullname }}">
                @error('fullname')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client"> Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $client->email }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client"> Addresse courante du colis</label>
            <input type="text" class="form-control @error('current_address') is-invalid @enderror" name="current_address" value="{{ old('current_address') ?? $client->current_address }}">
                @error('current_address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client"> Addresse de destination du colis</label>
            <input type="text" class="form-control @error('destination_address') is-invalid @enderror" name="destination_address" value="{{ old('destination_address') ?? $client->destination_address }}">
                @error('destination_address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client"> Addresse du client</label>
            <input type="text" class="form-control @error('custumer_address') is-invalid @enderror" name="custumer_address" value="{{ old('custumer_address') ?? $client->custumer_address }}">
                @error('custumer_address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <label for="client">Code postal</label>
            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') ?? $client->zip_code }}">
                @error('zip_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client"> Téléphone</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') ?? $client->phone_number }}">
                @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="tracking_number"> Numero de suivi du client</label>
            <input type="text" class="form-control @error('tracking_number') is-invalid @enderror" id="tracking_number" name="tracking_number" value="{{ old('tracking_number') ?? $client->tracking_number }}">
            @error('tracking_number')
            <div class="invalid-feedback">
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="client">Email de l'expéditeur</label>
            <input type="text" class="form-control @error('sender_email') is-invalid @enderror" name="sender_email" value="{{ old('sender_email') ?? $client->sender_email }}">
                @error('sender_email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="client">Numéro de l'expéditeur</label>
            <input type="text" class="form-control @error('sender_phone_number') is-invalid @enderror" name="sender_phone_number" value="{{ old('sender_phone_number') ?? $client->sender_phone_number }}">
                @error('sender_phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client">Nom complet de l'expéditeur</label>
            <input type="text" class="form-control @error('sender_fullname') is-invalid @enderror" name="sender_fullname" value="{{ old('sender_fullname') ?? $client->sender_fullname }}">
                @error('sender_fullname')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client">Code zip de l'expéditeur</label>
            <input type="text" class="form-control @error('sender_zip_code') is-invalid @enderror" name="sender_zip_code" value="{{ old('sender_zip_code') ?? $client->sender_zip_code }}">
                @error('sender_zip_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="client">Adresse de l'expéditeur</label>
            <input type="text" class="form-control @error('sender_current_address') is-invalid @enderror" name="sender_current_address" value="{{ old('sender_current_address') ?? $client->sender_current_address }}">
                @error('sender_current_address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>

</div>