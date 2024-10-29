
<div class="card col-lg-4 col-md-6 col-12">
    <img src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->title }}">
    <div class="d-flex" style="padding: 0px">
        <div class="card-title">{{ $template->title }}</div>
        <div class="d-flex" style="margin-left: auto">
            <a href="#" class="view d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></a>
            <a href="{{ $template->link }}" target="_blank" class="view d-flex align-items-center justify-content-center"><i class="fas fa-eye"></i></a>
        </div>
    </div>
    <div class="" style="padding: 0px; Opacity:50%; font-size:14px; margin-top:auto">       
        <div class="card-title"> <i class="fa fa-shopping-bag me-2"></i>{{ $template->total_pembelian }} Orang Membeli Template ini</div>
    </div>
</div>
