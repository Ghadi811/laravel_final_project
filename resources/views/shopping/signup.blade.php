@extends('layouts.appuserui')

@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card">
        <p>
            
        </p>
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="{{ route('loginui') }}" role="tab" aria-controls="pills-home" aria-selected="false">تسجيل دخول</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="{{ route('signupui') }}" role="tab" aria-controls="pills-profile" aria-selected="true">تسجيل</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="form px-4 pt-5">
                    <form action="{{ route('registerconf') }}" method="POST">
                        @csrf

                        <!-- Name Input -->
                        <input type="text" name="name" class="form-control" placeholder="الاسم" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Email Input -->
                        <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Phone Input -->
                        <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Address Input -->
                        <input type="text" name="address" class="form-control" placeholder="العنوان" value="{{ old('address') }}" required>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Password Input -->
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Confirm Password Input -->
                        <input type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة المرور" required>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <p></p>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-dark btn-block text-center">اتمام</button>
                    </form>

                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
