
<div class="card webtemplate col-md-6 col-12">
    <a href="{{ $template->link }}" target="_blank">
        <img src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->title }}">
    </a>
    <div class="d-flex" style="padding: 0px">
        {{-- <div class="card-title">{{ $template->title }}</div> --}}
        <div class="card-title">
            <a href="{{ $template->link }}" target="_blank" style="text-decoration: none; color: inherit;">
                {{ $template->title }}
            </a>
        </div>
        <div class="d-flex" style="margin-left: auto">
            <a href="/#OrderSummary" class="view select d-flex align-items-center justify-content-center"data-template-pembelian="{{ $template->total_pembelian }}" data-template-id="{{ $template->id }}" data-template-type="{{ $template->type }}" data-template-title="{{ $template->title }}" data-bs-toggle="tooltip" title="Pilih Template"><i class="fas fa-check"></i></a>
            <a href="{{ $template->link }}" target="_blank" class="view d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" title="Live Preview"><i class="fas fa-eye"></i></a>
        </div>
    </div>
    <div class="" style="padding: 0px; Opacity:50%; font-size:14px; margin-top:auto">       
        <div class="card-title"> <i class="fa fa-shopping-bag me-2"></i>{{ $template->total_pembelian }} Purchased</div>
    </div>
    
</div>


