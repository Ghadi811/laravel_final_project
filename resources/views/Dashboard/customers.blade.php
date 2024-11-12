@extends('layouts.updash')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>رقم العميل</th>
                                <th>اسم العميل</th>
                                <th>البريد الإلكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>العنوان</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <!-- Delete Form -->
                                    <form action="{{ route('deletecustumer', $customer->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')  <!-- This will convert the form to a DELETE request -->
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا العميل؟')">
                                            <i class="bi bi-trash"></i> حذف
                                        </button>
                                    </form>

                                    <!-- Edit Link -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
