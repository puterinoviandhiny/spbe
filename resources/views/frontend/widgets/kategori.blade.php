<div class="widget ticket_widget">
    <h4 class="c_head">Kategori Pertanyaan</h4>

    <ul class="list-unstyled ticket_categories">
        @foreach ($kategori as $kat)
        <li><a href="#">{{ $kat->nama }}</a> <span class="count">{{ $kat->discuss->count() }} </span></li>
        @endforeach
    </ul>
</div>
