<!-- Review Form Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center">
                            <h2 class="mb-4">Write a Review</h2>

            </div>
            @auth
            <form method="POST" action="{{ route('userSide.AddReview', ['user_id' => Auth::user()->id, 'restaurant_id' => $restaurant->id])}}">
            @csrf
                
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="" selected disabled>Select a rating</option>
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="2">2 Stars</option>
                        <option value="1">1 Star</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="review" class="form-label">Your Review</label>
                    <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit Review</button>
                </div>
            </form>
            @else
            <div>Please login first</div>
            <a href="{{route('login')}}">login</a>
              @endauth
        </div>
    </div>
</div>
<!-- Review Form End -->