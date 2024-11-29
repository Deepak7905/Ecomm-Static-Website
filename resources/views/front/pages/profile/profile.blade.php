@extends('front.main')

@section('content')

<h3 class="text-center my-4 text-primary">Profile Page</h3>

<div class="container">
    <!-- Success and Error Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <!-- Left Column: Profile Navigation --> 
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="d-flex flex-column align-items-start p-3 bg-light border rounded shadow-sm">
                <h5 class="mb-3">Profile </h5>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                        <i class="bi bi-person-circle"></i> Profile
                    </button>
                    <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">
                        <i class="bi bi-pencil-square"></i> Edit Profile
                    </button>
                    <button class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false">
                        <i class="bi bi-box"></i> Orders
                    </button>

                    <!-- Logout Tab -->
                    <form action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="nav-link text-danger" style="border: none; background: none;">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Column: Profile Information & Edit Form -->
        <div class="col-lg-8">
            <div class="tab-content p-3 bg-white border rounded shadow-sm">

                <!-- Profile Tab -->
                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h4 class="mb-4">Profile Information</h4>
                    <div class="mb-3">
                        
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Created At:</strong> {{ $user->created_at->format('F j, Y, g:i a') }}</p>
                        <p><strong>Updated At:</strong> {{ $user->updated_at->format('F j, Y, g:i a') }}</p>
                    </div>
                </div>

                <!-- Edit Profile Tab -->
                <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                    <h4 class="mb-4">Edit Profile</h4>
                    <form method="POST" action="{{ route('updateProfile') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        
                        <span class="float-end text-muted">Leave the password field empty to retain your current password.</span>
                        
                        <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
    <h4 class="mb-4">Payment History</h4>
    @if($payments->isEmpty())
        <p>No payments found.</p>
    @else
         <div class="table-responsive">
         <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Payment ID</th>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $payment->payment_id }}</td>
                <td>{{ $payment->order_id }}</td>
                <td>{{ $payment->product_name }}</td>
                <td>{{ $payment->product_price }}</td>
                <td>{{ \Carbon\Carbon::parse($payment->created_at)->format('F j, Y, g:i a') }}</td>
                <td>{{ $payment->user_name }}</td> <!-- From users table -->
                <td>{{ $payment->user_phone }}</td> <!-- From payments table -->
                <td>{{ $payment->user_address }}</td> <!-- From payments table -->
            </tr>
        @endforeach
    </tbody>
</table>

    @endif
</div>
</div> 
            </div>
        </div>
    </div>
</div>

@endsection
