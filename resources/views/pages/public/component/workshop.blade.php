<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-start align-items-end">
            <div class="p-4 shadow-4 rounded-3">
                <h2>Berbagai Pilihan Workshop</h2>
                <p>
                    Kami menyediakan berbagai pilihan workshop, kamu dapat memilih sesuai <br>
                    dengan keinginan kamu untuk mendalami ataupun mempelajari mengenai UX <br>
                    dan product design <b>sesuai keinginan dan kebutuhan kamu.</b>
                </p>
                <button type="button" class="btn btn-primary">
                    Pilihan Workshop
                </button>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-end">
            <div class="p-4 shadow-4 rounded-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <span class="bg-danger rounded-pill py-1 px-3">Hai Evan, saat ini kamu memiliki kuota untuk mengikuti 1 workshop secara gratis dari daftar workshop berikut </span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white mt-3">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @foreach ($tipe_webinar as $item)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-5">
        @foreach ($webinar as $item)
            <div class="col-md-4">
                @php
                    if ($item['level'] == 1) {
                        $item['level'] = 'Intermediate';
                    } else {
                        $item['level'] = 'Basic';
                    }
                @endphp
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <img src="{{ asset('assets/images/logo/Logo_white.png') }}" alt="">
                    </div>
                    <div class="card-header bg-primary text-white">
                        <h5>{{ $item['name'] }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="img">
                                <img src="{{ asset('assets/images/mentor/mentor1.png') }}" class="rounded-all" alt="">
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary">{{ $item['level'] }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6>Mentor</h6>
                        <p>{{ $item['mentor']['name'] }}</p>
                    </div>
                    @if ($item['pendaftar'] < $item['quota'])
                        <div class="card-footer">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary">Pelajari Workshop Lebih Lanjut</button>
                            </div>
                        </div>
                    @else
                        <div class="card-footer text-center">
                            <span>Lihat silabus yang diberikan di workshop ini</span>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
