<div id="reservation"
    style="margin: 0 auto; max-width: 900px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; font-family: Arial, sans-serif; background-color: #f9f9f9;">
    <div style="text-align: center;">
        {{-- <h2 style="margin-bottom: 20px; color: #333;">Reservations</h2> --}}
        <h2 class="text-center block-title">
            Reservations
        </h2>
    </div>

    <div style="margin-bottom: 20px;">
        <h4 style="margin-bottom: 10px; color: #555;">Booking Form</h4>

        <p style="margin-top: 0; color: #777;">Please fill out all required fields. Thanks!</p>
        @if (session()->has('error'))
            <div style="color: red; text-align: center; margin-bottom: 10px; font-size: 20px">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Name*</label>
            <input type="text" wire:model='name'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Email ID*</label>
            <input type="email" wire:model='email'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
            @error('email')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Contact No.*</label>
            <input type="number" wire:model='phone'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;">
            @error('phone')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Date*</label>
            <input type="date" wire:model='date'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
            @error('date')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">No. Of Persons*</label>
            <select name="num_guests" wire:model='num_guests'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            @error('num_guests')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Time*</label>
            <input type="time" wire:model='time'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
            @error('time')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Tables Available*</label>
            <select name="table_id" wire:model='table_id'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;" required>
                @foreach ($tablesAvailable as $table)
                    <option value="{{ $table->id }}">Table {{ $table->id }} (Seats: {{ $table->capacity }})
                    </option>
                @endforeach
            </select>
            @error('table_id')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
        <div style="width: 48%;">
            <label style="margin-right: 10px; color: #333;">Occasion*</label>
            <select name="occasion" wire:model='occasion'
                style="padding: 8px; width: calc(100% - 20px); border-radius: 5px; border: 1px solid #ccc;">
                <option value="">Select</option>
                <option value="Personal">Personal</option>
                <option value="Wedding">Wedding</option>
                <option value="Birthday">Birthday</option>
                <option value="Anniversary">Anniversary</option>
            </select>
            @error('occasion')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div style="text-align: center; margin-bottom: 20px;">
        <button wire:click='makeReservation'
            style="padding: 12px 24px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;"
            onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">
            BOOK MY TABLE
        </button>
    </div>
</div>
