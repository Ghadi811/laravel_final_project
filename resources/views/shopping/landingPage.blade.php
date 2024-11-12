@extends('layouts.appuserui')

@section('content')

<div class="container">
    <!-- Welcome Section -->
    <div class="row mt-5 custom-background text-end p-4 rounded" style="background-color: #f2f2f2; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="col">
            <h2 class="fw-bold" style="color: #333;">أهلا بكم</h2>
            <h4 class="text-muted" style="line-height: 1.6;">
                الحـرف اليـدويـة. الحرفة : هي الصناعات التي يرتزق منها وهي جهة الكسب، وتنقسم الحرف اليدوية في الوقت الحاضر الى نوعين (حرفة إنتاجية فنية و حرفة تراثية).
            </h4>
        </div>
    </div>

    <!-- Product Categories Section -->
    <div class="row mt-5">
        <!-- Crochet Card -->
        <div class="col-md-4">
            <a href="{{ route('pb') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <img src="/images/A.jpg" alt="كورشيه" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <h3 class="fw-bold" style="color: #f37a27;">كورشيه</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pottery Card -->
        <div class="col-md-4">
            <a href="{{ route('pa') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <img src="/images/b.webp" alt="فخار" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <h3 class="fw-bold" style="color: #f37a27;">فخار</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- Prayer Beads Card -->
        <div class="col-md-4">
            <a href="{{ route('pc') }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <img src="/images/c.webp" alt="سبح" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <h3 class="fw-bold" style="color: #f37a27;">سبح</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
