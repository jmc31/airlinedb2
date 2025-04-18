<div class="container mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h3 class="text-2xl font-semibold text-center mb-4">Payment Confirmation</h3>

    <div class="space-y-4">
        <p class="text-lg font-medium">
            <span class="font-semibold">Accomodation:</span> {{ $accomodation }}
        </p>
        <p class="text-lg font-medium">
            <span class="font-semibold">Origin:</span> {{ $origin }}
        </p>
        {{-- <p class="text-lg font-medium">
            <span class="font-semibold">Destination:</span> {{ $destination }}
        </p> --}}
        <p class="text-lg font-medium">
            <span class="font-semibold">Amount:</span> ${{ $amount }}
        </p>
        <p class="text-lg font-medium">
            <span class="font-semibold">Passenger:</span> {{ $passenger_name }}
        </p>
        <p class="text-lg font-medium">
            <span class="font-semibold">Age:</span> {{ $age }}
        </p>
        <p class="text-lg font-medium">
            <span class="font-semibold">Email:</span> {{ $email }}
        </p>
        <p class="text-lg font-medium">
            <span class="font-semibold">Contact:</span> {{ $contact }}
        </p>
    </div>

    <div class="text-left">
        <label for="payment_method" class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
        <select id="payment_method" wire:model="payment_method" class="w-full border rounded p-2 mb-4">
            <option value="">-- Select Payment Method --</option>
            <option value="card">Card</option>
            <option value="gcash">GCash</option>
            <option value="paypal">PayPal</option>
        </select>
    </div>

    <div class="mt-6 text-center">
        <button wire:click="processPayment" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
            Confirm Payment
        </button>
    </div>
</div>
