<!-- Reservation Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="booktable">
    <div class="row g-0">
        <div class="col-md-6">

            <img src="{{ asset('frontend/img2/reserve.png') }}" alt="" class="img-fluid">

        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="text-dark mb-4 text-center">Make a Reservation</h1>
                <form action="{{ route('reserve.stepOne') }}" method="POST">
                        @csrf
                        

                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" id="date"
                                    placeholder="Date" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="date">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="time" class="form-control datetimepicker-input" id="time"
                                    placeholder="Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="time">Time</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="" selected disabled>Select a Table</option>
                                    @foreach ($restaurant->tables as $table)
                                        @if ($table->status == 'available')
                                            <option value="{{ $table->id }}">{{ $table->name }}
                                                ({{ $table->capacity }} Guests)
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="select1">Table (No Of People)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Reserve Now</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->
