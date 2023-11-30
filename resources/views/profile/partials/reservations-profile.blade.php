<div class="card mb-4">
    <h4 class="card-header fw-normal">Update Password</h4>
    <div class="card-body">
        {{-- <form id="formAccountDeactivation" onsubmit="return false"> --}}
        <table class="table text-center mb_50">
            <thead class="text-uppercase text-uppercase">
                <tr>
                    <th>Restaurant</th>
                    <th>Restaurant Name</th>
                    <th>Table Number</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td><img src="{{ $reservation->restaurant->image1 }}" height="80px"></td>
                        <td>{{ $reservation->restaurant->name }}</td>
                        <td>{{ $reservation->table->name }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>{{ \Carbon\Carbon::parse($reservation->reservation_time)->format('h:i A') }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
